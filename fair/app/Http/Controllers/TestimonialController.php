<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\testimonials;

class TestimonialController extends Controller
{
    public function TestimonialShow()
    {
        $data = testimonials::all();

        return view('AdminInsta.testimonials', compact('data'));
    }

    public function TestimonialForm(Request $request)
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

        $testimonial = new testimonials;
        $testimonial->client_name = $request->client_name;
        $testimonial->description = $request->description;
        $testimonial->short_discription = $request->short_discription; 
        $testimonial->pg_status = "active"; 
        $testimonial->image = $image; 
        $testimonial->save();


        return redirect()->route('AdminInsta.manage-testimonial')->with('success', 'Product updated successfully.');
            } catch (\Exception $e) {
            
                return back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
}

public function TestimonialManage()
{
    $testimonial_show = testimonials::orderBy('testimonial_id', 'desc')->paginate(5);
    return view('AdminInsta.manage-testimonials', ['testimonial_show' => $testimonial_show]); 
}

public function TestimonialEdit($testimonial_id)
{
    $testimonial = testimonials::findOrFail($testimonial_id);
    return view('AdminInsta.testimonials-edit', compact('testimonial'));
}

public function TestimonialUpdate(Request $request, $testimonial_id)
{
    $validatedData = $request->validate([
       
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $testimonial = testimonials::findOrFail($testimonial_id);
    $testimonial->client_name = $request->input('client_name');
    $testimonial->short_discription = $request->input('short_discription');
    $testimonial->description = $request->input('description');
    $testimonial->pg_status = "active";

    if ($request->hasFile('image')) {
        $testimonial_image = rand() . "." . $request->file("image")->getClientOriginalExtension();
        $request->file("image")->move(public_path() . "/images", $testimonial_image);
        $testimonial->image = $testimonial_image;
    }

    $testimonial->save();

    return redirect()->route('AdminInsta.manage-testimonial')->with('success', 'Product updated successfully.');
}

public function TestimonialDestroy(testimonials $testimonial)
{
    $testimonial->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
}

public function TestiupdateStatus(Request $request)
{
    $testimonial = testimonials::findOrFail($request->testimonial_id);
    $testimonial->pg_status = $request->pg_status;
    $testimonial->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}