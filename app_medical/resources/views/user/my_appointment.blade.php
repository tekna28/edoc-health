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
            <li class="nav-item">
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
            <li class="nav-item active">
              <a class="nav-link btn btn-primary" style="color: white;" href="{{url('myappointment')}}">Mes rendez-vous</a>
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



<div align="center" style="padding: 70px;">
<table>
    <tr style="background-color: #53BDA5;">
        <th style="padding: 10px; font-size: 20px">Doctor</th>
        <th style="padding: 10px; font-size: 20px">Date of Appointment</th>
        <th style="padding: 10px; font-size: 20px">Message</th>
        <th style="padding: 10px; font-size: 20px">Status</th>
        <th style="padding: 10px; font-size: 20px">Cancel Appointment</th>
    </tr>

    @foreach($appoint as $appoints)

    <tr align="center">
        <td style="padding: 10px; font-size: 15px">{{$appoints->doctor}}</td>
        <td style="padding: 10px; font-size: 15px">{{$appoints->date_rdv}}</td>
        <td style="padding: 10px; font-size: 15px">{{$appoints->message}}</td>
        <td style="padding: 10px; font-size: 15px">{{$appoints->status}}</td>
        <td class="btn btn-danger" style="padding: 10px; font-size: 15px" width="250" onclick="return confirm('Êtes-vous sûr de vouloir annuler votre rendez-vous ?')" href="{{url('cancel_appoint', $appoints->id)}}">Cancel</td>
        
    </tr>

    @endforeach

</table>

</div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>