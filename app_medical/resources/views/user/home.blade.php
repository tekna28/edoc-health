<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>edoc-health</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

  <header>
    <div class="topbar">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 text-sm">
            <div class="site-info">
              <a href="#"><span class="mai-call text-primary"></span> +212 645678934</a>
              <span class="divider">|</span>
              <a href="#"><span class="mai-mail text-primary"></span> edoc.health@gmail.com</a>
            </div>
          </div>
        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">edoc</span>-health</a>


        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="{{url('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>

            @if(Route::has('login'))

            @auth
            <li class="nav-item">
              <a class="nav-link btn btn-primary" style="color: white;" href="{{url('myappointment')}}">My appointments</a>
            </li>

            <x-app-layout>
            </x-app-layout>

            @else

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Sign in</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Sign up</a>
            </li>

            @endauth
            @endif

          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>

  @if(session()->has('message'))

<div class="alert alert-success alert-dismissible">
  
  {{session()->get('message')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
</div>

@endif

  <div class="page-hero bg-image overlay-dark" style="background-image: url(../images/image5.avif);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">LET'S MAKE YOUR LIFE HEALTHIER</span>
        <div>
        <span class="subhead">FOR A</span>
        </div>
        <h1 class="display-4">Happy Life</h1>
        
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>Let's protect</span> your health</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1 style="color: #53BDA5;"><b><font size="+4">Welcome to your<br> health centre !</font></b></h1><br>
            <p class="text-grey mb-4"><font size="+2">You can book your medical appointments securely online and wait to be approved for your consultation, with real-time updates keeping you informed every step of the way.</font></p>
            <a href="about.html" class="btn btn-primary">Learn more</a>
          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../assets/img/bg-doctor.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->

@include('user.doctor')


@include('user.appointment')



  <footer class="page-footer">
    <div class="container">

      <p id="copyright">Copyright &copy; 2025. All rights reserved.</p>
    </div>
  </footer>

<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>