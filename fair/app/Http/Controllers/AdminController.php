<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\subdomain;
use App\Models\banner;
use App\Models\category;
use App\Models\product;
use App\Models\gallery;
use App\Models\testimonials;
use App\Models\location;
use App\Models\pages;


class AdminController extends Controller
{
    public function dashboard()
    {
        if (Auth::check()) {
            return view('AdminInsta.Backend.Layout.dashboard');
        } else {
            return redirect("AdminInsta/login")->with('error', 'You are not allowed to access');
        }
    }
    
    public function count(Request $request){
     
        $bannerRecordCount = banner::where('pg_status', 'Active')->count();
        $categoryRecordCount = category::where('pg_status', 'Active')->count();
        $productRecordCount = product::where('pg_status', 'Active')->count();
        $galleryRecordCount = gallery::where('pg_status', 'Active')->count();
        $testiRecordCount = testimonials::where('pg_status', 'Active')->count();
        $loactionRecordCount = location::where('pg_status', 'Active')->count();
        $pageRecordCount = pages::where('pg_status', 'Active')->count();

        return view('AdminInsta.Backend.Layout.dashboard', [
            
            'bannerRecordCount' => $bannerRecordCount,
            'categoryRecordCount' => $categoryRecordCount,
            'productRecordCount' => $productRecordCount,
            'galleryRecordCount' => $galleryRecordCount,
            'testiRecordCount' => $testiRecordCount,
            'loactionRecordCount' => $loactionRecordCount,
            'pageRecordCount' => $pageRecordCount,
        ]);
    }
}
