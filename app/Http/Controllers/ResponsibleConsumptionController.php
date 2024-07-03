<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\ResponsibleConsumption;
use Illuminate\Support\Facades\Validator;

class ResponsibleConsumptionController extends Controller
{

    public function all()
    {

        $records = ResponsibleConsumption::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
