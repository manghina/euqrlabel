<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Models\GeographicalIndication;
use Illuminate\Support\Facades\Validator;

class GeographicalIndicationController extends Controller
{

    public function all()
    {

        $records = GeographicalIndication::all();

        return response()->json([
            'data' => $records
        ], 200);
    }

}
