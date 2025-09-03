<!DOCTYPE html>
<html>
   <
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      
      <title>Dreamy Scoops</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <link rel="stylesheet" type="text/css" href="../../../yshel/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="../../../yshel/css/style.css">
      <link rel="icon" href="../../../yshel/images/FAVICON.png" type="image/gif" />
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="../../../yshel/css/jquery.mCustomScrollbar.min.css">
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section header_bg">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"><img src="../../../yshel/images/logo.png"></a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">About</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('icecream') }}">Icecream</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ route ('services') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('blog') }}">Blog</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('contact') }}">Contact Us</a>
                     </li>
                       <li>
                        <a href="#" class="nav-item nav-link" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                        </a>

                        <form id="logout-form" action="{{ route('logout')}}" method="POST">
                           @csrf
                        </form>

                     </li>
                  </ul>
               </div>
            </nav>
         </div>
      </div>
   
      <div class="services_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="services_taital">Our Ice Cream Services</h1>
                  <p class="services_text">Dreamy Scoops at Your Service!</p>
               </div>
            </div>
            <div class="services_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="../../../yshel/images/icon-1.png"></span>Mobile Cart Services</h5>
                        <p class="lorem_text">Our Mobile Cart Services bring convenience directly to your doorstep, event, or business. Designed for flexibility and efficiency, our carts are fully equipped and operated by skilled professionals to deliver high-quality service anywhere you need it. Avail Now!!! </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="../../../yshel/images/icon-2.png"></span>Catering for Events</h5>
                        <p class="lorem_text">Perfect for weddings, corporate gatherings, birthdays, festivals, school events, and more, our fully-equipped ice cream cart brings the charm of a classic ice cream stand right to your venue. We serve premium, hand-scooped ice cream in a variety of flavors, complete with all your favorite toppings. </p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="../../../yshel/images/icon-1.png"></span>Delivery</h5>
                        <p class="lorem_text">Whether you're planning a party, treating your team at the office, or just want a late-night dessert, we deliver a variety of premium ice cream flavors in individual cups, pints, or custom party packs. Perfect for birthdays, surprise gifts, corporate treats, or simply satisfying your sweet tooth! </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">Read More</a></div>
         </div>
      </div>
 
      <div class="copyright_section margin_top90">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
     
      <script src="../../../yshel/js/jquery.min.js"></script>
      <script src="../../../yshel/js/popper.min.js"></script>
      <script src="../../../yshel/js/bootstrap.bundle.min.js"></script>
      <script src="../../../yshel/js/jquery-3.0.0.min.js"></script>
      <script src="../../../yshel/js/plugin.js"></script>
      
      <script src="../../../yshel/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../../yshel/js/custom.js"></script>
     
   </body>
</html>