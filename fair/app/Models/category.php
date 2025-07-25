<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $primaryKey = 'product_cat_id';
    protected $table = 'tbl_category'; 
    protected $fillable = [
        'product_category_title',
        'category_subtitle',
        'pg_url',
        'pg_meta_title',
        'pg_meta_desc',
        'pg_meta_keyword',
        'pg_meta_desc',
        'short_description',
        'description',
        'image',
        'icon_image',
        'pg_status',
    ];
    public $timestamps = true;
}
