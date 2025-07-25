<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogs extends Model
{
    protected $primaryKey = 'blog_id';
    protected $table = 'tbl_blog'; 
    protected $fillable = [
        'blog_title',
        'blog_slug',
        'pg_meta_title',
        'pg_meta_keyword',
        'pg_meta_desc',
        'description',
        'short_description',
        'date_time',
        'pg_status',
        'image',
        'created_at',
        ];
    public $timestamps = true;
}
