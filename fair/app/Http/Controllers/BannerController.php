<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\banner;

class BannerController extends Controller
{
    public function BannerShow()
{
   
    if (Auth::check()) {
        try {
           
            $data = banner::all();

            
            return view('AdminInsta.banner', compact('data'));
        } catch (\Exception $e) {
            
            return redirect("AdminInsta/login")->with('error', 'Something went wrong. Please try again.');
        }
    }

    
    return redirect("AdminInsta/login")->with('error', 'You are not allowed to access this page.');
}

public function BannerForm(Request $request)
    {
        $validatedData = $request->validate([
            'banner_image' => 'required|image|max:2048',
          
        ]);
       
        $banner_image = rand() . "." . $request->file("banner_image")->getClientOriginalExtension();
                $request->file("banner_image")->move(public_path() . "/images", $banner_image);

        $banner = new banner;

        $banner->banner_title = $request->banner_title;
        $banner->banner_second_title = $request->banner_second_title;
        $banner->banner_position = $request->banner_position;
        $banner->banner_discription = $request->banner_discription;
        $banner->pg_status = "active"; 
        $banner->banner_image = $banner_image; 
        $banner->save();

        $data = banner::all(); 

         return redirect()->route('AdminInsta.manage-banners')->with('success', 'Product updated successfully.');
    }

    public function ManageBanner()
    {
        
        
        $banner = banner::orderBy('banner_id', 'desc')->paginate(5);
        return view('AdminInsta.manage-banners', ['banner' => $banner]); 
    }

    public function BannerEdit($banner_id)
    {
        $banner = banner::findOrFail($banner_id);
        return view('AdminInsta.banner-edit', compact('banner'));
    }

    public function BannerUpdate(Request $request, $banner_id)
{
    $validatedData = $request->validate([
       
        'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $banner = banner::findOrFail($banner_id);
    $banner->banner_title = $request->input('banner_title');
    $banner->banner_second_title = $request->input('banner_second_title');
    $banner->banner_position = $request->input('banner_position');
    $banner->banner_discription = $request->input('banner_discription');
    $banner->pg_status = "active";

    if ($request->hasFile('banner_image')) {
        $banner_image = rand() . "." . $request->file("banner_image")->getClientOriginalExtension();
        $request->file("banner_image")->move(public_path() . "/images", $banner_image);
        $banner->banner_image = $banner_image;
    }

    $banner->save();

     return redirect()->route('AdminInsta.manage-banners')->with('success', 'Product updated successfully.');
}

public function Bannerdestroy(banner $banner)
    {
        $banner->delete();

        return redirect()->back()->with('success', 'Page deleted successfully.');
    }

    public function BannerStatus(Request $request)
{
    $banner = banner::findOrFail($request->banner_id);
    $banner->pg_status = $request->pg_status;
    $banner->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}
