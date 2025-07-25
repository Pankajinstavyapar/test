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
                        <a class="thm-btn" href="{{ url('contact-us') }}">Enquiry</a>
                    </div>
                </div>
            </div>

            <div class="row">
                  @foreach($products as $data)
                <div class=" col-md-6 col-lg-4 col-xl-3 mb-4">
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
    </section>
    <!-- Product section end -->
    @include('contact-home')  

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>