<?php

namespace App\Http\Controllers;
use App\Models\product;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function ProductShow()
    {
        $data = product::all();

      
        return view('AdminInsta.product', ['data' => $data]);
    }

    public function ProductManage()
    {
        $product = product::orderBy('product_id', 'asc')->paginate(10);

    return view('AdminInsta.manage-product', ['product' => $product]);  
    }

    public function ProductForm(Request $request)
       {
    try {
        $validatedData = $request->validate([
            'image' => 'nullable|image|max:2048', 
             'image_one' => 'nullable|image|max:2048', 
            
        ]);

        $image = null;
         $image_one = null;

       
        if ($request->hasFile("image")) {
            $image = rand() . "." . $request->file("image")->getClientOriginalExtension();
            $request->file("image")->move(public_path() . "/images", $image);
        }
        
        if ($request->hasFile("image_one")) {
            $image_one = rand() . "." . $request->file("image_one")->getClientOriginalExtension();
            $request->file("image_one")->move(public_path() . "/images", $image_one);
        }

            $product = new product;
            $product->product_title = $request->product_title;
            $product->product_cat = $request->product_cat;
            $product->pg_meta_keyword = $request->pg_meta_keyword;
            $productSlug = Str::slug($request->product_title);
            $product->product_url = $productSlug;
            $product->pg_status = "active";
            $product->pg_meta_desc = $request->pg_meta_desc;
            $product->pg_meta_title = $request->pg_meta_title;
            $product->sort_description = $request->sort_description;
            $product->description = $request->description;
            $product->image = $image;
            $product->image_one = $image_one;


            $product->save();
    
           return redirect()->route('AdminInsta.manage-product')->with('success', 'Product updated successfully.');
            } catch (\Exception $e) {
            
                return back()->with('error', 'An error occurred: ' . $e->getMessage());
            }
         }

        public function  ProductEdit($id)
    {
        $product = product::findOrFail($id);
        return view('AdminInsta.product-edit', compact('product'));
    }

    public function Productupdate(Request $request, $product_id)
{
    try {
      
        $validatedData = $request->validate([
           
        ]);

        $product = product::findOrFail($product_id);
        $product->product_title = $request->input('product_title');
        $product->product_cat = $request->input('product_cat');
        $productSlug = Str::slug($request->input('product_title'));
        $product->product_url = $productSlug; 
        $product->sort_description = $request->input('sort_description');
        $product->description = $request->input('description');
        $product->pg_meta_title = $request->input('pg_meta_title');
        $product->pg_meta_keyword = $request->input('pg_meta_keyword');
        $product->pg_meta_desc = $request->input('pg_meta_desc');
        $product->pg_status = "active";
   
        if ($request->hasFile('image')) {
            $product_image = rand() . "." . $request->file("image")->getClientOriginalExtension();
            $request->file("image")->move(public_path() . "/images", $product_image);
            $product->image = $product_image;
        }


         if ($request->hasFile('image_one')) {
            $product_image_one = rand() . "." . $request->file("image_one")->getClientOriginalExtension();
            $request->file("image_one")->move(public_path() . "/images", $product_image_one);
            $product->image_one = $product_image_one;
        }

       
        $product->save();

       return redirect()->route('AdminInsta.manage-product')->with('success', 'Product updated successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'An error occurred while updating the product: ' . $e->getMessage());
    }
}

public function Productdestroy(product $product)
   {
    $product->delete();

    return redirect()->back()->with('success', 'Page deleted successfully.');
  }

  public function ProductupdateStatus(Request $request)
{
    $product = product::findOrFail($request->product_id);
    $product->pg_status = $request->pg_status;
    $product->save();

    return response()->json(['message' => 'User status updated successfully.']);
}
}
