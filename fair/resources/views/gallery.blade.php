<!DOCTYPE html>
<html lang="en">

@include('include.comman-head')

<body>

    @include('include.header-inner')

     <!-- Breadcrumb Start -->
     <section class="pt-5">
         @foreach ($homepages as $homepage)
        <div class="breadcrumb-area">
            <div class="container">
                <h1>{{ $homepage->pg_name }}</h1>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item active">{{ $homepage->pg_name }}</li>
                </ul>
            </div>
        </div>
        @endforeach
    </section>
    <!-- Breadcrumb End -->

    <!-- Gallery section Start -->
     <section class="py-5 gallery-sect">
        <div class="container">
            <div class="section-title text-center">
                        <p class="sm-title">Our Products</p>
                        <p class="title">Our Gallery</p>
            </div>
            <div class="produc_gallery swiper">
                <div class="row">
                      @foreach ($gallery as $gall)
                      <div class="col-md-3 mt-3">
                    <div class="swiper-slide">
                        <a href="{{ url('images/' . $gall['gallery_image']) }}" data-fancybox="gallery">
                            <img src="{{ url('images/' . $gall['gallery_image']) }}" alt="">
                        </a>
                    </div>
                    </div> 
                     @endforeach
                  
                </div>
            </div>
        </div>
     </section>
    <!-- Gallery section End -->


    @include('contact-home')

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>