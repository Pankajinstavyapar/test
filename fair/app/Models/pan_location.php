<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pan_location extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'pan_locations'; 
    protected $fillable = [
        'country_name',
        'state_name',
        'country_slug',
        'state_slug',
        'city_slug',
        'short_description',
        'description',
        'extra_description',
        'meta_title',
        'meta_description',
        'meta_keyword',
        'is_active',
    ];
    public $timestamps = true;
}
