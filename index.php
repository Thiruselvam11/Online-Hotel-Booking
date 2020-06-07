<?php
session_start()
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online Hotel Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
       <link href="resv.css" type="text/css" rel="stylesheet">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://osass.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page">
      <!-- Main Navbar-->
      <header class="header">
        <nav class="navbar">
          <!-- Search Box-->
          <div class="search-box">
            <button class="dismiss"><i class="icon-close"></i></button>
            <form id="searchForm" action="#" role="search">
              <input type="search" placeholder="What are you looking for..." class="form-control">
            </form>
          </div>
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <!-- Navbar Header-->
              <div class="navbar-header">
                <!-- Navbar Brand --><a href="index.html" class="navbar-brand d-none d-sm-inline-block">
                  <div class="brand-text d-none d-lg-inline-block"><span>Thambi Hotel</span> <strong>Dashboard</strong></div>
                  <div class="brand-text d-none d-sm-inline-block d-lg-none"><strong></strong></div></a>
                <!-- Toggle Button--><a id="toggle-btn" href="#" class="menu-btn active"><span></span><span></span><span></span></a>
              </div>
              </div>
              <div class="btn-group" style="margin-left:53%;">
            
               <button class="glow-on-hover1" type="button" >HOME</button>
         
              <button class="glow-on-hover2" type="button" href="contect.php">CONTECT</button>
          
               <button class="glow-on-hover3" type="button" >ABOUR US</button>
          
            <a class="btn-correct" href="login.php"> <button class="glow-on-hover4" type="button">LOGIN</button>
                  </a>
             
            </div>
            </div>
              </nav>
              <!-- Navbar Menu -->
              
      </header>
     
          <!-- Dashboard Counts Section-->
          <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
              <div class="row bg-white has-shadow">
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <img src="grill%20chicken.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                    <div class="title"><span>Grill Chicken</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 25%; height: 4px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-violet"></div>
                      </div>
                    </div>
                    <div class="number"><strong>95%</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <img src="sandwich.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                    <div class="title"><span>Sandwich</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 70%; height: 4px;" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-red"></div>
                      </div>
                    </div>
                    <div class="number"><strong>70%</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <img src="fried%20rice.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                    <div class="title"><span>Fried Rice</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 40%; height: 4px;" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-green"></div>
                      </div>
                    </div>
                    <div class="number"><strong>40%</strong></div>
                  </div>
                </div>
                <!-- Item -->
                <div class="col-xl-3 col-sm-6">
                  <div class="item d-flex align-items-center">
                    <img src="ice%20cream.jfif" style="width: 70px; height: 70px; border-radius: 20px;">
                    <div class="title"><span>Ice Cream</span>
                      <div class="progress">
                        <div role="progressbar" style="width: 50%; height: 4px;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" class="progress-bar bg-orange"></div>
                      </div>
                    </div>
                    <div class="number"><strong>50%</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <!-- Dashboard Header Section    -->
          <section class="dashboard-header">
            <div class="container-fluid">
              <div class="row">
                <!-- Statistics -->
                <div class="statistics col-lg-3 col-12">
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <img src="food.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                   
                    <div class="text" style="padding-left: 20px;"><strong>Food</strong><br></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                     <img src="room1.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                    <div class="text" style="padding-left: 20px;"><strong>Room</strong><br></div>
                  </div>
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <img src="taxi1.jpg" style="width: 70px; height: 70px; border-radius: 20px;">
                   
                    <div class="text" style="padding-left: 20px; color: orange;" ><strong>Taxi booking</strong></div>
                  </div>
                </div>
                <!-- Line Chart            -->
                <div class="chart col-lg-6 col-12">
                  <div class="line-chart bg-white d-flex align-items-center justify-content-center has-shadow">
                    <canvas id="lineCahrt"></canvas>
                  </div>
                </div>
                <div class="chart col-lg-3 col-12">
                  <!-- Bar Chart   -->
                  <div class="bar-chart has-shadow bg-white">
                    <div class="title"><strong class="text-violet">95%</strong><br><small>Current Server Uptime</small></div>
                    <canvas id="barChartHome"></canvas>
                  </div>
                  <!-- Numbers-->
                  <div class="statistic d-flex align-items-center bg-white has-shadow">
                    <div class="icon bg-green"><i class="fa fa-line-chart"></i></div>
                    <div class="text"><strong>99.9%</strong><br><small>Success Rate</small></div>
                     
                  </div>
                </div>
              </div>
            </div>
              
          </section>
             <img src="grill2.jpg" style="margin-left: 200px; margin-right: 0px; width: 650px; height: 350px; border-radius: 20px; margin-bottom: 150px;">
          <!-- Projects Section-->
     
             
          <!-- Client Section-->
         
          <!-- Page Footer-->
          <footer class="main-footer" style="margin-top:60%;">
            <div class="container-fluid">
              <div class="row">
                <div class="col-sm-6">
                  <p>Thambi hotel is started from &copy; 2013</p>
                </div>
                <div class="col-sm-6 text-right">
                  <p>Design by <a href="https://bootstrapious.com/p/admin-template" class="external">MP</a></p>
                  <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                </div>
              </div>
            </div>
          </footer>
        </div>
    
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper.js/umd/popper.min.js"> </script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="js/charts-home.js"></script>
    <!-- Main File-->
    <script src="js/front.js"></script>
  </body>
</html>