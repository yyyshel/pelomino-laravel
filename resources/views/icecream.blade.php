<!DOCTYPE html>
<html>
   <head>
      
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
      
      <link rel="stylesheet" href="../../../yshel/css/responsive.css">
      
      <link rel="icon" type="../../../yshel/image/x-icon" href="../../../yshel/images/FAVICON.png">
    
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
                     <li class="nav-item ">
                        <a class="nav-link" href="/">Home</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">About</a>
                     </li>
                     <li class="nav-item active">
                        <a class="nav-link" href="{{ route ('icecream') }}">Ice Cream</a>
                     </li>
                     <li class="nav-item">
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
   

      <div class="cream_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="cream_taital">Our Featured Ice Cream</h1>
                  <p class="cream_text">"Life is better with a scoop in your hand"</p>
               </div>
            </div>
            <div class="cream_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/Mango-Graham-Float.png"></div>
                        <div class="price_text">$2</div>
                        <h6 class="strawberry_text">Mango Float Ice Cream</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/img-2.png"></div>
                        <div class="price_text">$5</div>
                        <h6 class="strawberry_text">Cherry On Top</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/img-1.png"></div>
                        <div class="price_text">$3</div>
                        <h6 class="strawberry_text">Cookies and Cream</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="cream_section_2">
               <div class="row">
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/img-3.png"></div>
                        <div class="price_text">$5</div>
                        <h6 class="strawberry_text">Vanilla Ice Cream</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/img-4.png"></div>
                        <div class="price_text">$4</div>
                        <h6 class="strawberry_text">Chocolate Ice Cream</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="cream_box">
                        <div class="cream_img"><img src="../../../yshel/images/img-5.png"></div>
                        <div class="price_text">$5</div>
                        <h6 class="strawberry_text">Strawberry Ice Cream</h6>
                        <div class="cart_bt"><a href="#">Add To Cart</a></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="seemore_bt"><a href="#">See More</a></div>
         </div>
      </div>
   
      <div class="copyright_section margin_top90">
         <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
         </div>
      </div>
     
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
    
   </body>
</html>