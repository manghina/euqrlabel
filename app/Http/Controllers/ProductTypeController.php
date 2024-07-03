<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\ProductType;
use Illuminate\Support\Facades\Validator;

class ProductTypeController extends Controller
{

    public function all()
    {

        $records = ProductType::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
