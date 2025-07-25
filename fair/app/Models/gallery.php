<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gallery extends Model
{
    protected $primaryKey = 'gallery_id';
    protected $table = 'tbl_gallery'; 
    protected $fillable = [
        'gallery_category',
        'gallery_title',
        'gallery_position',
        'gallery_image',
        'pg_status',
        'logo_image',
    ];
    public $timestamps = true;
    
    public function product()
{
    return $this->belongsTo(product::class, 'gallery_category', 'product_id');
}
}
