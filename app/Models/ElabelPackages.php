<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElabelPackages extends Model
{
    use HasFactory;
    public $table = "elabel_packages";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'elabel_id',
        'package_id'
    ];

}