<!DOCTYPE html>
<html lang="en">

<head>
     @foreach($website as $web)
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $productData->pg_meta_title }}</title>
    <meta name="keywords" content="{{ $productData->pg_meta_keyword }}">
    <meta name="description" content="{{ $productData->pg_meta_desc }}">
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
                <h1>{{$productData->product_title}}</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{$productData->product_title}}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- Breadcrumb End -->

    <!-- About Section Statrt -->
    <section class="py-5 ">
        <div class="container clearfix">
            <div class="floated-abt">
                <img src="{{ url('images/' . $productData['image']) }}" alt="{{$productData->product_title}}" title="{{$productData->product_title}}">
                <!-- Share btn start -->
                <div class="share-btn-box ">
                    <span class="share-btn">
                        <i class="fa fa-share" aria-hidden="true"></i> Share On
                    </span>
                    <div class="social-share">
                        <ul>
                            <li><button type="button" class="facebook" data-sharer="facebook" data-url="{{ url()->current() }}"><i
                                        class="fab fa-facebook"></i> </button></li>
                            <li><button type="button" class="twitter" data-sharer="twitter" data-url="{{ url()->current() }}"><i
                                        class="fab fa-twitter"></i>
                                </button></li>
                            <li> <button type="button" class="whatsapp" data-sharer="whatsapp"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="fab fa-whatsapp"></i> </button></li>
                            <li> <button type="button" class="linkedin" data-sharer="linkedin" data-url="{{ url()->current() }}"><i
                                        class="fab fa-linkedin"></i>
                                </button></li>
                            <li> <button type="button" class="telegram" data-sharer="telegram"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="fab fa-telegram"></i>
                                </button></li>
                            <li> <button type="button" class="email" data-sharer="email"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="far fa-envelope"aria-hidden="true"></i>
                                </button></li>
                        </ul>
                    </div>
                </div>
                <!-- Share btn end -->
            </div>
            <div class="section-title ">
                <p class="sm-title">Product Details</p>
                <h2 class="title">{{ $productData->sort_description }}</h2>
            </div>
            <p>{!! htmlspecialchars_decode($productData->description) !!}</p>
         
        </div>
    </section>
    <!-- About Section End -->
    
    <!-- Product section start -->
    <section class="py-5 product-section">
        <div class="container">
            <div class="row align-items-center mb-4">
                <div class="col-lg-8">
                    <div class="section-title ">
                        <p class="sm-title">Our Products</p>
                        <p class="title">Explore Our Product Range What We Offer</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-lg-end">
                        <a class="thm-btn" href="{{ url('contact-us') }}">Get Quotation Now</a>
                    </div>
                </div>
            </div>

            <div class="swiper product_slider">
                <div class="swiper-wrapper">
                   @foreach($products as $data)
                    <div class=" swiper-slide mb-4">
                        <div class="product-box">
                            <img src="{{ url('images/' . $data['image']) }}" alt="{{ $data->product_title }}" title="{{ $data->product_title }}">
                            <div class="product-content">
                                <p class="pd-name mb-2"><a href="{{ url('/', ['product_url' => $data->product_url]) }}">{{ $data->product_title }}</a></p>
                                <p class="text-clamp1">{{ $data->sort_description }}</p>
                                <a href="{{ url('/', ['product_url' => $data->product_url]) }}" class="thm-btn  py-1">View Details</a>
                            </div>
                        </div>
                    </div>
                   @endforeach
                  
                </div>
            </div>

        </div>
    </section>
    <!-- Product section end -->
     
    @include('contact-home')

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>