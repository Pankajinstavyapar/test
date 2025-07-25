<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use App\Models\product;
use App\Models\location;
use App\Models\pan_location; 
use App\Models\blogs;
use App\Models\pages;
use App\Models\subdomain;
use Carbon\Carbon;

class SitemapXmlController extends Controller
{
    public function sitemapIndex(): Response
    {
        $perPage = 1000;
        $nowW3C  = Carbon::now()->toW3cString();

        $totalProducts    = product::count();
        $totalLocations   = location::where('pg_status', 'active')->count();
        $totalSubdomains  = subdomain::where('status', 'active')
                                ->whereNotIn('subdomain_slug', ['our-presence'])
                                ->count();
        $totalPagesStatic = pages::whereIn('pg_url', [
                                'home', 'contact', 'market-place', 'company-profile', 'sitemap',
                            ])->where('pg_status', 'active')->count();
        $totalStates      = pan_location::count();
        $totalBlogs       = blogs::where('pg_status', 'active')->count();

        $stateLocations = pan_location::where('is_active', 1)->get(['city_slug']);
        $totalCitySlugs = $stateLocations->sum(function ($state) {
            $cities = json_decode($state->city_slug) ?: [];
            return is_array($cities) ? count($cities) : 0;
        });

        $totalSubdomainPages = $totalProducts * $totalSubdomains;
        $totalStateProdPages = $totalProducts * $totalStates;
        $totalLocationPages  = $totalProducts * $totalLocations;
        $totalCityProdPages  = $totalProducts * $totalCitySlugs;

        $grandTotal = $totalProducts
                    + $totalSubdomains
                    + $totalLocations
                    + $totalPagesStatic
                    + $totalStates
                    + $totalBlogs
                    + $totalSubdomainPages
                    + $totalStateProdPages
                    + $totalLocationPages
                    + $totalCityProdPages;

        $sitemapCount = (int) ceil($grandTotal / $perPage);

        $xml  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
        $xml .= "<sitemapindex xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";

        for ($i = 1; $i <= $sitemapCount; $i++) {
            $xml .= "    <sitemap>\n";
            $xml .= "        <loc>" . url("/") . "/sitemap-index-{$i}.xml</loc>\n";
            $xml .= "        <lastmod>{$nowW3C}</lastmod>\n";
            $xml .= "    </sitemap>\n";
        }

        $xml .= "</sitemapindex>";

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    public function index(int $pageIndex = 1): Response
    {
        $products   = product::pluck('product_url');
        $locations  = location::where('pg_status', 'active')->get(['pg_url']);
        $states     = pan_location::where('is_active', 1)->get();
        $pages      = pages::whereIn('pg_url', [
                            'home', 'contact-us', 'market-place', 'company-profile', 'sitemap',
                      ])->where('pg_status', 'active')->get(['pg_url']);
        $subdomains = subdomain::where('status', 'active')
                     ->whereNotIn('subdomain_slug', ['our-presence'])
                     ->get(['subdomain_slug']);
        $blogs      = blogs::where('pg_status', 'active')->get(['blog_slug']);

        $urls = [];

        foreach ($pages as $page) {
            $urls[] = $page->pg_url === 'home' ? url('/') : url('/' . $page->pg_url);
        }

        foreach ($products as $productUrl) {
            $urls[] = url("/{$productUrl}");
        }

        foreach ($subdomains as $sub) {
            $urls[] = url("/{$sub->subdomain_slug}");
            foreach ($products as $productUrl) {
                $urls[] = url("/{$sub->subdomain_slug}/{$productUrl}");
            }
        }

        foreach ($states as $state) {
            $urls[] = url("/{$state->state_slug}");
            foreach ($products as $productUrl) {
                $urls[] = url("/{$state->state_slug}/{$productUrl}");
            }

            $citySlugs = json_decode($state->city_slug) ?: [];
            foreach ($citySlugs as $citySlug) {
                $urls[] = url("/{$citySlug}");
                foreach ($products as $productUrl) {
                    $urls[] = url("/{$citySlug}/{$productUrl}");
                }
            }
        }

        foreach ($blogs as $blog) {
            $urls[] = url('/blog/' . $blog->blog_slug);
        }

        $chunks = array_chunk($urls, 1000);

        if ($pageIndex < 1 || $pageIndex > count($chunks)) {
            return response()->view('404', [], 404);
        }

        $content = View::make('index', ['urls' => $chunks[$pageIndex - 1]])->render();

        return response($content, 200)->header('Content-Type', 'text/xml');
    }
}
