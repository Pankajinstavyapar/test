<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
     use HasFactory;
    // protected $primaryKey = 'id ';
    public $timestamps = false;
    protected $table = 'contact'; 
      protected $fillable = [
        'query', 'company', 'message', 'name', 'email', 'phone', 'address', 'ip_address'
        ];
}
