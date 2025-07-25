<?php

namespace App\Http\Controllers;
use App\Models\subdomain;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SubdomainController extends Controller
{
    public function SubdomainShow()
    {
       
        $data = subdomain::all();
    
        return view('AdminInsta.subdomain');
    }

    public function SubdomainForm(Request $request)
    {
        try {
        $validatedData = $request->validate([
            'subdomain_image' => 'nullable|image|max:2048', 
            
        ]);

        $image = null;

       
        if ($request->hasFile("subdomain_image")) {
            $image = rand() . "." . $request->file("subdomain_image")->getClientOriginalExtension();
            $request->file("subdomain_image")->move(public_path() . "/images", $image);
        }
    
        $subdomain = new subdomain;
        $subdomain->subdomain_name = $request->subdomain_name;
        $subdomainSlug = Str::slug($request->subdomain_name);
        $subdomain->subdomain_slug = $subdomainSlug;
        $subdomain->meta_title = $request->meta_title;
        $subdomain->meta_keywords = $request->meta_keywords;
        $subdomain->meta_description = $request->meta_description;
        $subdomain->description = $request->description;
        
        $subdomain->short_discription = $request->short_discription;
        $subdomain->status = "active";
        $subdomain->subdomain_image =$image; 
        $subdomain->save();
        
        
       return redirect()->route('AdminInsta.manage-subdomain')->with('success', 'Product updated successfully.');
            } catch (\Exception $e) {
            
                return back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
         }
       

    public function SubdomainManage()
    {
        $subdomain = subdomain::orderBy('subdomain_id', 'desc')->paginate(5);
    return view('AdminInsta.manage-subdomain', ['subdomain' => $subdomain]);  
    }

    public function SubdomainEdit($subdomain_id)
    {
        $subdomain = subdomain::findOrFail($subdomain_id);
        return view('AdminInsta.subdomain-edit', compact('subdomain'));
    }

    public function SubdomainDestroy(subdomain $subdomain)
    {
        $subdomain->delete();
    
        return redirect()->back()->with('success', 'Page deleted successfully.');
    }

    public function SubdomainUpdateStatus(Request $request)
    {
        $subdomain = subdomain::findOrFail($request->subdomain_id);
        $subdomain->status = $request->status;
        $subdomain->save();
    
        return response()->json(['message' => 'User status updated successfully.']);
    }

    public function SubdomainUpdate(Request $request, $subdomain_id)
    {
        
        $validatedData = $request->validate([
            
            'subdomain_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $subdomain = subdomain::find($subdomain_id);
        $subdomain->short_discription = $request->input('short_discription');
        $subdomain->description = $request->input('description');
        $subdomain->subdomain_name = $request->input('subdomain_name');
        $subdomain->subdomain_slug = Str::slug($request->input('subdomain_slug'));
        $subdomain->meta_keywords = $request->input('meta_keywords');
        $subdomain->meta_title = $request->input('meta_title');
        $subdomain->meta_description = $request->input('meta_description');
        $subdomain->status = "active";
    
      if ($request->hasFile('subdomain_image')) {
           $subdomain_image = rand() . "." . $request->file("subdomain_image")->getClientOriginalExtension();
            $request->file("subdomain_image")->move(public_path() . "/images", $subdomain_image);
            $subdomain->subdomain_image =$subdomain_image;
        }
    
        $subdomain->save();
    
        return redirect()->route('AdminInsta.manage-subdomain')->with('success', 'Product updated successfully.');
    }
}
