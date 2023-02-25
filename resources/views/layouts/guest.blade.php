<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" prefix="og: https://ogp.me/ns#" class="scroll-smooth">
<head>
    <title> {!! (isset($title)? $title.'-':''). config('app.name') !!} </title>
    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="title" content="{{ config('app.name')}}">
    <meta name="description" content="Fast-Food, Chicken and Mexican Restaurant
    @if(isset($description)) {{ "-".$description }}@endif ">
    <meta name="keywords"
          content="mexican, chicken, fast-food, crown mexican, crown restaurant southend, southend-on-sea">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FF5C5C">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FF5C5C">

    <meta name='dmca-site-verification' content='QmZpYWJqNzhqMGR1QWd1WTgwbDUzTk5NQmlZMmlBQUE0c1VOaEZSTEJVQT01'/>

    <meta property="og:title" content="{!! (isset($title)? $title.'-':''). config('app.name') !!}"/>
    <meta property="og:type" content="Restaurant"/>
    <meta property="og:url" content="{{ config('app.url') }}"/>
    <meta property="og:image" content="{{ asset('img/social-cover.png') }}"/>
    <meta property="og:description"
          content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London"/>
    <meta property="og:site_name" content="{{ config('app.name') }}"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:locale:alternate" content="en_US"/>

    <!-- Google tag (gtag.js) -->
    {{--    <script async defer src="https://www.googletagmanager.com/gtag/js?id=G-GBDS40ET9J"></script>--}}
    {{--    <script defer>--}}
    {{--        window.dataLayer = window.dataLayer || [];--}}
    {{--        function gtag(){dataLayer.push(arguments);}--}}
    {{--        gtag('js', new Date());--}}
    {{--        gtag('config', 'G-GBDS40ET9J');--}}
    {{--    </script>--}}
    <!-- Google Tag Manager -->
    {{--    <script defer>--}}
    {{--        (function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':--}}
    {{--                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],--}}
    {{--            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=--}}
    {{--            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);--}}
    {{--        })(window,document,'script','dataLayer','GTM-PNX2RHX');--}}
    {{--    </script>--}}
    <!-- End Google Tag Manager -->

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Restaurant",
    "name": "{{ config('app.name') }} ",
    "logo": [ "{{ asset('img/logo3d.png') }}" ],
    "url":  "https://crownrestaurant.uk",
    "slogan": "Fast-Food, Chicken and Mexican Restaurant",
    "hasMap": "https://goo.gl/maps/dMbPha53su2HvXL68",
    "founder": {
      "@type": "Person",
      "name": "{{ "Kalam Sarker" }}"
    },
    "keywords": "Mexican,Chicken,Fast-Food,crown mexican",
    "currenciesAccepted": "GBP",
    "paymentAccepted": "Credit Card, Cash",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "148 W 51st St Suit 42 Unit 7",
      "addressLocality": "Westcliff-on-Sea",
      "addressRegion": "Southend-on-Sea",
      "postalCode": "SS11PJ",
      "addressCountry": "UK"
      },
    "hasMenu":{
      "@type":"Menu",
      "url":"https://crownrestaurant.uk/menu"
      },
     "servesCuisine": "Takeaway"
  }


    </script>

    <!-- Fonts -->

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles
    <!-- Scripts -->


</head>
<body class="antialiased text-gray-800 dark:text-gray-200 ">

<!-- Messenger Chat plugin Code -->
<div id="fb-root"></div>

<!-- Your Chat plugin code -->
<div id="fb-customer-chat" class="fb-customerchat">
</div>

<script defer >
    //     var chatbox = document.getElementById('fb-customer-chat');
    //     chatbox.setAttribute("page_id", "104999102364152");
    //     chatbox.setAttribute("attribution", "biz_inbox");
    //
    // <!-- Your SDK code -->
    //
    //     window.fbAsyncInit = function() {
    //         FB.init({
    //             xfbml            : true,
    //             version          : 'v14.0'
    //         });
    //     };
    //     (function(d, s, id) {
    //         var js, fjs = d.getElementsByTagName(s)[0];
    //         if (d.getElementById(id)) return;
    //         js = d.createElement(s); js.id = id;
    //         js.src = 'https://connect.facebook.net/en_GB/sdk/xfbml.customerchat.js';
    //         fjs.parentNode.insertBefore(js, fjs);
    //     }(document, 'script', 'facebook-jssdk'));
</script>

<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PNX2RHX"
            height="0" width="0" title="Google Tag Manager" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<x-jet-banner/>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @livewire('guest.components.navigation')

    <div class="py-4">
        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow-md mt-10 rounded w-3/4 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </header>
        @endif
        {{ $slot }}
        @yield('content')
    </div>
</div>
@livewire('guest.components.footer')

<!-- Back to top button -->
<button type="button" data-mdb-ripple="true" data-mdb-ripple-color="light"
        class="inline-block p-3 bg-gradient-to-br from-pink-700 to-orange-400 hover:bg-gradient-to-bl bg-opacity-10 backdrop-blur-md hover:bg-opacity-95 text-white font-medium text-xs leading-tight uppercase rounded-full drop-shadow-xl focus:outline-none transition duration-150 ease-in-out bottom-5 right-5"
        id="btn-back-to-top">
    <svg aria-hidden="true" focusable="false" data-prefix="fas" class="w-4 h-4" role="img"
         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
        <path fill="currentColor"
              d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"></path>
    </svg>
</button>

@stack('modals')


@yield('jsAfterLoad')

@include('cookie-consent::index')


<script defer>
    // Get the button
    let ScrollButton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            ScrollButton.style.display = "block";
        } else {
            ScrollButton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    ScrollButton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
@livewireScripts
</body>


</html>
