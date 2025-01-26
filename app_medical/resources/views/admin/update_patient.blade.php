<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <base href="/public">
  <style type="text/css">
    label
    {
        display: inline-block;
        width: 200px;
    }
  </style>
  <title>edoc-health</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="admin/assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="admin/assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="admin/assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="admin/assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="admin/assets/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" type="text/css" href="admin/assets/js/select.dataTables.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="admin/assets/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
</head>

<body class="with-welcome-text">


  



    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
    <div class="me-3">
      <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
        <span class="icon-menu"></span>
      </button>
    </div>
    <div>
      <a class="navbar-brand brand-logo" href="../index.html">
        <img src="../admin/assets/images/photo.jpg" alt="logo" />
      </a>
    </div>
  </div>



  <div class="navbar-menu-wrapper d-flex align-items-top bg-success">
    

    <ul class="navbar-nav ms-auto">
      
      <li class="nav-item d-none d-lg-block">
        <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
          <span class="input-group-addon input-group-prepend border-right">
            <span class="icon-calendar input-group-text calendar-icon"></span>
          </span>
          <input type="text" class="form-control">
        </div>
      </li>
      <li class="nav-item">
        <form class="search-form" action="#">
          <i class="icon-search"></i>
          <input type="search" class="form-control" placeholder="Search Here" title="Search here">
        </form>
      </li>
      

    

      <x-app-layout>

      </x-app-layout>



    </ul>
    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
      data-bs-toggle="offcanvas">
      <span class="mdi mdi-menu"></span>
    </button>
  </div>
</nav>


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">




      <!-- partial -->
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">

  <li class="nav-item">
      <a class="nav-link" href="{{url('home')}}">
      <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title"><font size="+0,5">Dashboard</font></span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('showdoctor')}}">
        <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title"><font size="+0,5">Manage Doctors</font></span>
        <i class="menu-arrow"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('add_doctor_view')}}">
        <i class="menu-icon mdi mdi-card-text-outline"></i>
        <span class="menu-title"><font size="+0,5">Add Doctors</font></span>
        <i class="menu-arrow"></i>
      </a>
    </li>


    <li class="nav-item">
      <a class="nav-link" href="{{url('showappointment')}}">
        <i class="menu-icon mdi mdi-table"></i>
        <span class="menu-title"><font size="+0,5">Appointments</font></span>
        <i class="menu-arrow"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('showpatient')}}">
      <i class="menu-icon mdi mdi-account-circle-outline"></i>
        <span class="menu-title"><font size="+0,5">Manage Patients</font></span>
        <i class="menu-arrow"></i>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{url('add_patient_view')}}">
        <i class="menu-icon mdi mdi-layers-outline"></i>
        <span class="menu-title"><font size="+0,5">Add Patients</font></span>
        <i class="menu-arrow"></i>
      </a>
    </li>
    


  </ul>
</nav>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-sm-12">
              <div class="home-tab">
                
                <div class="tab-content tab-content-basic">
                  <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                    <div class="row">
                      <div class="col-sm-12">

                      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-6">


                      <div class="container" style="padding-top: 10px; padding-left: 100px; padding-right: 0px;">


                      @if(session()->has('message'))

                      <div class="alert alert-success alert-dismissible">
                        
                        {{session()->get('message')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="close">&times;</button>
                      </div>

                      @endif


                      <form action="{{url('editpatient', $data->id)}}" method="POST">
                        @csrf
                        <div style="padding: 15px;">
                            <label><b>Patient's Surname:</b></label><br>
                            <input type="text" name="surname" size=50 value="{{$data->surname}}"><br>
                        </div>

                        <div style="padding: 15px;">
                            <label><b>Patient's First Name:</b></label><br>
                            <input type="text" name="name" size=50 value="{{$data->name}}"><br>
                        </div>

                        <div style="padding: 15px;">
                            <label><b>Patient's Email:</b></label><br>
                            <input type="email" name="email" size=50 value="{{$data->email}}"><br>
                        </div>

                        <div style="padding: 15px;">
                            <label><b>Date of Birth:</b></label><br>
                            <input type="date" name="date_birth"  style="width: 200px;" value="{{$data->date_birth}}"><br>
                        </div>

                        <div style="padding: 15px;">
                            
                            <label><b>Patient's Doctor:</b></label><br>
                            <select name="doctor" id="departement" class="custom-select">
              <option value="{{$data->doctor}}">{{$data->doctor}}</option>

              

              <option value="Salmi Youssra Médecin géneraliste">Salmi Youssra General Practitioner</option>
              <option value="Nassri Ali Médecin géneraliste">Nassri Ali General Practitioner</option>
              <option value="Mansouri Amine Médecin géneraliste">Mansouri Amine General Practitioner</option>

              
            </select>
                        </div>

                        <div style="padding: 15px;">
                            <label><b>Phone Number:</b></label><br>
                            <input type="tel" name="phone" size="50" value="{{$data->phone}}"><br>
                        </div>
                        
                        <div style="padding: 15px;">
                            
                          <input type="submit" value="Edit" style="height: 50px; width: 100px" class="btn btn-primary"><br>
                        </div>
                      </form>

                        
                      
                      </div>
                

            </div>



                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    
    <span class="float-none float-sm-end d-block mt-1 mt-sm-0 text-center">Copyright © 2025. All rights reserved.</span>
  </div>
</footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="admin/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
  <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="admin/assets/js/off-canvas.js"></script>
  <script src="admin/assets/js/hoverable-collapse.js"></script>
  <script src="admin/assets/js/template.js"></script>
  <script src="admin/assets/js/settings.js"></script>
  <script src="admin/assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="admin/assets/js/jquery.cookie.js" type="text/javascript"></script>
  <script src="admin/assets/js/dashboard.js"></script>
  <script src="admin/assets/js/proBanner.js"></script>
  <!-- <script src="../../admin/assets/js/Chart.roundedBarCharts.js"></script> -->
  <!-- End custom js for this page-->
</body>

</html>
