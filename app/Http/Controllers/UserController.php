<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function all()
    {

        $records = User::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function getUsers()
    {

        $records = User::where('role', 'user')->get();

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function get($id)
    {
        $record = User::where('id', $id)->get();
        return response()->json([
            'data' => $record[0]
        ], 200);
    }

    public function current()
    {
        $user = Auth::user();
        if($user == null) {
            return response()->json(['message' => 'user not logged'], 500);
        }
        $record = User::where('id', $user->id)->get();
        return response()->json([
            'data' => $record[0]
        ], 200);
    }


    public function update(Request $request)
    {
        $data = $request->only(['email','password','role','name','surname','language','company_name','brand_name','company_logo','primary_color','hide_producer_name','footer_text','statistics','plan']);
        $validator = Validator::make($data, [
            'email' => [
                'email'
            ],
            'password' => [
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
            ], 500);
        }   
        $record = User::find($request->get("id"));
        if (empty($record)) {
            return "No record found with id: " . $id;
        }
        
        $record->fill($data);
        $record->save();
        return $record; 
    }

    public function create(Request $request)
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
        $record = new User();
        $record->fill($data);
        $record->save();
        return $record; 
    }

    public function delete($id)
    {
        User::where('id', $id)->delete();
        return response()->json(['message' => 'Row deleted successfully']);
    }
    
}
