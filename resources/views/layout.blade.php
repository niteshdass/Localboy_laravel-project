<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Donation Bank</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:400,700|Work+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">    
    
    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">
  
    <link rel="stylesheet" href="{{asset('css/aos.cs')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
  </head>
  <body>
  


  <div class="site-wrap">
<?php
    $id=Session::get('user_id');?>

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <div class="site-navbar-wrap js-site-navbar bg-white">
      
      <div class="container">
        <div class="site-navbar bg-light">
          <div class="row align-items-center">
            <div class="col-1">
              <h2 class="mb-0 site-logo"><a href="index.html" class="font-weight-bold text-uppercase">Donation Bank</a></h2>
            </div>
            <div class="col-11">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

                  <ul class="site-menu js-clone-nav d-none d-lg-block">
                    <li class="active"><a href="{{route('home')}}">Home</a></li>
                    <li class="has-children">
                      <a href="about.html">We Have</a>

                      <ul class="dropdown arrow-top">
                        <li><a href="{{route('product',7)}}">Books</a></li>
                        <li><a href="{{route('product',9)}}">Food</a></li>
                        <li><a href="{{route('product',8)}}">Cloth</a></li>
                      
                        
                      </ul>
                    </li>
                    <li><a href="{{route('donar_list')}}">Doner List</a></li>
            
              <?php
                 if($id){
              ?>
                    <li><a href="{{route('donate')}}">Donate</a></li><?php
                  }else{
                    ?>
                    <li><a href="{{route('registretion')}}">Donate</a></li><?php

                  }?>

                    <li><a href="{{route('contact')}}">Contact</a></li>
                  <?php
                       if($id){
                    ?>
                          
                    <li><a href="{{route('profile',$id)}}">Profile</a></li><?php
                  }?>


                    <li><a href="{{route('take')}}">Receiver</a></li>


                    <?php
              if($id){
                ?>
                <li><a href="{{route('user_logout')}}"><span class="d-inline-block bg-primary text-white btn btn-primary">Logout</span></a></li><?php
              }else{
                ?>
                <li><a href="{{route('registretion')}}"><span class="d-inline-block bg-primary text-white btn btn-primary">Registretion/Login</span></a></li><?php
              }


            ?> 
                    
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--slider-->
    <div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero1.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h1 class="font-secondary  font-weight-bold text-uppercase">Welcome to Donation Food</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero4.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Wellcome To Donation Book</h1>
            </div>
          </div>
        </div>
      </div> 
      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero6.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Wellcome To Donation Cloth</h1>
            </div>
          </div>
        </div>
      </div> 

       <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero2.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-6 text-center" data-aos="fade">
              <h1 class="font-secondary  font-weight-bold text-uppercase">Welcome to Donation Food</h1>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero4.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Wellcome To Donation Book</h1>
            </div>
          </div>
        </div>
      </div> 
      <div class="site-blocks-cover inner-page overlay" style="background-image: url({{asset('images/'.'hero8.jpg')}});" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-7 text-center" data-aos="fade">
              <h1 class="font-secondary font-weight-bold text-uppercase">Wellcome To Donation Cloth</h1>
            </div>
          </div>
        </div>
      </div> 
    </div>
    @yield('category')
    

    
  @yield('about')
    

 @yield('top_donar_year')

    
@yield('total_collection')

@yield('pepole_review')  
   

@yield('blog')


<!--
    <div class="py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6 text-center mb-3 mb-md-0">
            <h2 class="text-uppercase text-white mb-4" data-aos="fade-up">Try For Your Next Project</h2>
            <a href="#" class="btn btn-bg-primary font-secondary text-uppercase" data-aos="fade-up" data-aos-delay="100">Contact Us</a>
          </div>
        </div>
      </div>
    </div>

-->
    

    <footer class="site-footer bg-dark">
      <div class="container">
        

        <div class="row">
          <div class="col-md-4 mb-4 mb-md-0">
            <h3 class="footer-heading mb-4 text-white">About</h3>
            <p>This project is the most valuable in our local area.this project provide the donation the books ,cloths,fod for help the pepe.</p>
            <p><a href="#" class="btn btn-primary text-white px-4">Read More</a></p>
          </div>
          <div class="col-md-5 mb-4 mb-md-0 ml-auto">
            <div class="row mb-4">
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Quick Menu</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contacts</a></li>
                    <li><a href="#">Privacy</a></li>
                  </ul>
              </div>
              <div class="col-md-6">
                <h3 class="footer-heading mb-4 text-white">Free Templates</h3>
                  <ul class="list-unstyled">
                    <li><a href="#">HTML5 / CSS3</a></li>
                    <li><a href="#">Clean Design</a></li>
                    <li><a href="#">Responsive</a></li>
                    <li><a href="#">Multi Purpose Template</a></li>
                  </ul>
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
              <h3 class="footer-heading mb-4 text-white">Stay up to date</h3>
              <form action="#" class="d-flex footer-subscribe">
                <input type="text" class="form-control rounded-0" placeholder="Enter your email">
                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </form>
            </div>
            </div>
          </div>

          
          <div class="col-md-2">
            
            <div class="row">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Icons</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="#" class="pb-2 pr-2 pl-0"><span class="icon-facebook"></span></a>
                  <a href="#" class="p-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="p-2"><span class="icon-instagram"></span></a>
                  <a href="#" class="p-2"><span class="icon-vimeo"></span></a>

                </p>
              </div>
          </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved |Design|Developed By <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="#" target="_blank" >Nitesh and Masud Rana</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>

            
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
  <script src="{{asset('js/jquery-ui.js')}}"></script>
  <script src="{{asset('js/popper.min.js')}}"></script>
  <script src="{{asset('js/bootstrap.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.stellar.min.js')}}"></script>

  <script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
  <script src="{{asset('js/jquery.animateNumber.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>

  <script src="{{asset('js/main.js')}}"></script>

  
  </body>
</html>