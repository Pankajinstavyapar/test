<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class websiteMange extends Model
{
    protected $primaryKey = 'website_id';
    protected $table = 'tbl_website_management'; 
    protected $fillable = [
        'status',
        'pinterest',
        'mobile',
        'phone',
        'website_tagline',
        'email',
        'contact_email',
        'head_office_address',
        'branch_office_address',
        'office_address_three',
        'office_address_four',
        'office_address_five',
        'website_title',
        'website_domain',
        'website_url',
        'website_facebook',
        'website_logo',
        'website_icon',
        'whatsapp_number',
        'second_logo',

    ];
    public $timestamps = true;
}
