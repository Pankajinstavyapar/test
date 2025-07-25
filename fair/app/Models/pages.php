<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pages extends Model
{
    protected $primaryKey = 'pg_id';
    protected $table = 'tbl_pages'; 
    protected $fillable = [
        'pg_name',
        'redirection_url',
        'pg_meta_title',
        'pg_meta_keyword',
        'pg_meta_desc',
        'short_description',
        'footer_content',
        'description',
        'pg_status',
        'pg_url',
    ];
    public $timestamps = true;
}
