<head>
     @foreach($website as $web)
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@if ($homepages->first() && $homepages->first()->pg_meta_title) {{ $homepages->first()->pg_meta_title }} @else @endif</title>
    <meta name="keywords" content="@if ($homepages->first() && $homepages->first()->pg_meta_keyword) {{ $homepages->first()->pg_meta_keyword }} @else @endif">
    <meta name="description" content="@if ($homepages->first() && $homepages->first()->pg_meta_desc) {{ $homepages->first()->pg_meta_desc }} @else @endif">
    <meta name="author" content="{{ $web->website_tagline }}">
    <meta name="distribution" content="global" />
    <meta name="language" content="English" />
    <meta name="rating" content="general" />
    <meta name="ROBOTS" content="index, follow" />
    <meta name="revisit-after" content="Daily" />
    <meta name="googlebot" content="index, follow" />
    <meta name="bingbot" content="index, follow" />
    <meta name="document-type" content="Public" />
    <meta name="document-rating" content="Safe for Kids" />
    <meta name="Expires" content="never" />
    <meta name="HandheldFriendly" content="True" />
    <meta name="YahooSeeker" content="Index,Follow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.7/themes/odometer-theme-default.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('assets/front-css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-css/odometer.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/front-css/style.css') }}">
    <link href="{{ url('images/' . $web['website_icon']) }}" rel="icon">
    <link rel="canonical" href="{{ url()->current() }}" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-19FLQFJZQR"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-19FLQFJZQR'); </script>
    @endforeach
</head>