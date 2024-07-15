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
use App\Models\Types;
use App\Models\Ingredient;
use App\Models\ResponsibleConsumption;
use App\Models\RecyclingRuleMaterials;
use App\Models\RecyclingRuleContainers;
use App\Models\ProductType;
use App\Models\Packages;
use App\Models\GeographicalIndication;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Http\Controllers\ImageUploadController;

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
            )->find($id);
        
        $sub = asset('storage/' . $records->sub_image);
        $pre = asset('storage/' . $records->preview_image);
        $records['sub'] = $sub;
        $records['pre'] = $pre;

        return response()->json([
            'data' => $records
        ], 200);
    }

    public function getById($id)
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
            )->find($id);

        return $records;
    }

    public function getOptions() {
        $ingredients = Ingredient::all();
        $countries = GeographicalIndication::all();
        $packages = Packages::all();
        $productType = ProductType::all();
        $recyclingRuleContainers = RecyclingRuleContainers::all();
        $recyclingRuleMaterials = RecyclingRuleMaterials::all();
        $responsibleConsumption = ResponsibleConsumption::all();
        $types = Types::all();

        return response()->json([
            'data' => [
                'countries' => $countries,
                'ingredients' => $ingredients,
                'packages' => $packages,
                'productType' => $productType,
                'containers' => $recyclingRuleContainers,
                'materials' => $recyclingRuleMaterials,
                'consumption' => $responsibleConsumption,
                'types' => $types
            ]
        ], 200);
    }

    public function save(Request $request) {
        $data = $request->only(['id','public_id','product_name','sku','type','status','qr','country','product_type','vintage_year','product_varieties','alcohol_content_percentage','net_content','description','alcohol_by_volume','residual_sugar','organic_acid','glycerol','symplify_display_of_negligible_values','sustainibility_bio','sustainibility_message', 'energy_kj', 'energy_kcal', 'fat', 'fat_sat', 'carb', 'carb_sugar', 'protein', 'salt', 'drive', 'pregnant', 'preview_image', 'sub_image', 'age'
    ]);
   
    
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
                'string', 'nullable'
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
            file_put_contents("maporcodio", "diocane");
            $record = Elabel::find($data['id']);
            $record->fill($data);
        } else {
            file_put_contents("maporcodio", print_r($data, true));
            $record = new Elabel($data);
        }
        $record->qr = Str::uuid();
        $record->save();

        $options = $request->only(['ingredients', 'geographical_indication', 'ingredients', 'packages', 'product_types', 'recycling_rules', 'responsible_consumption', 'sustainibility_attachments', 'types', 'recycling_rules']);


        $tmp = ElabelGeographicalIndication::where('elabel_id', $record->id)->get();
        foreach($tmp as $t) {
            $t->delete();
        }
        $model = new ElabelGeographicalIndication();
        $model->geographical_indication_id = $request->get('geographical_indication');
        $model->elabel_id = $record->id;
        $model->save();

        $model = new ElabelIngredients();
        $tmp = $model::where('elabel_id', $record->id)->get();
        foreach($tmp as $t) {
            $t->delete();
        }
        $this->ifPresentInsertOrUpdate($options, 'ingredients', ElabelIngredients::class, $record->id);
        
        $tmp = ElabelPackages::where('elabel_id', $record->id)->get();
        foreach($tmp as $t) {
            $t->delete();
        }
        $model = new ElabelPackages();
        $model->package_id = $request->get('packages');
        $model->elabel_id = $record->id;
        $model->save();        
        
        $this->ifPresentInsertOrUpdate($options, 'product_types', ElabelProductTypes::class, $record->id);
        
        $this->ifPresentInsertOrUpdate($options, 'responsible_consumption', ElabelResponsibleConsumption::class, $record->id);
        
        $this->ifPresentInsertOrUpdate($options, 'sustainibility_attachments', ElabelSustainibilityAttachments::class, $record->id);
        
        $this->ifPresentInsertOrUpdate($options, 'recycling_rules', ElabelRecyclingRules::class, $record->id);

        return $this->get($record->id);
    }

    public function create(Request $request) {
        $data = $request->only(['public_id','product_name','sku']);
        
        $validator = Validator::make($data, [
            'public_id' => [
                'string',
                'required'
            ],
            'product_name' => [
                'string', 'nullable'
            ],
            'sku' => [
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

        $record = new Elabel($data);
        $record->qr = Str::uuid();
        $record->save();

        return $record;
    }
    

    private function ifPresentInsertOrUpdate($data, $key, $model, $elabel_id) {
        if(!isset($data[$key]))
            return;
        $m = new $model;
        foreach($data[$key] as $record) {
            $r = $record[0];
                $m->fill($r);
                $m->elabel_id = $elabel_id;
                $m->save();
        }
    }

}