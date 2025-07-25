<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $primaryKey = 'product_id';
    protected $table = 'tbl_product'; 
    protected $fillable = [
       
        'product_title',
        'product_cat',
        'pg_url',
        'image',
        'sort_description',
        'description',
        'pg_meta_title',
        'pg_meta_keyword',
        'pg_meta_desc',
        'banner',
        'pg_status',

    ];
    public $timestamps = true;

    public function category()
{
    return $this->belongsTo(category::class, 'product_cat', 'product_cat_id');
}
}
