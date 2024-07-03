<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElabelGeographicalIndication extends Model
{
    use HasFactory;
    public $table = "elabel_geographical_indication";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'elabel_id',
        'geographical_indication_id',
    ];

}