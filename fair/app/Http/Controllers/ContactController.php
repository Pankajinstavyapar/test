<?php

namespace App\Http\Controllers;
use App\Models\contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{


 public function index()
    {
        $contact = contact::orderBy('id', 'desc')->paginate(10);
        return view('AdminInsta.contact', ['contact' => $contact]); 
    }

    public function show(contact $contact)
    {
        return view('AdminInsta.lead-view', compact('contact'));
    }

    public function edit($contact_id)
{
    $contact = contact::findOrFail($contact_id);
    return view('AdminInsta.lead-view', compact('contact'));
}

}