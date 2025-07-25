<!-- header & nav start-->
    <header class="header">
        @foreach($website as $web)
        <div class="container">
            <div class="conts-head">
                <div class="d-md-flex gap-2 flex-wrap justify-content-lg-start justify-content-center d-none">
                    <div class="header-btn">
                        <i class="fa-solid fa-phone-volume"></i>
                        <div class="">
                            <!-- <span>Contact Number</span> -->
                            <a href="tel:{{ $web->phone }}" alt="phone" title="phone">{{ $web->phone }}</a>
                        </div>
                    </div>
                    <div class="header-btn">
                        <i class="fa-solid fa-envelope"></i>
                        <div class="">
                            <!-- <span>Email Id</span> -->
                            <a href="mailto:{{ $web->email }}" alt="email" title="email">{{ $web->email }}</a>
                        </div>
                    </div>
                </div>
                <div>
                    <!-- <p class="sc-title">Folllow Us On: </p> -->
                    <ul class="socaial-icons">
                        <li><a href="{{ $web->website_facebook }}" alt="facebook" title="facebook"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{ $web->website_instagram }}" alt="instagram" title="instagram"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{ $web->website_twitter }}" alt="twitter" title="twitter"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="{{ $web->pinterest }}" alt="pinterest" title="pinterest"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="{{ $web->website_linkedin }}" alt="linkedin" title="linkedin"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+919327695494&text=enquiry" alt="whatsapp" title="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </header>
    
    <nav class="navbar">
        <div class="container">
            <div class="navbar-box">
                <div class="logo">
                    <a href="{{ url('/') }}"><img src="{{ url('images/' . $web['website_logo']) }}" alt="{{ $web->website_tagline }}" title="{{ $web->website_tagline }}"></a>
                </div>
                <div class="nav-menu-header">
                    <ul class="nav-links">
                        <li><a href="{{ url('/') }}" alt="Home" title="Home">Home</a></li>
                        <li class="has-sub-menu"><a href="{{ url('our-products') }}" alt="Product" title="Product">Product</a>
                            <span class="dwn-arrow"><i class="fa-solid fa-plus"></i></span>
                            <ul class="sub-menu">
                          @foreach($products as $p)
                                     <li>
                                    @if($category_product ?? false OR request()->routeIs('subdomain.product','subdomain.detail'))
                                <a href="{{ url('/', ['subdomain_slug' => $subdomainData->subdomain_slug, 'pg_url' => $p->product_url]) }}" alt="{{ $p->product_title }}" title="{{ $p->product_title }}">{{ $p->product_title }}</a>
                            @elseif($location_product == 'loc')
                                <a href="{{ url('/', ['pg_url' => $locationdata->pg_url, 'product_url' => $p->product_url]) }}" alt="{{ $p->product_title }}" title="{{ $p->product_title }}">{{ $p->product_title }}</a>
                            @elseif($indialocation_u ?? false)
                                <a href="{{ url('/', ['pg_url' => $indialocationdata->pg_url, 'product_url' => $p->product_url]) }}" alt="{{ $p->product_title }}" title="{{ $p->product_title }}">{{ $p->product_title }}</a>
                            @elseif($locationState_product == 'lo')
                                <a href="{{ url('/', ['state_url' => $parent_locationData->state_slug, 'product_url' => $p->product_url]) }}" alt="{{ $p->product_title }}" title="{{ $p->product_title }}">{{ $p->product_title }}</a>
                            @elseif($product_u ?? false OR request()->routeIs('/', 'marketplace', 'company-profile', 'start', 'contact', 'companyprofile', 'sitemap', 'our-products', $p->product_url, 'blogdata','certificate'))
                                <a href="{{ url('/', ['product_url' => $p->product_url]) }}" alt="{{ $p->product_title }}" title="{{ $p->product_title }}">{{ $p->product_title }}</a>
                            @endif
                                </li>
                         @endforeach
                            </ul>
                        </li>
                        <li><a href="{{ url('company-profile') }}" alt="About" title="About">About&nbsp;Us</a></li>
                        <li><a href="{{ url('sitemap') }}" alt="Sitemap" title="Sitemap">Sitemap</a></li>
                        <!--<li><a href="{{ url('gallery') }}" alt="Gallery" title="Gallery">Gallery</a></li>-->
                        <li><a href="{{ url('contact-us') }}" alt="Contact" title="Contact">Contact</a></li>
                    </ul>
                </div>
                <div class="serch-box">
                    <input type="search" id="search_input" placeholder="Start Searching Now">
                    <button><i class="fa-solid fa-magnifying-glass"></i></button>
                    <div class="search_box px-2 row"></div>
                </div>
                <div class="d-flex align-items-center gap-4">
                    <div class="hamburger">
                        <i class="fas fa-bars"></i>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- header & nav end-->

    <!--  Mobile Menu  -->
    <div class="cstm-mobile-menu">
        <div class="cstm-mobile-overlay"></div>
        <div class="cstm-menu-wrapper">
            <div class="close-btn">
                <i class="fa-solid fa-circle-xmark"></i>
            </div>
            <div class="logo">
                <a class="logo_img" href="{{ url('/') }}" alt="{{ $web->website_tagline }}" title="{{ $web->website_tagline }}">
                    <img src="{{ url('images/' . $web['website_logo']) }}" alt="{{ $web->website_tagline }}" title="{{ $web->website_tagline }}">
                </a>
            </div>
            <!-- Sidebar About -->
            <div class="desktop-sidebar">
                <div class="about-sidebar">
                    <p>{!! htmlspecialchars_decode($web->footer_text) !!}</p>
                </div>
            </div>

            <!-- bobile navbar -->
            <nav class="cstm-mobile-menu-nav">
                <!-- cstm mobile nav appers here -->
            </nav>

            <!-- social media -->
            <div class="socaial-icons-sidebar">
                <ul class="socaial-icons">
                    <li><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-x-twitter"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-pinterest"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-tumblr"></i></a></li>
                    <li><a href="https://api.whatsapp.com/send?phone=+919106754925&text=enquiry" alt="whatsapp" title="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    @endforeach
    <!-- End  Main Menu  -->