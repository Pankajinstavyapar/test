<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonials extends Model
{
    protected $primaryKey = 'testimonial_id';
    protected $table = 'tbl_testimonial'; 
    protected $fillable = [
        'client_name',
        'client_company',
        'client_designation',
        'description',
        'short_discription',
        'pg_status',
        'image',
    ];
    public $timestamps = true;
}
