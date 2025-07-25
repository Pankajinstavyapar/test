<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\blogs;
use Illuminate\Support\Str;


class BlogController extends Controller
{
    public function blog()
{
    $data = blogs::all();

    return view('AdminInsta.tbl-blog');
}

public function BlogForm(Request $request)
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


   $blogs = new blogs;
   $blogs->blog_title = $request->blog_title;
   $blogSlug = Str::slug($request->blog_title);
   $blogs->blog_slug = $blogSlug;   
   $blogs->pg_status = "active";
   $blogs->date_time = $request->date_time;
   $blogs->pg_meta_title = $request->short_discription;
   $blogs->description = $request->description;
   $blogs->short_description = $request->short_description;
   $blogs->image = $image; 
   $blogs->save();

    return redirect()->route('AdminInsta.manage_blog')->with('success', 'Product updated successfully.');
            } catch (\Exception $e) {
           
                return back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
}

    public function index()
    {
        $blogs = blogs::orderBy('blog_id', 'desc')->paginate(5);
    return view('AdminInsta.manage-blog', ['blogs' => $blogs]);  
    }

   
    public function show(blogs $blogs): View
    {
        return view('AdminInsta.tbl-blog-edit', compact('blog'));
    }

    public function edit($id)
    {
        $blogs = blogs::findOrFail($id);
        return view('AdminInsta.tbl-blog-edit', compact('blogs'));
    }

   
    public function update(Request $request, $id)
{
    try {
        $validatedData = $request->validate([
            'blog_title' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $blogs = blogs::findOrFail($id); 
        $blogs->blog_title = $request->input('blog_title');
        $blogSlug = Str::slug($request->input('blog_title'));
        $blogs->blog_slug = $blogSlug;
        $blogs->pg_meta_title = $request->input('pg_meta_title');
        $blogs->pg_meta_keyword = $request->input('pg_meta_keyword');
        $blogs->short_description = $request->input('short_description');
        $blogs->description = $request->input('description');
        $blogs->pg_meta_desc = $request->input('pg_meta_desc');
        $blogs->date_time = $request->input('date_time');

        if ($request->hasFile('image')) {
            $imageName = time() . rand(10, 99) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path('images'), $imageName);
            $blogs->image = $imageName;
        }

        $blogs->save();

        return redirect()->route('AdminInsta.manage_blog')->with('success', 'Blog updated successfully.');
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return redirect()->back()->with('error', 'Blog not found.');
    } catch (\Illuminate\Validation\ValidationException $e) {
        return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while updating the blog. Please try again later.');
    }
}



 
    public function destroy(blogs $blogs)
{
    $blogs->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
}

public function updateStatus(Request $request)
{
    $blogs = blogs::findOrFail($request->blog_id);
    $blogs->pg_status = $request->pg_status;
    $blogs->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}
