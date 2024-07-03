<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ElabelCategory;
use App\Models\ElabelGeographicalIndication;
use App\Models\ElabelIngredients;
use App\Models\ElabelPackages;
use App\Models\ElabelProductTypes;
use App\Models\ElabelRecyclingRules;
use App\Models\ElabelResponsibleConsumption;
use App\Models\ElabelSustainibilityAttachments;
use App\Models\ElabelTypes;

class Elabel extends Model
{
    use HasFactory;
    public $table = "elabel";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'public_id',
        'product_name',
        'sku',
        'status',
        'qr',
        'type',
        'country',
        'vintage_year',
        'product_varieties',
        'alcohol_content_percentage',
        'net_content',
        'description',
        'alcohol_by_volume',
        'residual_sugar',
        'organic_acid',
        'glycerol',
        'symplify_display_of_negligible_values',
        'sustainibility_bio',
        'sustainibility_message',
        'user_id',
    ];

    public function category()
    {
        return $this->hasMany(ElabelCategory::class,'elabel_id');
    }

    public function geographicalIndication()
    {
        return $this->hasMany(ElabelGeographicalIndication::class,'elabel_id');
    }

    public function ingredients()
    {
        return $this->hasMany(ElabelIngredients::class,'elabel_id');
    }

    public function packages()
    {
        return $this->hasMany(ElabelPackages::class,'elabel_id');
    }

    public function productTypes()
    {
        return $this->hasMany(ElabelProductTypes::class,'elabel_id');
    }

    public function recyclingRules()
    {
        return $this->hasMany(ElabelRecyclingRules::class,'elabel_id');
    }

    public function responsibleConsumption()
    {
        return $this->hasMany(ElabelResponsibleConsumption::class,'elabel_id');
    }

    public function sustainibilityAttachments()
    {
        return $this->hasMany(ElabelSustainibilityAttachments::class,'elabel_id');
    }

}