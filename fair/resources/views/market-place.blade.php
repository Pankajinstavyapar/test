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
                 @foreach ($subdomains as $data)
                <div class="col-lg-4 col-md-4 col-sm-6 mb-3">
                    <a href="{{ url('/', ['subdomain_slug' => $data->subdomain_slug]) }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>{{ $data->subdomain_name }}</span>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="row">
                  @foreach ($pan_location as $satedata)
                <div class="col-lg-12">
                    <a href="{{ url('/', ['state_url' => $satedata->state_slug]) }}" class="thm-btn  text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>{{ $satedata->state_name }}</span>
                    </a>
                </div>
                 @php
                     $citySlugs = json_decode($satedata->city_slug);
                        @endphp
                          @foreach (json_decode($satedata->city_name) as $index => $cityName)
                <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                    <a href="{{ url('/', ['pg_url' => $citySlugs[$index]]) }}" class="thm-btn thm-btn2 text-center wow tpfadeRight animated w-100" data-wow-duration=".9s" data-wow-delay=".5s" >
                        <span>{{ $cityName }}</span>
                    </a>
                </div>
                @endforeach
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