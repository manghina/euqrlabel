<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Packages;
use Illuminate\Support\Facades\Validator;

class PackagesController extends Controller
{

    public function all()
    {

        $records = Packages::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
