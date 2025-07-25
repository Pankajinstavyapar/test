<!DOCTYPE html>
<html lang="en">

<head>
     @foreach($website as $web)
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blogData->pg_meta_title }}</title>
    <meta name="description" content="{{ $blogData->pg_meta_desc }}">
    <meta name="keywords" content="{{ $blogData->pg_meta_keyword }}">
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
                    <h1>{{ $blogData->blog_title }}</h1>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                        <li class="breadcrumb-item active">{{ $blogData->blog_title }}</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- Breadcrumb End -->
        
        <!-- Blogs Details Start -->
        <section class="py-5 gallery-sect">
            <div class="container">
                <div class="blogs-box">
                    <img class="w-100" src="{{ url('images/' . $blogData['image']) }}" alt="{{ $blogData->blog_title }}" title="{{ $blogData->blog_title }}">
                    
                    <div class="mt-3">
                        @php
                            $formattedDate = $blogData->date_time ? \Carbon\Carbon::parse($blogData->date_time)->format('j M Y') : 'N/A';
                        @endphp
        
                        <div class="d-flex align-items-center gap-4">
                            <p class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-user"></i> <span>By - Admin</span>
                            </p>
                            <p class="d-flex align-items-center gap-2">
                                <i class="fa-solid fa-calendar-days"></i> <span>{{ $formattedDate }}</span>
                            </p>
                        </div>
        
                        <p class="h5">{{ $blogData->short_description }}</p>
                        <div class="h6 mt-2">
                            <p>{!! htmlspecialchars_decode($blogData->description) !!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blogs Details End -->
    
    @include('contact-home')

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>