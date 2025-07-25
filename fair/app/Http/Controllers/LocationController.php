<?php

namespace App\Http\Controllers;
use App\Models\location;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class LocationController extends Controller
{
    public function LocationShow()
    {
     
        $data = location::all();

        return view('AdminInsta.location', compact('data'));
    }

   public function LocationForm(Request $request)
{
    
    $request->validate([
        'loaction_name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'short_description' => 'nullable|string',
    ]);

 
    $existing = location::where('loaction_name', $request->loaction_name)->first();

    if ($existing) {
        return redirect()->back()->with('error', 'Location name already exists!');
    }

   
    $location = new location;
    $location->loaction_name = $request->loaction_name;
    $location->pg_url = Str::slug($request->loaction_name);
    $location->description = $request->description;
    $location->short_description = $request->short_description;
    $location->pg_status = "active";
    $location->save();

    return redirect()->route('AdminInsta.manage-location')->with('success', 'Location added successfully.');
}


public function LocationManage()
    {
        $location = location::orderBy('loaction_id', 'desc')->paginate(10);
        return view('AdminInsta.manage-location', ['location' => $location]); 
    }

    public function Locationedit($location_id)
{
    
    $location = location::findOrFail($location_id);
   
    return view('AdminInsta.location-edit', compact('location'));
}

public function LocationUpdate(Request $request, $location_id)
{
    try {
        $validatedData = $request->validate([
           
        ]);

        $location = Location::findOrFail($location_id);

      
        $location->loaction_name = $request->input('loaction_name');
        $locationSlug = Str::slug($request->input('loaction_name'));
        $location->pg_url = $locationSlug;
        $location->description = $request->input('description');
        $location->short_description = $request->input('short_description');
        $location->pg_status = "active";

        if ($request->hasFile('location_image')) {
            $location_image = rand() . "." . $request->file("location_image")->getClientOriginalExtension();
            $request->file("location_image")->move(public_path() . "/images", $location_image);
            $location->location_image = $location_image;
        }

        $location->save();

        return redirect()->route('admin.manage_location')->with('success', 'Product updated successfully.');
    } catch (\Exception $e) {
        
        return redirect()->back()->with('error', 'An error occurred while updating.');
    }
}

public function LocationupdateStatus(Request $request)
{
    $location = location::findOrFail($request->loaction_id);
    $location->pg_status = $request->pg_status;
    $location->save();

    return response()->json(['message' => 'location status updated successfully.']);
}

public function Locationdestroy(location $location)
    {
        $location->delete();

        return redirect()->back()->with('success', 'location deleted successfully.');
    }

}
