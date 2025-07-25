<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subdomain extends Model
{
    protected $primaryKey = 'subdomain_id';
    protected $table = 'tbl_subdomain'; 
    protected $fillable = [
        'subdomain_name',
        'subdomain_slug',
        'subdomain_image',
        'meta_title',
        'meta_keywords',
        'meta_description',
        'status',
        'short_discription',
        'description',
        ];
    public $timestamps = true;
}
