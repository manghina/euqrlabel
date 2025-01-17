<?php

namespace App\Http\API\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {

        $data = $request->only(['email','password','role','name','surname','language','company_name','brand_name','company_logo','primary_color','hide_producer_name','footer_text','statistics','plan']);
        $validator = Validator::make($data, [
            'email' => [
                'required',
                'email',
                'unique:users'
            ],
            'password' => [
                'required',
                'string',
                'min:6',
                'max:50'
            ],
            'role' => [
                'string'
            ],
            'name' => [
                'string'
            ],
            'surname' => [
                'string'
            ],
            'language' => [
                'integer'
            ],
            'company_name' => [
                'string'
            ],
            'brand_name' => [
                'string'
            ],
            'company_logo' => [
                'string'
            ],
            'primary_color' => [
                'string'
            ],
            'hide_producer_name' => [
                'integer'
            ],
            'footer_text' => [
                'string'
            ],
            'statistics' => [
                'integer'
            ],
            'plan' => [
                'integer'
            ]
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->getMessageBag()
                    ->toArray()
            ], Response::HTTP_BAD_REQUEST);
        }
        $user = User::create();
        $user->fill($data);
        $user->password = bcrypt($data['password']);
        $user->save();

        $credentials = $request->only(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json([
                'error' => 'Unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }
        return $this->respondWithToken($token, $user);
    }

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json([
                'error' => 'Unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }
        $user = User::where("email", $request->get('email'))->get();
        return $this->respondWithToken($token, $user[0]);
    }

    public function user()
    {

        return response()->json(auth('api')->user());
    }

    public function logout()
    {
        auth('api')->logout();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function refresh()
    {
        return $this->respondWithToken(auth('api')->refresh());
    }
    protected function respondWithToken($token, $user = null)
    {
        return response()->json([
            'access_token' => $token,
            'user' => $user,
            'token_type' => 'bearer',
            'expires_in' => config('jwt.ttl') * 60
        ]);
    }
    public function redirectToAuth($provider)
    {
        $validated = $this->validateProvider($provider);
        if (!is_null($validated)) {
            return $validated;
        }
        return response()->json([
            'url' => Socialite::driver($provider)
                         ->stateless()
                         ->redirect()
                         ->getTargetUrl(),
            'status' => Response::HTTP_OK
        ]);
    }
    public function handleAuthCallback($provider)
    {
        $validated  = $this->validateProvider($provider);
        if (!is_null($validated)) {
                return $validated;
        }
        try {
            $user = Socialite::driver('google')->stateless()->user();
        } catch (Exception $e) {
            
          //  return response()->json(['error' => 'Invalid  credentails']);
            return response()->json(['error' => $e->getMessage()]);
        }
        $now = now();
        $userCreated = User::firstOrCreate(
            [
                'email' => $user->getEmail()
            ],
            [
                'email_verified_at' => now(),
                'name' => $user->getName(),
                'status' => true,
                'surname' => '',
                'birthday' => $now,
                'genre' => ' ',
                'password' => '112wdd2q4:/',
                'phone' => ' ',
                'country' => ' ',
                'state' => ' ',
                'city' => ' ',
                'bio' => ' ',
            ]
        );
        $userCreated->providers()->updateOrCreate(
            [
                'provider' => $provider,
                'provider_id' => $user->getId(),
            ],
            [
                'avatar' => $user->getAvatar()
            ]
        );
        $credentials = ['email' => $user->getEmail() , 'password' => '112wdd2q4:/'];
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json([
                'error' => 'Unauthorized'
            ], Response::HTTP_UNAUTHORIZED);
        }
        return $this->respondWithToken($token);
    }
    protected function validateProvider($provider)
    {
        if (!in_array($provider, ['google'])) {
            return response()->json(['error' => 'Please login with google' , 422 ]);
        }
    }
}
