<!DOCTYPE html>
<html>
   <head>
      
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">

      <link rel="icon" type="../../../yshel/image/x-icon" href="../../../yshel/images/FAVICON.png">

      
      <title>Dreamy Scoops</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      
      <link rel="stylesheet" type="text/css" href="../../../yshel/css/bootstrap.min.css">
      
      <link rel="stylesheet" type="text/css" href="../../../yshel/css/style.css">
    
      <link rel="stylesheet" href="../../../yshel/css/responsive.css">
     
      <link rel="icon" href="c:\Users\PC-05\Downloads\fruit-ice-cream-cup-Ka8JQRC-600.jpg" type="../../../yshel/image/gif" />
      
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700&display=swap" rel="stylesheet">
     
      <link rel="stylesheet" href="../../../yshel/css/jquery.mCustomScrollbar.min.css">
      
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   </head>
   <body>
      <div class="header_section">
         <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
               <a class="navbar-brand"href="index.html"> <img src="../../../yshel/images/logo.png">

               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto">
                     
                     <li class="nav-item active">
                        <a class="nav-link" href="/">Dashboard</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link" href="{{ route ('about') }}">About</a>
                     </li>
                     <li class="nav-item">
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
        
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                     <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                     <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                  </ol>
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="../../../yshel/images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">Ice cream is a mixture of milk, cream, sugar, and sometimes other ingredients, frozen into a soft, creamy delight using special techniques. Ice cream has been a popular treat for hundreds of years but has only become commonplace since the widespread use of refrigeration. </p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="../../../yshel/images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">Ice cream is delicious and famous, and it is made from dairy products such as milk and cream, eggs, sugar and sorbet powder.  </p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="../../../yshel/images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-6">
                              <h1 class="banner_taital">Ice Cream</h1>
                              <p class="banner_text">How did ice cream begin? Around 2000 BC, the Chinese were already enjoying a primitive form of this delightful treat, mixing rice with milk and freezing it with snow. This early experiment laid the groundwork for future dessert innovations.</p>
                              <div class="started_text"><a href="#">Order Now</a></div>
                           </div>
                           <div class="col-sm-6">
                              <div class="banner_img"><img src="../../../yshel/images/banner-img.png"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
     
      </div>
      
      <div class="about_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <div class="about_img"><img src="../../../yshel/images/about-img.png"></div>
               </div>
               <div class="col-md-6">
                  <h1 class="about_taital">About Icecream</h1>
                  <p class="about_text">Ice cream is a popular frozen dessert typically made from dairy products like milk and cream, flavored with sweeteners and various additions like fruits, nuts, or chocolate. It's enjoyed worldwide and comes in countless flavors and forms. </p>
                  <div class="read_bt_1"><a href="#">Read More</a></div>
               </div>
            </div>
         </div>
      </div>
      
      <div class="cream_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="cream_taital">Our Featured Ice Cream</h1>
                  <p class="cream_text">"Life is better with a scoop in your hand."</p>
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
                        <h5 class="tasty_text"><span class="icon_img"><img src="../../../yshel/images/icon-1.png"></span>Mobile Cart Service</h5>
                        <p class="lorem_text">Our Mobile Cart Services bring convenience directly to your doorstep, event, or business. Designed for flexibility and efficiency, our carts are fully equipped and operated by skilled professionals to deliver high-quality service anywhere you need it. Avail Now!!!</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="services_box">
                        <h5 class="tasty_text"><span class="icon_img"><img src="../../../yshel/images/icon-2.png"></span>Catering for Events</h5>
                        <p class="lorem_text">Perfect for weddings, corporate gatherings, birthdays, festivals, school events, and more, our fully-equipped ice cream cart brings the charm of a classic ice cream stand right to your venue. We serve premium, hand-scooped ice cream in a variety of flavors, complete with all your favorite toppings.</p>
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
      
      <div class="testimonial_section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h1 class="testimonial_title">Testimonial</h1>
               </div>
            </div>
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
                           <textarea class="massage-bt" placeholder="Massage" rows="5" id="comment" name="Massage"></textarea>
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
                           <span class="padding_left_10"><i class="fa fa-phone" aria-hidden="true"></i></span>Call : +63 9674528943
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
      
      <script src="../../../yshel/js/jquery.min.js"></script>
      <script src="../../../yshel/js/popper.min.js"></script>
      <script src="../../../yshel/js/bootstrap.bundle.min.js"></script>
      <script src="../../../yshel/js/jquery-3.0.0.min.js"></script>
      <script src="../../../yshel/js/plugin.js"></script>
     
      <script src="../../../yshel/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="../../../yshel/js/custom.js"></script>
      
   </body>
</html>