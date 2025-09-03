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
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('services') }}">Services</a>
                     </li>
                     <li class="nav-item active">
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
    

      <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="testimonial_title">Testimonial</h1>
               </div>
            < </div>
            <div class="testimonial_section_2">
               <div class="row">
                  <div class="col-md-12">
                     <div class="testimonial_box">
                        <div id="main_slider" class="carousel slide" data-ride="carousel">
                           <div class="carousel-inner">
                              <div class="carousel-item active">
                                 <p class="testimonial_text">"There’s nothing quite like the first spoonful of creamy, rich ice cream on a hot day."</p>
                                <div class="testimonial_img_wrapper">
                              <img src="../../../yshel/images/me.jpg" class="testimonial_img">
                              </div>
                                 <h4 class="client_name">Rachelle Pelomino</h4>
                                 
                              </div>
                              <div class="carousel-item">
                                 <p class="testimonial_text">"This ice cream reminds me of my childhood—summer days spent running through sprinklers and chasing the ice cream truck."</p>
                                  <img src="../../../yshel/images/grace.jpg" class="testimonial_img">
                                 <h4 class="client_name">Mary Grace Labadia</h4>
                                
                              </div>
                              <div class="carousel-item">
                                 <p class="testimonial_text">"Legit the best ice cream I’ve ever had. I go with my friends after school and we try a new flavor every time. It’s like our little tradition now. The cookie dough one? Unreal.</p>
                                  <img src="../../../yshel/images/jayford.jpg" class="testimonial_img">
                                 <h4 class="client_name">Jayford Gesim</h4>

                              </div>
                           </div>
                           <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                           <i class="fa fa-angle-left"></i>
                           </a>
                           <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                           <i class="fa fa-angle-right"></i>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2025 All Rights Reserved. Design by <a href="https://html.design">Free Html Templates</a> Distribution by <a href="https://themewagon.com">ThemeWagon</a></p>
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