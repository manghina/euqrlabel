<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\RecyclingRuleContainers;
use Illuminate\Support\Facades\Validator;

class RecyclingRuleContainersController extends Controller
{

    public function all()
    {

        $records = RecyclingRuleContainers::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
