<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $primaryKey = 'banner_id';
    protected $table = 'tbl_banners'; 
    protected $fillable = [
        'banner_title',
        'banner_second_title',
        'banner_position',
        'banner_image',
        'banner_category',
        'banner_discription',
        'banner_type',
        
    ];
    public $timestamps = true;
}
