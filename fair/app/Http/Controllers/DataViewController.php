<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Models\pages;
use App\Models\banner;
use App\Models\blogs;
use App\Models\category;
use App\Models\contact;
use App\Models\gallery;
use App\Models\location;
use App\Models\product;
use App\Models\subdomain;
use App\Models\pan_location;
use App\Models\testimonials;
use App\Models\websiteMange;
use Illuminate\Support\Str;

class DataViewController extends Controller
{
    public function showdata(Request $request)
{   
    
    $currentUrl = $request->fullUrl();

    
    if (strpos($request->getRequestUri(), '/public') === 0) {
        $redirectUrl = str_replace('/public', '', $currentUrl);
        return redirect($redirectUrl, 301);
    }

    $homepages = pages::where('pg_status', 'active')->where('pg_url', 'home')->get();
    $testimonial_show = testimonials::where('pg_status', 'active')->get();
    $products = product::where('pg_status', 'active')->get();
    $website = websiteMange::where('status', 'active')->get();
    $blog = blogs::where('pg_status', 'active')->get();
    $gallery = gallery::where('pg_status', 'active')->get();
    $category = category::where('pg_status', 'active')->get();
    $homebanner = banner::where('pg_status', 'active')->get();
    
    $location_product = '';
    $locationState_product = '';
    $indiaState_product = '';

    return view('start', compact(
        'homepages',
        'testimonial_show',
        'products',
        'homebanner',
        'website',
        'blog',
        'gallery',
        'location_product',
        'category',
        'locationState_product',
        'indiaState_product'
    ));
}


    public function product_detail() {
        $product_u = __FUNCTION__ == "product_detail" ? true : false;
        $currentUrl = url()->current();
        $parts = explode('/', $currentUrl);
        $product_url = end($parts);
        try {
            $productData = product::where('product_url', $product_url)->where('pg_status', 'active')->first();
            
            if (!$productData) {
                
                abort(404);
            }
            $products = product::where('pg_status', 'active')->get();
            $website = websiteMange::where('status', 'active')->get();
            $homepages = pages::where('pg_status', 'active')->get();
            $category = category::where('pg_status', 'active')->get();
            $gallery = gallery::where('pg_status', 'active')->get();
            $location_product = '';
            $locationState_product = '';
            $indiaState_product = '';
            return view('details', compact(
                'productData',
                'products',
                'website',
                'homepages',
                'location_product', 
                'product_u',
                'category',
                'gallery',
                'locationState_product', 
                'indiaState_product'));
        } catch (\Exception $e) {
           
            
            return back()->with('error', 'An error occurred');
        }
    }

   public function contactdata(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'contact-us')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('contact', [
        'homepages' => $homepages,
        'products' => $products,
        'section' => 'our-products',
        'website' => $website, 
        'category' => $category,
        'gallery' => $gallery, 
        'indiaState_product' => $indiaState_product, 
        'locationState_product' => $locationState_product, 
        'location_product' => $location_product]);
    }

   public function privacydata(Request $request) {
    $homepages = pages::where('pg_status', 'active')->where('pg_url', 'privacy-policy')->get();
    $products = product::where('pg_status', 'active')->get();
    $website = websiteMange::where('status', 'active')->get();
    $gallery = gallery::where('pg_status', 'active')->get();
    $category = category::where('pg_status', 'active')->get();
    $locationState_product = '';
    $location_product = '';
    $indiaState_product = '';
    return view('privacy-policy', ['homepages' => $homepages,
    'products' => $products,
    'section' => 'our-products',
    'website' => $website, 
    'gallery' => $gallery, 
    'category' => $category,
    'indiaState_product' => $indiaState_product, 
    'locationState_product' => $locationState_product, 
    'location_product' => $location_product
    ]);
     }

    public function marketplace(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'market-place')->get();
        $subdomains = subdomain::where('status', 'active')->where('subdomain_name', '!=', 'Our Presence')->get();
        $products = product::where('pg_status', 'active')->get();
        $location = location::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $pan_location = pan_location::where('is_active', '1')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('market-place', ['subdomains' => $subdomains,
        'products' => $products,
        'location' => $location, 
        'homepages' => $homepages, 
        'website' => $website,
        'category' => $category,
        'gallery' => $gallery, 
        'pan_location' => $pan_location,
        'indiaState_product' => $indiaState_product, 
        'locationState_product' => $locationState_product, 
        'location_product' => $location_product]);
    }

    public function companyprofile(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'company-profile')->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('company-profile', [
        'subdomain' => $subdomain, 
        'products' => $products,
        'homepages' => $homepages,
        'website' => $website, 
        'category' => $category,
        'gallery' => $gallery, 
        'indiaState_product' => $indiaState_product, 
        'locationState_product' => $locationState_product, 
        'location_product' => $location_product]);
    }

    public function sitemapdata(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'sitemap')->get();
        $homedata = pages::where('pg_status', 'active')
        ->whereIn('pg_name', ['Home', 'Contact Us', 'Company Profile'])
        ->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $category = category::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('sitemap', [
            'subdomain' => $subdomain,
            'products' => $products,
            'homepages' => $homepages, 
            'website' => $website, 
            'category' => $category,
            'homedata' => $homedata, 
            'gallery' => $gallery,
            'indiaState_product' => $indiaState_product, 
            'locationState_product' => $locationState_product, 
            'location_product' => $location_product]);
    }
    public function ourproductdata(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'our-products')->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $category = category::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('our-products', [
            'subdomain' => $subdomain,
            'products' => $products, 
            'category' => $category,
            'homepages' => $homepages, 
            'website' => $website,
            'gallery' => $gallery,
            'indiaState_product' => $indiaState_product, 
            'locationState_product' => $locationState_product, 
            'location_product' => $location_product]);
    }

    public function GalleryPage(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'gallery')->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $category = category::where('pg_status', 'active')->get();
        $products =  product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('gallery', ['subdomain' => $subdomain,
        'products' => $products,
        'homepages' => $homepages, 
        'category' => $category,
        'website' => $website,
        'indiaState_product' => $indiaState_product, 
        'locationState_product' => $locationState_product, 
        'location_product' => $location_product
        
        ]);
    }

    public function BlogsPage(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'blogs')->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $category = category::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('blogs', [
            'subdomain' => $subdomain,
            'products' => $products, 
            'category' => $category,
            'homepages' => $homepages, 
            'website' => $website,
            'gallery' => $gallery,
            'indiaState_product' => $indiaState_product, 
            'locationState_product' => $locationState_product, 
            'location_product' => $location_product]);
    }

    public function PartnerWithUs(Request $request) {
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'partner-with-us')->get();
        $subdomain = subdomain::where('status', 'active')->where('subdomain_slug', '')->get();
        $category = category::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $locationState_product = '';
        $location_product = '';
        $indiaState_product = '';
        return view('partner-with-us', ['subdomain' => $subdomain,
        'products' => $products,
        'homepages' => $homepages, 
        'category' => $category,
        'website' => $website,
        'indiaState_product' => $indiaState_product, 
        'locationState_product' => $locationState_product, 
        'location_product' => $location_product
        ]);
    }

   

        public function locationdata() {
    $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $pg_url = end($parts);
    
    if($parts[3] == "public") {
        $currentUrl = str_replace('/public', '', $currentUrl);
        return redirect($currentUrl);
    }
    try {
        
        $loaction_name = ucwords(str_replace('-', ' ', $pg_url));
        $locationdata = (object)(array("pg_url" => $pg_url, "loaction_name" => $loaction_name));
        
        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'our-presence')->get();
        $subdomains = subdomain::where('status', 'active')->get();
        $location = location::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $locationState_product = 'lo';
        $location_product = 'loc';
       
        return view('location-detail', [
            'locationdata' => $locationdata,
            'location' => $location,
            'subdomains' => $subdomains,
            'website' => $website,
            'products' => $products,
            'homepages' => $homepages,
            'gallery' => $gallery,
            'location_product' => $location_product,
            'locationState_product' => $locationState_product,
            
        ]);
    } catch (\Exception $e) {
        
        return back()->with('error', 'An error occurred');
    }
}

    public function LocationProduct()
     {
     $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $pg_url = $parts[3];
    $product_url = $parts[4];
    $product_url = explode('.', $product_url)[0];
    try {
        
          
        $loaction_name = ucwords(str_replace('-', ' ', $pg_url));
        $locationdata = (object)(array("pg_url" => $pg_url, "loaction_name" => $loaction_name));
        
        $subdomainData = subdomain::where('subdomain_slug', 'our-presence')->where('status', 'active')->firstOrFail();
        $productData = product::where('product_url', $product_url)->where('pg_status', 'active')->firstOrFail();
      
        $homepages = pages::where('pg_status', 'active')->get();
        $subdomains = subdomain::where('status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $location = location::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $pg_url = $subdomainData->first()->subdomain_slug; 
        $location_product = __FUNCTION__ == "LocationProduct" ? true : false;
      
        return view('location-products', [
            'subdomainData' => $subdomainData,
            'subdomains' => $subdomains,
            'products' => $products,
            'locationdata' => $locationdata,
            'location' => $location,
            'website' => $website,
            'productData' => $productData,
            'homepages' => $homepages,
            'gallery' => $gallery,
            'location_product' => $location_product,
            
        ]);
    } catch (\Exception $e) {
        
      
        return back()->with('error', 'An error occurred');
    }
}


public function StateLocationProduct()
     {
     $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $pg_url = $parts[3];
    $product_url = $parts[4];
    $product_url = explode('.', $product_url)[0];
    try {
        $subdomainData = subdomain::where('subdomain_slug', 'our-presence')->where('status', 'active')->firstOrFail();
        $productData = product::where('product_url', $product_url)->where('pg_status', 'active')->firstOrFail();
        $parent_locationData = pan_location::where('state_slug', $pg_url)->where('is_active', '1')->firstOrFail();

        $homepages = pages::where('pg_status', 'active')->get();
        $subdomains = subdomain::where('status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $location = location::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $pg_url = $subdomainData->first()->subdomain_slug; 
        $locationState_product = __FUNCTION__ == "StateLocationProduct" ? true : false;
        $location_product = '';
        $indiaState_product ='';
        return view('state-location-prodcuts', [
            'subdomainData' => $subdomainData,
            'subdomains' => $subdomains,
            'products' => $products,
            'parent_locationData' => $parent_locationData,
            'location' => $location,
            'website' => $website,
            'productData' => $productData,
            'homepages' => $homepages,
            'gallery' => $gallery,
            'indiaState_product' => $indiaState_product,
            'location_product' => $location_product,
            'locationState_product' => $locationState_product,

        ]);
    } catch (\Exception $e) {

        return back()->with('error', 'An error occurred');
    }
}

public function StatelocationDetail() {
    
    $satelocation_u = __FUNCTION__ == "StatelocationDetail" ? true : false;
    $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $state_url = end($parts);
    
    if($parts[3] == "public") {
        $currentUrl = str_replace('/public', '', $currentUrl);
        return redirect($currentUrl);
    }
    
    try {
        $parent_locationData = pan_location::where('state_slug', $state_url)->where('is_active', '1')->first();
        
        if (!$parent_locationData) {
           
            abort(404);
        }

        $homepages = pages::where('pg_status', 'active')->where('pg_url', 'our-presence')->get();
        $subdomains = subdomain::where('status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $location_product = '';
        $indiaState_product ='';
        $locationState_product = 'lo';
        return view('statelocation', [
            'parent_locationData' => $parent_locationData,
            'subdomains' => $subdomains,
            'website' => $website,
            'products' => $products,
            'homepages' => $homepages,
            'gallery' => $gallery,
            'indiaState_product' => $indiaState_product,
            'location_product' => $location_product,
            'locationState_product' => $locationState_product
        ]);
    } catch (\Exception $e) {
        
        return back()->with('error', 'An error occurred');
    }
}


public function subdomainDetail() {
    
    $subdomain_u = __FUNCTION__ == "subdomainDetail" ? true : false;
    $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $subdomain_slug = end($parts);
    try {
        $subdomainData = Subdomain::where('subdomain_slug', $subdomain_slug)->where('status', 'active')->first();
        
        if (!$subdomainData) {
          
            abort(404);
        }

        $homepages = pages::where('pg_status', 'active')->where('pg_url', '')->get();
        $subdomains = Subdomain::where('status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $location_product = '';
        $locationState_product = '';
        $indiaState_product = '';
        $category_product =' ?? false OR';
        return view('marketplace-detail', [
            'subdomainData' => $subdomainData,
            'subdomains' => $subdomains,
            'website' => $website,
            'products' => $products,
            'homepages' => $homepages,
            'category' => $category,
            'gallery' => $gallery,
            'location_product' => $location_product,
            'indiaState_product' => $indiaState_product,
            'locationState_product' => $locationState_product,
            'category_product' => $category_product
        ]);
    } catch (\Exception $e) {
       
        return back()->with('error', 'An error occurred');
    }
}


public function marketplaceProductdata() {
    
    $currentUrl = url()->current();
    $parts = explode('/', $currentUrl);
    $subdomain_slug = $parts[3];
    $product_link = $parts[4];
   
    try {
        $subdomainData = subdomain::where('subdomain_slug', $subdomain_slug)->where('status', 'active')->first();
      
        if (!$subdomainData) {
           
            abort(404);
        }
        $homepages = pages::where('pg_status', 'active')->where('pg_url', '')->get();
        $subdomains = subdomain::where('status', 'active')->get();
        $productData = product::where('product_url', $product_link)->where('pg_status', 'active')->first();
        $website = websiteMange::where('status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $category_product = __FUNCTION__ == "marketplaceProductdata" ? true : false;
        $location_product = '';
        $locationState_product = '';
        return view('category-products', [
            'subdomainData' => $subdomainData, 
            'subdomains' => $subdomains, 
            'website' => $website, 
            'productData' => $productData, 
            'homepages' => $homepages, 
            'category' => $category,
            'products' => $products, 
            'gallery' => $gallery,
            'category_product' => $category_product, 
            'location_product' => $location_product,
            'locationState_product' => $locationState_product
            ]);

    } catch (\Exception $e) {
       
        return back()->with('error', 'An error occurred');
    }
}

public function BlogDetail($blog_slug) {
    
    try {
       
        $blogData = blogs::where('blog_slug', $blog_slug)->where('pg_status', 'active')->first();
       
        if (!$blogData) {
          
            abort(404);
        }
        $blog = blogs::where('pg_status', 'active')->get();
        $homepages = pages::where('pg_status', 'active')->get();
        $products = product::where('pg_status', 'active')->get();
        $website = websiteMange::where('status', 'active')->get();
        $gallery = gallery::where('pg_status', 'active')->get();
        $category = category::where('pg_status', 'active')->get();
        $location_product = '';
        $locationState_product = '';
        return view('blog', [
            'blogData' => $blogData,
            'blog' => $blog,
            'homepages' => $homepages,
            'products' => $products,
            'gallery' => $gallery, 
            'category' => $category,
            'website' => $website,
            'locationState_product' => $locationState_product,
            'location_product' => $location_product
        ]);
    } catch (\Exception $e) {
        
        
        return back()->with('error', 'An error occurred');
    }
}

}
