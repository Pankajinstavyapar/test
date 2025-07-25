<!DOCTYPE html>
<html lang="en">

@include('include.comman-head')

<body>

     @include('include.header-inner')

    <!-- slider-area-start -->
    <div class="hero-area position-relative">
        <div class="swiper home_banner">
            <div class="swiper-wrapper">
                @foreach($homebanner as $banner)
                <div class="swiper-slide">
                    <img class="w-100" src="{{ url('images/' . $banner['banner_image']) }}" alt="vrajhandicrafts" title="vrajhandicrafts">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- slider-area-end -->

    <!-- banner below start -->
    <section class="py-md-5 pb-4 ban-below-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-4 position-relative">
                    <img class="w-100" src="assets/image/img/resources/adv1.jpg" alt="vrajhandicrafts" title="vrajhandicrafts">
                    <div class="ban-below-cont">
                        <!-- <p class="h4 text-white w-100 text-center">Feature name Lorem.</p> -->
                        <!-- <p class="text-center text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p> -->
                        <a href="{{ url('our-products') }}" class="thm-btn border">Explore All Products</a>
                    </div>
                </div>
                <div class="col-lg-6 mt-4">
                    <div class="row">
                        <div class="col-6 mb-4">
                            <a href="https://www.vrajhandicrafts.com/steel-meenakari-container"><img class="w-100" src="assets/image/img/resources/adv2.jpg" alt="vrajhandicrafts" title="vrajhandicrafts"></a>
                        </div>
                        <div class="col-6 mb-4">
                            <a href="https://www.vrajhandicrafts.com/steel-meenakari-container"><img class="w-100" src="assets/image/img/resources/adv3.jpg" alt="vrajhandicrafts" title="vrajhandicrafts"></a>
                        </div>
                        <div class="col-12">
                            <a href="https://www.vrajhandicrafts.com/wooden-meenakari-handicraft"><img class="w-100" src="assets/image/img/resources/adv4.jpg" alt="vrajhandicrafts" title="vrajhandicrafts"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner below end -->

    <!-- About Section Statrt -->
    <section class="py-5 ">
       <div class="container">
            @foreach ($homepages as $item)
           
            <div class="section-title text-center">
                <p class="sm-title">About</p>
                @if ($homepages->isNotEmpty())
                <p class="title">{{ $homepages->first()->short_description }}</p>
                 @else
                      @endif
            </div>
            @if ($homepages->isNotEmpty())
                        <p>{!! htmlspecialchars_decode($homepages->first()->description) !!}</p>
                             @else
                                @endif
                @endforeach
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
                        <p class="title">Our Exclusive Handicraft Collection</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex justify-content-lg-end">
                        <a class="thm-btn" href="{{ url('contact-us') }}" alt="Enquiry" title="Enquiry">Enquiry</a>
                    </div>
                </div>
            </div>

            <div class="row">
                  @foreach($products as $data)
                <div class=" col-md-6 col-lg-4 col-xl-3 mb-4">
                    <div class="product-box">
                        <img src="{{ url('images/' . $data['image']) }}" alt="{{ $data->product_title }}" title="{{ $data->product_title }}">
                        <div class="product-content">
                            <p class="pd-name mb-2"><a href="{{ url('/', ['product_url' => $data->product_url]) }}" alt="{{ $data->product_title }}" title="{{ $data->product_title }}">{{ $data->product_title }}</a></p>
                            <p class="text-clamp1">{{ $data->sort_description }}</p>
                            <a href="{{ url('/', ['product_url' => $data->product_url]) }}" alt="{{ $data->product_title }}" title="{{ $data->product_title }}" class="thm-btn  py-1">View Details</a>
                        </div>
                    </div>
                </div>
                  @endforeach
            </div>

        </div>
    </section>
    <!-- Product section end -->

    <!-- Contact Section Start -->
    @include('contact-home')
    <!-- Contact Section End -->

    <!-- Offer Section start-->
    <section class="py-5 offer-sect">
        <div class="container">
            <div class="discount-info d-flex justify-content-center my-4">
                <p class="titl">Timeless Elegance in Every Creation</p>
            </div>
            <div class="row">
                <div class="col-lg-6">

                    <img src="assets/image/img/resources/feature.png" alt="Vraj Handicraft" title="Vraj Handicraft">
                </div>
                <div class="col-lg-6">
                    <div class="section-title ">
                        <p class="sm-title">Why Us</p>
                        <p class="title">Why Choose Vraj Handicraft?</p>
                    </div>
                    <p class="text-justify">We take pride in delivering exquisite handcrafted products that blend tradition,
                    elegance, and quality. Our dedication to fine craftsmanship ensures that every piece we create is unique, 
                    timeless, and perfect for any occasion.</p>

                    <ul class="feature-list">
                        <li>Authentic Handcrafted Designs</li>
                        <li>High-Quality Materials</li>
                        <li>Perfect for Every Occasion</li>
                        <li>Customization Available</li>
                        <li>Timely Delivery</li>
                    </ul>

                    
                </div>

            </div>
            <div class="row mt-4 justify-content-center">
                <div class="col-lg-6">
                    <div class="row funfact-box">
                        <div class="col-lg-6 ">
                            <div class="funfact-box-in">
                                <div class="counter-bx" > <p class="h1"><span class="odometer" data-odometer-final="850"></span><span
                                        class="prefix">+</span></p></div>
                                <p class="h6">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="funfact-box-in">
                                <div class="counter-bx" > <p class="h1"><span class="odometer" data-odometer-final="1000"></span><span
                                        class="prefix">+</span></p></div>
                                <p class="h6">Products Delivered</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Offer Section end -->
    
    <!--Blogs Start-->
    <section class="py-5 gallery-sect">
        <div class="container">
            <div class="section-title text-center">
                <p class="sm-title">News & Blogs</p>
                <p class="title">Latest News & Blogs</p>
            </div>
            <div class="row">
                @foreach($blog as $data)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="blogs-box">
                        <a href="{{ url('blog', ['blog_slug' => $data->blog_slug]) }}" alt="{{ $data->blog_title }}" title="{{ $data->blog_title }}"><img class="w-100" src="{{ url('images/' . $data['image']) }}" alt="{{ $data->blog_title }}" title="{{ $data->blog_title }}"></a>
                        <div class="blogs-name-box">
                            <div class="d-flex align-items-center gap-4">
                                 <p class="d-flex align-items-center gap-2"><i class="fa-solid fa-user"></i> <span>By - Admin</span></p>
                                 <p class="d-flex align-items-center gap-2"><i class="fa-solid fa-calendar-days"></i> <span>{{ $data->date_time ? \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', trim($data->date_time))->format('j M Y') : "" }}</span></p>
                            </div>
                            <p class="h6 text-clamp1 "><a href="{{ url('blog', ['blog_slug' => $data->blog_slug]) }}" alt="{{ $data->blog_title }}" title="{{ $data->blog_title }}">{{ $data->blog_title }}</a></p>
                            
                            <div class="h6 text-clamp2 mt-2"><p>{{ $data->short_description }}</p></div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
     </section>
    <!--Blogs End-->
    
    

    <!-- Gallery section Start -->
     <section class="py-5 gallery-sect">
        <div class="container">
            <div class="section-title text-center">
                        <p class="sm-title">Our Products</p>
                        <p class="title">Our Gallery</p>
            </div>
            <div class="produc_gallery swiper">
                <div class="swiper-wrapper">
                      @foreach ($gallery as $gallery_show)
                    <div class="swiper-slide">
                        <a href="{{ url('images/' . $gallery_show['gallery_image']) }}" alt="Vraj Handicraft" title="Vraj Handicraft" data-fancybox="gallery">
                            <img src="{{ url('images/' . $gallery_show['gallery_image']) }}" alt="Vraj Handicraft" title="Vraj Handicraft">
                        </a>
                    </div>
                     @endforeach
                  
                </div>
            </div>
        </div>
     </section>
    <!-- Gallery section End -->

     @include('include.footer-inner')
     
     @include('include.comman-end')

   
</body>

</html>