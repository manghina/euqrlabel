<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    public function all()
    {

        $records = Category::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
