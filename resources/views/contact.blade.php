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
                        <a class="nav-link" href="s{{ route ('icecream') }}">Services</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('blog') }}">Blog</a>
                     </li>
                     <li class="nav-item active">
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
   

      <div class="contact_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                  <div class="contact_main">
                     <h1 class="contact_title">Contact Us</h1>
                     <form action="/action_page.php">
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Name" name="Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Email" name="Name">
                        </div>
                        <div class="form-group">
                           <input type="text" class="email-bt" placeholder="Phone Number" name="Email">
                        </div>
                        <div class="form-group">
                           <textarea class="massage-bt" placeholder="Message" rows="5" id="comment" name="Massage"></textarea>
                        </div>
                     </form>
                     <div class="main_bt"><a href="#">SEND</a></div>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="location_text">
                     <ul>
                        <li>
                           <a href="#">
                           <span class="padding_left_10 active"><i class="fa fa-map-marker" aria-hidden="true"></i></span>Naga Cebu</a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call :  +63 9674528943
                           </a>
                        </li>
                        <li>
                           <a href="#">
                           <span class="padding_left_10"><i class="fa fa-envelope" aria-hidden="true"></i></span>Email : rachellejadedee@gmail.com
                           </a>
                        </li>
                     </ul>
                  </div>
                  <div class="mail_main">
                     <h3 class="newsletter_text">Newsletter</h3>
                     <div class="form-group">
                        <textarea class="update_mail" placeholder="Enter Your Email" rows="5" id="comment" name="Enter Your Email"></textarea>
                        <div class="subscribe_bt"><a href="#">Subscribe</a></div>
                     </div>
                  </div>
                  <div class="footer_social_icon">
                     <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                     </ul>
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
     
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
    
   </body>
</html>