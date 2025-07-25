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

    <!-- About Section Statrt -->
    <section class="py-5 ">
        <div class="container clearfix">
             @foreach ($homepages as $item)
            <div class="floated-abt">
                @if ($item->image)
                        <img src="{{ url('images/' . $item->image) }}" alt="{{ $homepages->first()->short_description }}" title="{{ $homepages->first()->short_description }}">
                         @endif
                <!-- Share btn start -->
                <div class="share-btn-box ">
                    <span class="share-btn">
                        <i class="fa fa-share" aria-hidden="true"></i> Share On
                    </span>
                    <div class="social-share">
                        <ul>
                            <li><button type="button" class="facebook" data-sharer="facebook" data-url="{{ url()->current() }}"><i
                                        class="fab fa-facebook"></i> </button></li>
                            <li><button type="button" class="twitter" data-sharer="twitter" data-url="{{ url()->current() }}"><i
                                        class="fab fa-twitter"></i>
                                </button></li>
                            <li> <button type="button" class="whatsapp" data-sharer="whatsapp"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="fab fa-whatsapp"></i> </button></li>
                            <li> <button type="button" class="linkedin" data-sharer="linkedin" data-url="{{ url()->current() }}"><i
                                        class="fab fa-linkedin"></i>
                                </button></li>
                            <li> <button type="button" class="telegram" data-sharer="telegram"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="fab fa-telegram"></i>
                                </button></li>
                            <li> <button type="button" class="email" data-sharer="email"
                                    data-title="Checkout this awesome product offered by Company" data-url="{{ url()->current() }}"><i
                                        class="far fa-envelope"aria-hidden="true"></i>
                                </button></li>
                        </ul>
                    </div>
                </div>
                <!-- Share btn end -->
            </div>
            <div class="section-title ">
                <p class="sm-title">About</p>
                 @if ($homepages->isNotEmpty())
                <p class="title">{{ $homepages->first()->short_description }}</p>
                @else
                     @endif
            </div>
            <p>@if ($homepages->isNotEmpty())
                                {!! htmlspecialchars_decode($homepages->first()->description) !!}
                            @else
                            @endif</p>
            @endforeach
        </div>
    </section>
    <!-- About Section End -->
     
    @include('contact-home')

    @include('include.footer-inner')
     
    @include('include.comman-end')
    
</body>

</html>