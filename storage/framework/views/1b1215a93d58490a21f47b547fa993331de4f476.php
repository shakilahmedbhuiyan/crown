<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" prefix="og: https://ogp.me/ns#" class="scroll-smooth">
<head>
    <title> <?php echo (isset($title)? $title.'-':''). config('app.name'); ?> </title>
    <link rel="icon" href="<?php echo e(asset('favicon.ico')); ?>" type="image/x-icon">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="title" content="<?php echo e(config('app.name')); ?>">
    <meta name="description" content="Fast-Food, Chicken and Mexican Restaurant
    <?php if(isset($description)): ?> <?php echo e("-".$description); ?><?php endif; ?> ">
    <meta name="keywords"
          content="mexican, chicken, fast-food, crown mexican, crown restaurant southend, southend-on-sea">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#FF5C5C">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#FF5C5C">

    <meta name='dmca-site-verification' content='QmZpYWJqNzhqMGR1QWd1WTgwbDUzTk5NQmlZMmlBQUE0c1VOaEZSTEJVQT01'/>

    <meta property="og:title" content="<?php echo (isset($title)? $title.'-':''). config('app.name'); ?>"/>
    <meta property="og:type" content="Restaurant"/>
    <meta property="og:url" content="<?php echo e(config('app.url')); ?>"/>
    <meta property="og:image" content="<?php echo e(asset('img/social-cover.png')); ?>"/>
    <meta property="og:description"
          content="Mexican | Fast-Food | Italian | Chicken-Takeaway in Westcliff-On-Sea, London"/>
    <meta property="og:site_name" content="<?php echo e(config('app.name')); ?>"/>
    <meta property="og:locale" content="en_GB"/>
    <meta property="og:locale:alternate" content="en_US"/>

    <!-- Google tag (gtag.js) -->
    
    
    
    
    
    
    
    <!-- Google Tag Manager -->
    
    
    
    
    
    
    
    <!-- End Google Tag Manager -->

    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "Restaurant",
    "name": "<?php echo e(config('app.name')); ?> ",
    "logo": [ "<?php echo e(asset('img/logo3d.png')); ?>" ],
    "url":  "https://crownrestaurant.uk",
    "slogan": "Fast-Food, Chicken and Mexican Restaurant",
    "hasMap": "https://goo.gl/maps/dMbPha53su2HvXL68",
    "founder": {
      "@type": "Person",
      "name": "<?php echo e("Kalam Sarker"); ?>"
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
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

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

<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.banner','data' => []]); ?>
<?php $component->withName('jet-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.navigation')->html();
} elseif ($_instance->childHasBeenRendered('Zc5iOre')) {
    $componentId = $_instance->getRenderedChildComponentId('Zc5iOre');
    $componentTag = $_instance->getRenderedChildComponentTagName('Zc5iOre');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Zc5iOre');
} else {
    $response = \Livewire\Livewire::mount('guest.components.navigation');
    $html = $response->html();
    $_instance->logRenderedChild('Zc5iOre', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <div class="py-4">
        <!-- Page Heading -->
        <?php if(isset($header)): ?>
            <header class="bg-white dark:bg-gray-800 shadow-md mt-10 rounded w-3/4 mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <?php echo e($header); ?>

            </header>
        <?php endif; ?>
        <?php echo e($slot); ?>

        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('guest.components.footer')->html();
} elseif ($_instance->childHasBeenRendered('EcPTjmr')) {
    $componentId = $_instance->getRenderedChildComponentId('EcPTjmr');
    $componentTag = $_instance->getRenderedChildComponentTagName('EcPTjmr');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('EcPTjmr');
} else {
    $response = \Livewire\Livewire::mount('guest.components.footer');
    $html = $response->html();
    $_instance->logRenderedChild('EcPTjmr', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

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

<?php echo $__env->yieldPushContent('modals'); ?>


<?php echo $__env->yieldContent('jsAfterLoad'); ?>

<?php echo $__env->make('cookie-consent::index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
<?php echo \Livewire\Livewire::scripts(); ?>

</body>


</html>
<?php /**PATH C:\xampp\htdocs\crown\resources\views/layouts/guest.blade.php ENDPATH**/ ?>