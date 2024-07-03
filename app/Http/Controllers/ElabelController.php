<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Elabel;
use App\Models\ElabelCategory;
use App\Models\ElabelGeographicalIndication;
use App\Models\ElabelIngredients;
use App\Models\ElabelPackages;
use App\Models\ElabelProductTypes;
use App\Models\ElabelRecyclingRules;
use App\Models\ElabelResponsibleConsumption;
use App\Models\ElabelSustainibilityAttachments;
use App\Models\ElabelTypes;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ElabelController extends Controller
{

    public function all()
    {

        $records = Elabel::with([
            'category', 
            'geographicalIndication', 
            'ingredients', 
            'packages', 
            'productTypes', 
            'recyclingRules', 
            'responsibleConsumption', 
            'sustainibilityAttachments'
            ]
            )->get();

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function getByToken($token)
    {

        $records = Elabel::where('qr', $token)->with([
            'category', 
            'geographicalIndication', 
            'ingredients', 
            'packages', 
            'productTypes', 
            'recyclingRules', 
            'responsibleConsumption', 
            'sustainibilityAttachments'
            ]
            )->get();

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function get($id)
    {

        $records = Elabel::find($id)->with([
            'category', 
            'geographicalIndication', 
            'ingredients', 
            'packages', 
            'productTypes', 
            'recyclingRules', 
            'responsibleConsumption', 
            'sustainibilityAttachments'
            ]
            )->get();

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function save(Request $request) {
        $data = $request->only(['id','public_id','product_name','sku','type','status','qr','country','product_type','vintage_year','product_varieties','alcohol_content_percentage','net_content','description','alcohol_by_volume','residual_sugar','organic_acid','glycerol','symplify_display_of_negligible_values','sustainibility_bio','sustainibility_message']);
        
        $validator = Validator::make($data, [
            'id' => [
                'integer', 'nullable'
            ],
            'public_id' => [
                'string',
                'required'
            ],
            'product_name' => [
                'string', 'nullable'
            ],
            'sku' => [
                'string', 'nullable'
            ],
            'status' => [
                'string', 'nullable'
            ],
            'qr' => [
                'string', 'nullable'
            ],
            'country' => [
                'string', 'nullable'
            ],
            'product_type' => [
                'string', 'nullable'
            ],
            'vintage_year' => [
                'integer', 'nullable'
            ],
            'product_varieties' => [
                'string', 'nullable'
            ],
            'alcohol_content_percentage' => [
                'integer', 'nullable'
            ],
            'net_content' => [
                'integer', 'nullable'
            ],
            'description' => [
                'string', 'nullable'
            ],
            'alcohol_by_volume' => [
                'integer', 'nullable'
            ],
            'residual_sugar' => [
                'integer', 'nullable'
            ],
            'organic_acid' => [
                'integer', 'nullable'
            ],
            'glycerol' => [
                'integer', 'nullable'
            ],
            'symplify_display_of_negligible_values' => [
                'integer', 'nullable'
            ],
            'sustainibility_bio' => [
                'string', 'nullable'
            ],
            'sustainibility_message' => [
                'string', 'nullable'
            ]
        ]);
        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->getMessageBag()
                    ->toArray()
            ], 500);
        }   
        if(!isset($data['user_id']))
            $data['user_id'] = 1;
        if(isset($data['id'])) {
            $record = Elabel::find($data['id']);
            $record->fill($data);
        } else {
            $record = new Elabel($data);
        }
        $record->qr = Str::uuid();
        $record->save();

        $options = $request->only(['category', 'geographical_indication', 'ingredients', 'packages', 'product_types', 'recycling_rules', 'responsible_consumption', 'sustainibility_attachments', 'types', 'recycling_rules']);
        $this->ifPresentInsertOrUpdate($options, 'category', ElabelCategory::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'geographical_indication', ElabelGeographicalIndication::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'ingredients', ElabelIngredients::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'packages', ElabelPackages::class, $record->id);
        
        $this->ifPresentInsertOrUpdate($options, 'product_types', ElabelProductTypes::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'responsible_consumption', ElabelResponsibleConsumption::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'sustainibility_attachments', ElabelSustainibilityAttachments::class, $record->id);
        $this->ifPresentInsertOrUpdate($options, 'recycling_rules', ElabelRecyclingRules::class, $record->id);

        $records = Elabel::with([
            'category', 
            'geographicalIndication', 
            'ingredients', 
            'packages', 
            'productTypes', 
            'recyclingRules', 
            'responsibleConsumption', 
            'sustainibilityAttachments', 
            ]
            )->get();

        return response()->json([
            'data' => $records
        ], 200);
    }
    

    private function ifPresentInsertOrUpdate($data, $key, $model, $elabel_id) {
        $m = new $model;
        foreach($data[$key] as $record) {

            $exist = isset($record['id']) ? $m->find($record['id']) : [];
            
            if(empty($exist)) {
                $m->fill($record);
                $m->elabel_id = $elabel_id;
                $m->save();
            } else {
                $exist->fill($record);
                $exist->save();     
            }
        }
    }


}