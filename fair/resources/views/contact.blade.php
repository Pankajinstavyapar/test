<!doctype html>
<html class="no-js" lang="English">

@include('include.comman-head')

<body>

    <!-- header-start -->
    @include('include.header-inner')
    <!-- header-start -->

      <section class="inner_banner">
        @foreach ($homepages as $homepage)
        <img src="{{ ('assets/image/img/home-banner-2.jpg') }}" alt="">
        <div class="inner_text">
            <h1 class="inner-line">{{ $homepage->pg_name }}</h1>
            <div class="bradecram">
                <a href="{{ url('/') }}">Home / </a>
                <span>{{ $homepage->pg_name }}</span>
            </div>
        </div>
         @endforeach
    </section>

     
         <!---------------------contact-------------------->
    @include('contact-home')
 
    <!-- footer-area-start -->
    @include('include.footer-inner')
    <!-- footer-area-end -->

    <!-- JS here -->
    @include('include.comman-end')

</body>

</html>