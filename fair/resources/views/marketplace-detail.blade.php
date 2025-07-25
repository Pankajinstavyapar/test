<!DOCTYPE html>
<?php
$currentUrl = url()->current();
$parts = explode('/', $currentUrl);
$lastPart = end($parts);

$modifiedLastPart = ucwords(str_replace('-', ' ', $lastPart));

$modifiedLastPart;
?>
<html lang="en">

<head>
     @foreach($website as $web)
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $modifiedLastPart }}</title>
    <meta name="description" content="{{ $modifiedLastPart }}">
    <meta name="keywords" content="{{ $modifiedLastPart }}">
    <meta name="author" content="{{ $web->website_tagline }}">
    <meta name="distribution" content="global" />
    <meta name="language" content="English" />
    <meta name="rating" content="general" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="revisit-after" content="Daily" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="Safe for Kids" />
    <meta name="Expires" content="never" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="YahooSeeker" content="Index,Follow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-css/style.css') }}">
    <link href="{{ url('images/' . $web['website_icon']) }}" rel="icon">
    <link rel="canonical" href="{{ url()->current() }}" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-19FLQFJZQR"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-19FLQFJZQR'); </script>
    @endforeach
</head>

<body>

    @include('include.header-inner')

     <!-- Breadcrumb Start -->
     <section class="pt-5">
        <div class="breadcrumb-area">
            <div class="container">
                <h1>{{ $modifiedLastPart }}</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $modifiedLastPart }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

      <!-- Market Place Start -->
      <section class="py-5">
        <div class="container">
            <div class="row">
                @foreach ($products as $data)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <a href="{{ url('/', ['subdomain_slug' => $subdomainData->subdomain_slug, 'product_link' => $data->product_url]) }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>{{ $data->product_title }}</span>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
     </section>
    <!-- Market Place End -->
    @include('contact-home')

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>