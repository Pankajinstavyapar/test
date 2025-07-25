<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\pages;
use App\Models\gallery;

class PagesController extends Controller
{
    public function PageShow()
{
  
    $data = pages::all();

    return view('AdminInsta.pages');
}




public function PageForm(Request $request)
{
try {
 $validatedData = $request->validate([
     'image' => 'nullable|image|max:2048', 
     
 ]);

 $image = null;


 if ($request->hasFile("image")) {
     $image = rand() . "." . $request->file("image")->getClientOriginalExtension();
     $request->file("image")->move(public_path() . "/images", $image);
 }

 $pages = new pages; 
 $pages->pg_name = $request->pg_name;
 $pages->pg_url = Str::slug($request->pg_name);
 $pages->pg_meta_title = $request->meta_title;
 $pages->pg_meta_keyword = $request->meta_keyword;
 $pages->pg_meta_desc = $request->meta_description;
 $pages->short_description = $request->shrt_description;
 $pages->description = $request->description;
 $pages->pg_status = "active";
 $pages->image = $image;
 $pages->save();


     $pages->save();

    return redirect()->route('AdminInsta.manage-pages')->with('success', 'Product updated successfully.');
     } catch (\Exception $e) {
     
         return back()->with('error', 'An error occurred: ' . $e->getMessage());
     }
}
public function ManagePages()
{
    $pages = pages::orderBy('pg_id', 'asc')->paginate(10);
return view('AdminInsta.manage-page', ['pages' => $pages]);  
}

public function PageEdit($id)
{
    $pages = pages::findOrFail($id);
    return view('AdminInsta.page-edit', compact('pages'));
}

public function PageUpdate(Request $request, $pg_id)
{
    $pages = Pages::findOrFail($pg_id); 

    
    $validatedData = $request->validate([
        'pg_name' => 'required|string',
        'image' => 'nullable|image|max:2048',
        'image2' => 'nullable|image|max:2048',
    ]);

   
    if ($request->hasFile('image')) {
        $image = rand() . "." . $request->file("image")->getClientOriginalExtension();
        $request->file("image")->move(public_path("images"), $image);
        $pages->image = $image;
    }
    
     if ($request->hasFile('image2')) {
        $image2 = rand() . "." . $request->file("image2")->getClientOriginalExtension();
        $request->file("image2")->move(public_path("images"), $image2);
        $pages->image2 = $image2;
    }

    
    $pages->pg_name = $request->pg_name;
    $pages->pg_url = Str::slug($request->pg_name);
    $pages->pg_meta_title = $request->pg_meta_title;
    $pages->pg_meta_keyword = $request->meta_keyword;
    $pages->pg_meta_desc = $request->meta_description;
    $pages->short_description = $request->shrt_description;
    $pages->description = $request->description;
    $pages->pg_status = "active";
    $pages->save();

    return redirect()->route('AdminInsta.manage-pages')->with('success', 'Page updated successfully.');
}

public function Pagedestroy(Pages $pages)
{
    $pages->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
}
public function PageStatus(Request $request)
{
    $pages = pages::findOrFail($request->pg_id);
    $pages->pg_status = $request->pg_status;
    $pages->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}
