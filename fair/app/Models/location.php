<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class location extends Model
{
    protected $primaryKey = 'loaction_id';
    protected $table = 'tbl_loaction'; 
    protected $fillable = [
        'loaction_name',
        'parent_loaction',
        'location_image',
        'short_description',
        'description',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'pg_status',
        
    ];
    public $timestamps = true;
}
