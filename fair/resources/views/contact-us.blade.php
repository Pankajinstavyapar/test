<div class="contact-section space fix">
     @foreach($website as $web)
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-5">
                        <div class="contact-box style1">
                            <div class="contact-meta">
                                <div class="item">
                                    <div class="icon"><img src="{{ asset('assets/image/img/icon/phoneIcon3.svg') }}" alt="icon"></div>
                                </div>
                                <div class="item">
                                    <p class="h6">Contact Us</p>
                                    <a href="tel:{{ $web->phone }}">{{ $web->phone }}</a>
                                    <a href="tel:{{ $web->mobile }}">{{ $web->mobile }}</a>
                                </div>
                            </div>
                            <div class="contact-meta">
                                <div class="item">
                                    <div class="icon"><img src="{{ asset('assets/image/img/icon/emailIcon.svg') }}" alt="icon"></div>
                                </div>
                                <div class="item">
                                    <p class="h6">Email</p>
                                    <a href="mailto:{{ $web->email }}">{{ $web->email }}</a>
                                   
                                </div>
                            </div>
                            <div class="contact-meta">
                                <div class="item">
                                    <div class="icon"><img src="{{ asset('assets/image/img/icon/locationIcon.svg') }}" alt="icon"></div>
                                </div>
                                <div class="item">
                                    <p class="h6">Office Address</p>
                                    <a href="">{{ $web->head_office_address }}</a>
                                </div>
                            </div>
                             
                            <div class="et-social style2">
                                <a href="{{ $web->website_facebook }}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{ $web->website_twitter }}" target="_blank"><i class="fab fa-twitter"></i></a>
                                <a href="{{ $web->website_linkedin }}" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                <a href="{{ $web->pinterest }}" target="_blank"><i class="fab fa-pinterest"></i></a>
                                <!--<a href="{{ $web->website_youtube }}" target="_blank"><i class="fab fa-youtube"></i></a>-->
                                <a href="{{ $web->website_instagram }}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-form-wrapper style1 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="section-title style5 mb-25">
                                <span class="subtitle h6">get in touch</span>
                                <p class="title text-title h2 mb-4">Contact Us Today
                                </p>
                            </div>
                            <form action="#" id="contact-form" method="POST">
                                <div class="row g-3">
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="name" placeholder="Your Name *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="text" name="email" placeholder="Your Email *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-clt">
                                            <input type="number" name="number" placeholder="Phone *">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <select name="services" class="single-select" aria-label="select service">
                                             <option value="">Select Query For *</option> 
                                 @isset($products)
                                @foreach ($products as $product)
                                <option value="{{ $product->product_title }}">{{ $product->product_title }}</option>
                                @endforeach
                                @endisset
                                        </select>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <input type="text" placeholder="Address *">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-clt">
                                            <textarea name="message" id="message"
                                                placeholder="Write Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <button type="submit" class="et-btn style4">
                                            send message
                                            <i class="fa-solid fa-arrow-right ms-1"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>