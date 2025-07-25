<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function CategoryShow(Request $request)
    {  $data = category::all();
        
        return view('AdminInsta.category', ['data' => $data]);
    }

    public function CategoryFrom(Request $request)
{
    $category = new category;
    
    $category->product_category_title = $request->product_category_title;
    $categorySlug = Str::slug($request->product_category_title);
    $category->pg_url = $categorySlug;
    
    $category->short_description = $request->short_description;
    $category->description = $request->description;
    $category->pg_status = "active";
    $category->save();

     return redirect()->route('AdminInsta.manage-category')->with('success', 'Product updated successfully.');
}

    public function CategoryManage()
    {
        $category = category::orderBy('product_cat_id', 'desc')->paginate(5);
    return view('AdminInsta.manage-category', ['category' => $category]);  
    }
 
    public function Categoryedit($id)
    {
        $category = category::findOrFail($id);
        return view('AdminInsta.category-edit', compact('category'));
    }

    public function CategoryUpdate(Request $request, $id)
{
  
    $category = category::find($id);

    $category->product_category_title = $request->input('product_category_title');
    $category->pg_url = $request->input('pg_url');
    $category->short_description = $request->input('short_description');
    $category->description = $request->input('description');
    $category->pg_meta_title = $request->input('pg_meta_title');
    $category->pg_meta_keyword = $request->input('pg_meta_keyword');
    $category->pg_meta_desc = $request->input('pg_meta_desc');
    $category->pg_status = "active";
    $category->save();

     return redirect()->route('AdminInsta.manage-category')->with('success', 'Product updated successfully.');
}

public function destroy(category $category)
{
    $category->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
}
}
