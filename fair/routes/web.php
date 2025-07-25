<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Provider\AppServiceProvider;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\SubdomainController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\DataViewController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogController;
use Spatie\Honeypot\ProtectAgainstSpam;
use App\Http\Controllers\SitemapXmlController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::middleware('auth')->group(function () {
Route::get('AdminInsta/dashboard', [AdminController::class, 'dashboard'])->name('AdminInsta.dashboard');
Route::get('/AdminInsta/dashboard', [AdminController::class, 'count'])->name('AdminInsta.dashboard');
// <!-------------------banner-------------section--------------->
Route::get('/AdminInsta/banner', [BannerController::class, 'BannerShow'])->name('AdminInsta.banner');
Route::post('/AdminInsta/banner', [BannerController::class, 'BannerForm'])->name('AdminInsta.banners.store');
Route::get('AdminInsta/manage-banners',[BannerController::class, 'ManageBanner'])->name('AdminInsta.manage-banners');
Route::get('/AdminInsta/banners-edit/{banner_id}', [BannerController::class,'BannerEdit'])->name('AdminInsta.banners-edit');
Route::delete('/AdminInsta/manage_banners/{banner}', [BannerController::class, 'Bannerdestroy'])->name('AdminInsta.manage-banners.destroy');
Route::put('/AdminInsta/banner/{id}', [BannerController::class, 'BannerUpdate'])->name('AdminInsta.banner.update');
Route::post('AdminInsta/status/{banner_id}/updateStatus', [BannerController::class, 'BannerStatus'])->name('AdminInsta.status.update');

//-----------------------pages section-------------------------------->
Route::get('/AdminInsta/pages', [PagesController::class, 'PageShow'])->name('AdminInsta.pages');
Route::post('/AdminInsta/pages', [PagesController::class, 'PageForm'])->name('AdminInsta.page.store');
Route::get('AdminInsta/manage-pages',[PagesController::class, 'ManagePages'])->name('AdminInsta.manage-pages');
Route::get('/AdminInsta/pages-edit/{pg_id}', [PagesController::class,'PageEdit'])->name('AdminInsta.pages-edit');
Route::post('AdminInsta/pages-edit/{pg_id}', [PagesController::class, 'PageUpdate'])->name('AdminInsta.pages.update');
Route::get('AdminInsta/file-upload', [PagesController::class, 'createfile']);
Route::post('AdminInsta/store', [PagesController::class, 'store'])->name('AdminInsta.store');
Route::delete('/AdminInsta/manage-pages/{page}', [PagesController::class, 'Pagedestroy'])->name('AdminInsta.manage-pages.destroy');
Route::post('AdminInsta/pg-status/{pg_id}/updateStatus', [PagesController::class, 'PageStatus'])->name('AdminInsta.pg-status.update');

//----------------------------------------------Subdomain-------------------------------------------------------->
Route::get('/AdminInsta/subdomain', [SubdomainController::class, 'SubdomainShow'])->name('AdminInsta.subdomain');
Route::get('AdminInsta/manage-subdomain',[SubdomainController::class, 'SubdomainManage'])->name('AdminInsta.manage-subdomain');
Route::post('/AdminInsta/subdomain', [SubdomainController::class, 'SubdomainForm'])->name('AdminInsta.subdomain.store');
Route::get('/AdminInsta/subdomain-edit/{subdomain_id}', [SubdomainController::class,'SubdomainEdit'])->name('AdminInsta.subdomain-edit');
Route::delete('/AdminInsta/manage-subdomain/{subdomain}', [SubdomainController::class, 'SubdomainDestroy'])->name('AdminInsta.manage-subdomain.destroy');
Route::post('AdminInsta/subd-status/{subdomain_id}/updateStatus', [SubdomainController::class, 'SubdomainUpdateStatus'])->name('AdminInsta.subd-status.update');
Route::post('/AdminInsta/subdomain-update/{subdomain_id}', [SubdomainController::class, 'SubdomainUpdate'])->name('AdminInsta.subdomain.update');

//------------------------------------Product------------------------------------------->
Route::get('/AdminInsta/product', [ProductController::class, 'ProductShow'])->name('AdminInsta.product');
Route::get('AdminInsta/manage-product',[ProductController::class, 'ProductManage'])->name('AdminInsta.manage-product');
Route::get('/AdminInsta/product-edit/{product_id}', [ProductController::class,'ProductEdit'])->name('AdminInsta.products-edit');
Route::delete('/AdminInsta/manage_product/{product}', [ProductController::class, 'Productdestroy'])->name('AdminInsta.manage-product.destroy');
Route::post('/AdminInsta/product-store', [ProductController::class, 'ProductForm'])->name('AdminInsta.product.store'); 
Route::post('/AdminInsta/product-update/{product_id}', [ProductController::class, 'Productupdate'])->name('AdminInsta.product.update');
Route::post('AdminInsta/prdct-status/{product_id}/updateStatus', [ProductController::class, 'ProductupdateStatus'])->name('AdminInsta.prdct-status.update');

//---------------------------------category----------------------------->
Route::get('/AdminInsta/category', [CategoryController::class, 'CategoryShow'])->name('AdminInsta.category');
Route::get('AdminInsta/manage-category',[CategoryController::class, 'CategoryManage'])->name('AdminInsta.manage-category');
Route::post('/AdminInsta/category-store', [CategoryController::class, 'CategoryFrom'])->name('AdminInsta.category.store');
Route::get('/AdminInsta/category-edit/{product_cat_id}', [CategoryController::class,'Categoryedit'])->name('AdminInsta.category-edit');
Route::delete('/AdminInsta/manage-category/{category}', [CategoryController::class, 'destroy'])->name('AdminInsta.manage-category.destroy');
Route::post('/AdminInsta/category/{product_cat_id}', [CategoryController::class, 'CategoryUpdate'])->name('AdminInsta.category.update');
Route::get('/AdminInsta/manage-category/{id}', [CategoryController::class,'index'])->name('admAdminInstain.manage-category');
Route::post('AdminInsta/cat-status/{product_cat_id}/updateStatus', [CategoryController::class, 'updateStatus'])->name('AdminInsta.cat-status.update');

//-----------------------------------Location----------------------------------------------------------------->
Route::get('/AdminInsta/location', [LocationController::class, 'LocationShow'])->name('AdminInsta.location');
Route::post('/AdminInsta/location', [LocationController::class, 'LocationForm'])->name('AdminInsta.location.store');
Route::get('AdminInsta/manage-location',[LocationController::class, 'LocationManage'])->name('AdminInsta.manage-location');
Route::get('/AdminInsta/location-edit/{loaction_id}', [LocationController::class,'Locationedit'])->name('AdminInsta.location-edit');
Route::delete('/AdminInsta/manage-location/{location}', [LocationController::class, 'Locationdestroy'])->name('AdminInsta.manage-location.destroy');
Route::post('/AdminInsta/location-update/{loaction_id}', [LocationController::class, 'LocationUpdate'])->name('AdminInsta.location.update');
Route::post('AdminInsta/locat-status/{loaction_id}/updateStatus', [LocationController::class, 'LocationupdateStatus'])->name('AdminInsta.locat-status.update');

//----------------------------------------------Testimonials------------------------------------------------------->
Route::get('AdminInsta/manage-testimonial',[TestimonialController::class, 'TestimonialManage'])->name('AdminInsta.manage-testimonial');
Route::get('/AdminInsta/testimonial-edit/{testimonial_id}', [TestimonialController::class,'TestimonialEdit'])->name('AdminInsta.testimonial-edit');
Route::delete('/AdminInsta/manage-testimonial/{testimonial}', [TestimonialController::class, 'TestimonialDestroy'])->name('AdminInsta.manage-testimonial.destroy');
Route::get('/AdminInsta/testimonial', [TestimonialController::class, 'TestimonialShow'])->name('AdminInsta.testimonial');
Route::post('/AdminInsta/testimonial-store', [TestimonialController::class, 'TestimonialForm'])->name('AdminInsta.testimonial.store');
Route::post('AdminInsta/testi-status/{testimonial_id}/updateStatus', [TestimonialController::class, 'TestiupdateStatus'])->name('AdminInsta.testi-status.update');
Route::post('/AdminInsta/testimonial-update/{testimonial_id}', [TestimonialController::class, 'TestimonialUpdate'])->name('AdminInsta.testimonial.update');

//------------------------------------------WEBSITE MANAGE---------------------------------------------------------------->
Route::get('AdminInsta/website/{website_id}', [WebsiteController::class, 'edit'])->name('AdminInsta.website-edit');
Route::get('AdminInsta/manage-website',[WebsiteController::class, 'index'])->name('AdminInsta.manage-website');
Route::post('/AdminInsta/website-edit/{website_id}', [WebsiteController::class, 'update'])->name('AdminInsta.website.update');
Route::post('AdminInsta/wbsite-status/{website_id}/updateStatus', [WebsiteController::class, 'updateStatus'])->name('AdminInsta.wbsite-status.update');

//-------------------------------------------GALLERY---------------------------------------->
Route::get('/AdminInsta/gallery', [GalleryController::class, 'gallery'])->name('AdminInsta.gallery');
Route::get('AdminInsta/manage-gallery',[GalleryController::class, 'index'])->name('AdminInsta.manage-gallery');
Route::delete('/AdminInsta/manage-gallery/{gallery}', [GalleryController::class, 'destroy'])->name('AdminInsta.manage-gallery.destroy');
Route::post('/AdminInsta/gallery', [GalleryController::class, 'PageForm'])->name('AdminInsta.gallery.store');
Route::get('/AdminInsta/gallery-edit/{gallery_id}', [GalleryController::class,'edit'])->name('AdminInsta.gallery-edit');
Route::put('/AdminInsta/gallery/{gallery_id}', [GalleryController::class, 'update'])->name('AdminInsta.gallery.update');
Route::post('AdminInsta/gal-status/{gallery_id}/updateStatus', [GalleryController::class, 'updateStatus'])->name('AdminInsta.gal-status.update');

Route::get('AdminInsta/contact',[ContactController::class, 'index'])->name('AdminInsta.contact');
Route::get('/AdminInsta/lead-view/{inquiry_id}', [ContactController::class,'edit'])->name('AdminInsta.lead-view');

//-------------------------------------------BLOG--------------------------------------------------------->
Route::get('/AdminInsta/blog', [BlogController::class, 'blog'])->name('AdminInsta.blog');
Route::post('/AdminInsta/blog', [BlogController::class, 'BlogForm'])->name('AdminInsta.tbl_blog.store');
Route::get('AdminInsta/manage-blog',[BlogController::class, 'index'])->name('AdminInsta.manage_blog');
Route::delete('/AdminInsta/manage_blog/{blog}', [BlogController::class, 'destroy'])->name('AdminInsta.manage_blog.destroy');
Route::get('/AdminInsta/blog-edit/{blog_id}', [BlogController::class,'edit'])->name('AdminInsta.tbl_blog_edit.edit');
Route::post('AdminInsta/blog-status/{blog_id}/updateStatus', [BlogController::class, 'updateStatus'])->name('AdminInsta.blog-status.update');
Route::put('/AdminInsta/blog/{blog_id}', [BlogController::class, 'update'])->name('AdminInsta.tbl_blog.update');

});


Route::get('/AdminInsta', [CustomAuthController::class, 'index'])->name('login');
Route::post('/AdminInsta/custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('/AdminInsta/change-password', [CustomAuthController::class, 'showChangePasswordForm'])->name('AdminInsta.show.change.password.form');
Route::post('/AdminInsta/update-password', [CustomAuthController::class, 'updatePassword'])->name('AdminInsta.update.password');
Route::get('AdminInsta/signout', [CustomAuthController::class, 'signOut'])->name('AdminInsta.signout');
//-------------------------------------front-------------------------------------------//
Route::match(['get', 'head'], '/', [DataViewController::class, 'showdata'])->name('start');

Route::get('market-place', [DataViewController::class, 'marketplace'])->name('marketplace');
Route::get('company-profile', [DataViewController::class, 'companyprofile'])->name('companyprofile');
Route::get('sitemap', [DataViewController::class, 'sitemapdata'])->name('sitemap');
Route::get('our-products', [DataViewController::class, 'ourproductdata'])->name('our-products');
Route::get('contact-us', [DataViewController::class, 'contactdata'])->name('contact');
Route::get('blogs', [DataViewController::class, 'BlogsPage'])->name('blogs');
Route::get('blog/{blog_slug}', [DataViewController::class, 'BlogDetail'])->name('blogdata');
Route::get('partner-with-us', [DataViewController::class, 'PartnerWithUs'])->name('partner-with-us');
Route::get('gallery', [DataViewController::class, 'GalleryPage'])->name('gallery');
Route::get('social-responsibilty', [DataViewController::class, 'SocialResponsibilty'])->name('social-responsibilty');
Route::post('contact', [EnquiryController::class, 'ContactForm'])
    ->middleware(ProtectAgainstSpam::class)
    ->name('contact-us');
Route::get('privacy-policy', [DataViewController::class, 'privacydata'])->name('privacy-policy');
Route::get('/search', [SearchController::class, 'search'])->name('search');

$locat_urls = DB::table('tbl_loaction')->get('pg_url');      
if (!empty($locat_urls)) {
    foreach ($locat_urls as $loc_url) {
        Route::get('/'.$loc_url->pg_url, [DataViewController::class, 'IndialocationDetail']);
    }
}


$product_urls = DB::table('tbl_product')->get('product_url');
if (!empty($product_urls)) {
    foreach ($product_urls as $product_url) {
        Route::get('/'.$product_url->product_url, [DataViewController::class, 'product_detail'])->name($product_url->product_url);
    }
}

$state_urls = DB::table('pan_locations')->get();
if (!empty($state_urls)) {
    foreach ($state_urls as $state_url) {
        Route::get('/'.$state_url->state_slug, [DataViewController::class, 'StatelocationDetail']);
        $citySlugs = json_decode($state_url->city_slug);
        foreach ($citySlugs as $slug) {
             Route::get('/'.$slug, [DataViewController::class, 'locationdata']);
            foreach ($product_urls as $product_url) {
                Route::get('/'.$slug.'/'.$product_url->product_url, [DataViewController::class, 'LocationProduct']);
            }
        }
    }
}



$product_url = DB::table('tbl_product')->get('product_url');   
if (!empty($locat_urls) AND !empty($product_url)) {
    foreach ($locat_urls as $pg_url) {
        foreach ($product_url as $product_urls) {
            Route::get('/'.$loc_url->pg_url.'/'.$product_urls->product_url, [DataViewController::class, 'IndiaLocationProduct']);
        }
    }
}

$product_url = DB::table('tbl_product')->get('product_url');   
if (!empty($pg_urls) AND !empty($product_url)) {
    foreach ($pg_urls as $pg_url) {
        foreach ($product_url as $product_urls) {
            Route::get('/'.$pg_url->city_slug.'/'.$product_urls->product_url, [DataViewController::class, 'LocationProduct']);
        }
    }
}

$product_url = DB::table('tbl_product')->get('product_url'); 
if (!empty($state_urls) AND !empty($product_url)) {
    foreach ($state_urls as $state_url) {
        foreach ($product_url as $product_urls) {
            Route::get('/'.$state_url->state_slug.'/'.$product_urls->product_url, [DataViewController::class, 'StateLocationProduct']);
        }
    }
}

$subdomain_slug = DB::table('tbl_subdomain')->get('subdomain_slug');
if (!empty($subdomain_slug)) {
    foreach ($subdomain_slug as $subdomain_url) {
        Route::get('/'.$subdomain_url->subdomain_slug, [DataViewController::class, 'subdomainDetail'])->name($subdomain_url->subdomain_slug);
    }
}


$product_link = DB::table('tbl_product')->get('product_url');  
if (!empty($subdomain_slug) AND !empty($product_link)) {
    foreach ($subdomain_slug as $subdomain_slugs) {
        foreach ($product_link as $product_links) {
            Route::get('/'.$subdomain_slugs->subdomain_slug.'/'.$product_links->product_url, [DataViewController::class, 'marketplaceProductdata']);
        }
    }
}


$category_urls = DB::table('tbl_category')->get('pg_url');
if (!empty($category_urls)) {
    foreach ($category_urls as $pg_url) {
        Route::get('/'.$pg_url->pg_url, [DataViewController::class, 'Categorydata'])->name($pg_url->pg_url);
    }
}

Route::get('/sitemap-index.xml', [SitemapXmlController::class, 'sitemapIndex']);
Route::get('/sitemap-index-{page}.xml', [SitemapXmlController::class, 'index']);
Route::get('google35da33f130a69c13.html',function(){
return "google35da33f130a69c13";
});

