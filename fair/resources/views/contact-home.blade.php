<section class="py-5 concact-sect">
        <div class="container">
            <div class="row">

                <div class="col-lg-7">
                    <div class="section-title ">
                        <p class="sm-title">Enquiry</p>
                        <p class="title">Contact Us Today To Explore Our Exquisite Collection!</p>
                    </div>
                    <form id="contactForm">
                         @csrf
                    @honeypot
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" name="name" id="name" oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')" required placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="phone" name="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '');" id="phone" required placeholder="Your Phone">
                            </div>
                            <div class="col-md-6">
                                <input type="email" name="email" placeholder="Your Email">
                            </div>
                            <div class="col-md-6">
                                <select name="lead_for" id="lead_for">
                                     <option value="">Select Query For</option> 
                                 @isset($products)
                                @foreach ($products as $product)
                                <option value="{{ $product->product_title }}">{{ $product->product_title }}</option>
                                @endforeach
                                @endisset
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <input type="text" oninput="this.value = this.value.replace(/[^A-Za-z0-9\s]/g, '')" name="address" id="address" required placeholder="Address">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <textarea name="message" id="message" oninput="validateTextArea(this)" placeholder="Your Message"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="pageUrl" value="{{ url()->current() }}">
                        <div class="col-md-12">
                        <div class="g-recaptcha" data-sitekey="6LcR5Q0rAAAAAPhao_JxzRGkenhqcvO7Zk1XY_Xm" data-callback="onRecaptchaSubmit" required></div>
                        
                        @if ($errors->has('g-recaptcha-response'))
                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>
                        @endif
                    </div>
                        <div class="mt-3">
                            <button type="submit" class="thm-btn">Send Message</button>
                        </div>
                    </form>
                </div>
                @foreach($website as $web)
                <div class="col-lg-5">
                    <img src="{{ asset('assets/image/img/resources/service-247-animate.svg') }}" alt="vrajhandicrafts" title="vrajhandicrafts">

                    <p class="h6 mb-2  px-4">Follow Us:</p>
                    <ul class="socaial-icons px-4">
                        <li><a href="{{ $web->website_facebook }}" alt="facebook" title="facebook" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="{{ $web->website_instagram }}" alt="instagram" title="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="{{ $web->website_twitter }}" alt="twitter" title="twitter" target="_blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                        <li><a href="{{ $web->pinterest }}" alt="pinterest" title="pinterest" target="_blank"><i class="fa-brands fa-pinterest"></i></a></li>
                        <li><a href="{{ $web->website_linkedin }}" alt="linkedin" title="linkedin" target="_blank"><i class="fa-brands fa-linkedin"></i></a></li>
                        <li><a href="https://api.whatsapp.com/send?phone=+919106754925&text=enquiry" target="_blank" alt="whatsapp" title="whatsapp"><i class="fa-brands fa-whatsapp"></i></a></li>
                    </ul>
                </div>

            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="contact-detl">
                        <img src="{{ asset('assets/image/img/icon/contact-icon-sm-2.png') }}" alt="vrajhandicrafts" title="vrajhandicrafts">
                        <p class="h6 my-2">Phone Number:</p>
                        <a href="tel:{{$web->mobile}}" alt="Phone" title="Phone">{{$web->mobile}}</a>
                        <a href="tel:{{$web->phone}}" alt="Phone" title="Phone">{{$web->phone}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-5">
                    <div class="contact-detl">
                        <img src="{{ asset('assets/image/img/icon/contact-icon-sm-1.png') }}" alt="vrajhandicrafts" title="vrajhandicrafts">
                        <p class="h6 my-2">Email Address:</p>
                        <a href="mailto:{{$web->email}}" alt="Email" title="Email">{{$web->email}}</a>
                        <a href="mailto:{{$web->contact_email}}" alt="Email" title="Email">{{$web->contact_email}}</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 mb-5">
                    <div class="contact-detl">
                        <img src="{{ asset('assets/image/img/icon/contact-icon-sm-3.png') }}" alt="vrajhandicrafts" title="vrajhandicrafts">
                        <p class="h6 my-2">Office Address:</p>
                        <p class="text-center mb-0">{{$web->head_office_address}}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>