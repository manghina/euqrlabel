<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElabelRecyclingRules extends Model
{
    use HasFactory;
    public $table = "elabel_recycling_rules";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'elabel_id',
        'recycling_rule_containers_id',
        'recycling_rule_materials_id'
    ];

}