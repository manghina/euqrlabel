<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\RecyclingRuleMaterials;
use Illuminate\Support\Facades\Validator;

class RecyclingRuleMaterialsController extends Controller
{

    public function all()
    {

        $records = RecyclingRuleMaterials::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
