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


      <!-- Market Place Start -->
      <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="{{ url('/') }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>Home</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="{{ url('company-profile') }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>Company Profile</span>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 mb-3">
                    <a href="{{ url('contact-us') }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>Contact Us</span>
                    </a>
                </div>
            </div>
            <div class="row">
                @foreach ($products as $data)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <a href="{{ url('/', ['product_url' => $data->product_url]) }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
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