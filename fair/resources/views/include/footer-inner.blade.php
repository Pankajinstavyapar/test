<!-- Footer Section Start -->
     <footer class=" footer-sect">
          @foreach($website as $web)
        <div class="container">
            <div class="row ">
                <div class="col-lg-2 col-md-4 col-sm-6 mb-4 ">
                    <div class="footer-logo d-flex justify-content-center ">
                        <a href="{{ url('/') }}"><img src="{{ url('images/' . $web['website_logo']) }}" alt="{{ $web->website_tagline }}" title="{{ $web->website_tagline }}"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="footer-text">
                        <p >{!! htmlspecialchars_decode($web->footer_text) !!}</p>
                    </div>
                    <ul class="socaial-icons">
                        <li><a href="{{ $web->website_facebook }}" alt="facebook" title="facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{ $web->website_instagram }}" alt="instagram" title="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{ $web->website_twitter }}" alt="twitter" title="twitter" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="{{ $web->pinterest }}" alt="pinterest" title="pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="{{ $web->website_linkedin }}" alt="linkedin" title="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+919327695494&text=enquiry" alt="whatsapp" title="whatsapp" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="footer-contact">
                        <div class="ft-cont">
                            <i class="fa fa-phone-volume"></i>
                            <div>
                                 <span>Phone:</span>
                                 <a href="tel:{{ $web->phone }}" alt="phone" title="phone">{{ $web->phone }}</a>
                            </div>
                        </div>
                        <div class="ft-cont">
                            <i class="fa fa-envelope"></i>
                            <div>
                                <span>Email: </span>
                                <a href="mailto:{{ $web->email }}" alt="email" title="email">{{ $web->email }}</a>
                           </div>
                        </div>
                        <div class="ft-cont">
                            <i class="fa fa-location-dot"></i>
                            <div class="addr">
                                <span> Address:</span>
                                <p>{{$web->head_office_address}}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6 mb-4">
                    <p class="h6 mb-3">Quick Links</p>
                    <ul class="footer-widget">
                        <li><a href="{{ url('/') }}" alt="Home" title="Home">Home</a></li>
                        <li><a href="{{ url('company-profile') }}" alt="About Us" title="About Us">About Us</a></li>
                        <li><a href="{{ url('our-products') }}" alt="Products" title="Products">Products</a></li>
                        <li><a href="{{ url('market-place') }}" alt="Market Place" title="Market Place">Market Place</a></li>
                        <li><a href="{{ url('contact-us') }}" alt="Contact" title="Contact">Contact</a></li>
                    </ul>
                </div>

            </div>
            
        </div>
        <!-- Copyright section -->
         <div class="copyright py-4 border-top mt-4 text-center">
             <p>Copyright © 2025 Vraj Handicraft  | Website Designed &amp; Promoted by Insta Vyapar<a href="https://www.instavyapar.com/our-services/digital-marketing/google-promotion.html" target="_blank" alt="Google Promotion Services" title="Google Promotion Services"> Google Promotion Services</a></p>
        </div>
        @endforeach
     </footer>
    <!-- Footer Section End-->

       <!-- whatsapp btn -->
       <div class="what-app">
        <a href="https://api.whatsapp.com/send?phone=+919327695494&text=enquiry" alt="whatsapp" title="whatsapp" target="_blank" class="btn-whatsapp-pulse btn-whatsapp-pulse-border">
            <i class="fab fa-whatsapp"></i>
        </a>
       </div>


    <!-- Scroll to top -->
    <div class="scrolltop">Scroll top <i class="fa-solid fa-arrow-right"></i></div>