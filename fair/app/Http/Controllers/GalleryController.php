<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gallery;
use App\Models\product;

class GalleryController extends Controller
{
    public function index()
{
 
    $gallery = gallery::with('product')->orderBy('gallery_id', 'desc')->paginate(10);
    
    return view('AdminInsta.manage-gallery', ['gallery' => $gallery]);
}

   
    public function gallery()
{
  
    $data = gallery::all();

    return view('AdminInsta.gallery');
}

public function PageForm(Request $request)
{
    try {
       
        $validatedData = $request->validate([
            'gallery_image' => 'required|image|max:2048',
        ]);

       
        $image = rand() . "." . $request->file("gallery_image")->getClientOriginalExtension();
        $request->file("gallery_image")->move(public_path() . "/images", $image);

       
        $gallery = new gallery;
        $gallery->gallery_title = $request->gallery_title;
        $gallery->gallery_category = $request->gallery_category;
        $gallery->pg_status = "active";
        $gallery->short_discription = $request->short_discription;
        $gallery->gallery_image = $image; 
        $gallery->save();

    
        return back()->with('success', 'Your form has been submitted.');

    } catch (\Exception $e) {
       
        

       
        return back()->with('error', 'An error occurred while submitting your form. Please try again later.');
    }
}

public function edit($id)
    {
        $gallery = gallery::findOrFail($id);
        return view('AdminInsta.gallery-edit', compact('gallery'));
    }

public function update(Request $request, $id)
{
    $validatedData = $request->validate([
        
        'gallery_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $gallery = gallery::find($id);
    $gallery->gallery_title = $request->input('gallery_title');
    $gallery->gallery_category = $request->input('gallery_category');
    $gallery->short_discription = $request->input('short_discription');
    $gallery->pg_status = $request->input('pg_status');
   

    if ($request->hasFile('gallery_image')) {
        $gallery_image = rand() . "." . $request->file("gallery_image")->getClientOriginalExtension();
        $request->file("gallery_image")->move(public_path() . "/images", $gallery_image);
        $gallery->gallery_image = $gallery_image;
    }

    $gallery->save();

    return redirect()->back()->with('success', 'Page updated successfully.');
}

public function destroy(gallery $gallery)
{
    $gallery->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
}

public function updateStatus(Request $request)
{
    $gallery = gallery::findOrFail($request->gallery_id);
    $gallery->pg_status = $request->pg_status;
    $gallery->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}
