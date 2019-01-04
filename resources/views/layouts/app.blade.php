
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>AksaraKu - Admin</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="{{asset('css/zabuto_calendar.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>

 
</head>

<body>
  <section id="container">
    
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="index.html" class="logo"><b>AKSARA<span>KU</span></b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
                   
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="img/logo.jpg" class="img-circle" width="80"></a></p>
          <h5 class="centered">aksaraku.com</h5>
          <li class="mt">
            <a href="{{url('home')}}">
              <i class="fa fa-home"></i>
              <span>HOME</span>
              </a>
              <a href="{{url('datauser')}}">
              <i class="fa fa-user"></i>
              <span>DATA USER</span>
              </a>
              <a href="{{url('send')}}">
              <i class="fa fa-send"></i>
              <span>SEND</span>
              </a>
              <a href="{{url('buku')}}">
              <i class="fa fa-book"></i>
              <span>BUKU</span>
              </a>
              <!--<a href="{{url('pembelian')}}">
              <i class="fa fa-money"></i>
              <span>PEMBELIAN</span> -->
              <a href="{{url('logout')}}">
                <i class="fa fa-out"></i>
                <span>LOGOUT</span>
              </a>

          </li>
          
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
            @yield('content') 
        </div>
        <!-- /row -->
      </section>
    </section>
   
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    
  </script>
  
  </script>
</body>

</html>
