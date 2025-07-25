<?php

namespace App\Http\Controllers;
use App\Models\websiteMange;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function edit($id)
    {
        $website = websiteMange::findOrFail($id);
        return view('AdminInsta.website', compact('website'));
    }

    public function update(Request $request, $id)
{
    
    $validatedData = $request->validate([
       
        'website_icon' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
       
        'website_logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $website = websiteMange::find($id);
    $website->website_title = $request->input('website_title');
    $website->website_tagline = $request->input('website_tagline');
    $website->email = $request->input('email');
    $website->contact_email = $request->input('contact_email');
    $website->phone = $request->input('phone');
    $website->mobile = $request->input('mobile');
    $website->head_office_address = $request->input('head_office_address');
    $website->branch_office_address = $request->input('branch_office_address');
    $website->office_address_three = $request->input('office_address_three');
    $website->office_address_four = $request->input('office_address_four');
    $website->office_address_five = $request->input('office_address_five');
    $website->website_facebook = $request->input('website_facebook');
    $website->whatsapp_number = $request->input('whatsapp_number');
    $website->website_linkedin = $request->input('website_linkedin');
    $website->website_twitter = $request->input('website_twitter');
    $website->footer_text = $request->input('footer_text');
    $website->website_instagram = $request->input('website_instagram');
    $website->pinterest = $request->input('pinterest');
    $website->website_youtube = $request->input('website_youtube');
    
    if ($request->hasFile('website_logo')) {
        $logo_image = rand() . "." . $request->file("website_logo")->getClientOriginalExtension();
        $request->file("website_logo")->move(public_path() . "/images", $logo_image);
        $website->website_logo	 = $logo_image;
    }

    if ($request->hasFile('website_icon')) {
        $website_icon = rand() . "." . $request->file("website_icon")->getClientOriginalExtension();
        $request->file("website_icon")->move(public_path() . "/images", $website_icon);
        $website->website_icon	 = $website_icon;
    }

    if ($request->hasFile('second_logo')) {
        $second_logo = rand() . "." . $request->file("second_logo")->getClientOriginalExtension();
        $request->file("second_logo")->move(public_path() . "/images", $second_logo);
        $website->second_logo	 = $second_logo;
    }

$website->save();

    return redirect()->back()->with('success', 'Page updated successfully.');
}

 public function updateStatus(Request $request)
{
    $website = websiteMange::findOrFail($request->website_id);
    $website->status = $request->status;
    $website->save();

    return response()->json(['message' => 'User status updated successfully.']);
}

public function index()
    {
        $website = websiteMange::orderBy('website_id', 'desc')->paginate(5);
    return view('AdminInsta.manage-website', ['website' => $website]);  
    }
}
