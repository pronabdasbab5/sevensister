<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin: Dashboard</title>

    <!-- Bootstrap -->
    <link href="{{ asset('vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('vendors/nprogress/nprogress.css') }}" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('vendors/datatables.net-bs/css/dataTables.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('build/css/custom.min.css') }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>

    <style type="text/css">
    .tree ul {
        padding-top: 20px; position: relative;
        
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .tree li {
        float: left; text-align: center;
        list-style-type: none;
        position: relative;
        padding: 20px 35px 0px 35px;
        
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    .tree li::before, .tree li::after{
        content: '';
        position: absolute; top: 0; right: 50%;
        border-top: 1px solid #ccc;
        width: 50%; height: 20px;
    }
    .tree li::after{
        right: auto; left: 50%;
        border-left: 1px solid #ccc;
    }
    .tree li:only-child::after, .tree li:only-child::before {
        display: none;
    }
    .tree li:only-child{ padding-top: 0;}
    .tree li:first-child::before, .tree li:last-child::after{
        border: 0 none;
    }

    .tree li:last-child::before{
        border-right: 1px solid #ccc;
        border-radius: 0 5px 0 0;
        -webkit-border-radius: 0 5px 0 0;
        -moz-border-radius: 0 5px 0 0;
    }
    .tree li:first-child::after{
        border-radius: 5px 0 0 0;
        -webkit-border-radius: 5px 0 0 0;
        -moz-border-radius: 5px 0 0 0;
    }

    .tree ul ul::before{
        content: '';
        position: absolute; top: 0; /*left: 60%;*/
        border-left: 1px solid #ccc;
        width: 0; height: 20px;
    }

    .tree li a{
        border: 1px solid #ccc;
        padding: 5px 25px;
        text-decoration: none;
        color: #666;
        font-family: arial, verdana, tahoma;
        /*font-size: 11px;*/
        display: inline-block;
        
        border-radius: 5px;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        
        transition: all 0.5s;
        -webkit-transition: all 0.5s;
        -moz-transition: all 0.5s;
    }

    </style>
    <style>.container-tree{width: 500%;overflow-x: auto;white-space: nowrap;}.flex{display: flex;justify-content: space-around;}.flex:nth-child(1){justify-content: center!important;}.flex h3{margin: 0.7em;border: 1px solid #555;padding: .2em;}</style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col" style="height: 100%">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="{{ route('home') }}" class="site_title"><span>Seven Sister</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <!-- <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div> -->
              <center>
                  <div class="profile_info">
                    <span>Welcome To,</span>
                    <h2>{{ Auth::user()->name }}</h2>
                  </div>
              </center>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li>
                    <a href="{{ route('home') }}"><i class="fa fa-home"></i> Home </a>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Manage Jeep Booking <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_jeep_booking') }}">New Booking</a></li>
                        <li><a href="{{ route('complete_jeep_booking') }}">Complete Booking</a></li>
                        <li><a href="{{ route('cancel_jeep_booking') }}">Cancel Booking</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Manage Boat Booking <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_boat_booking') }}">New Booking</a></li>
                        <li><a href="{{ route('accept_boat_booking') }}">Accept Booking</a></li>
                        <li><a href="{{ route('cancel_boat_booking') }}">Cancel Booking</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Package Booking <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_package_booking') }}">New Booking</a></li>
                        <li><a href="{{ route('accept_package_booking') }}">Accept Booking</a></li>
                        <li><a href="{{ route('cancel_package_booking') }}">Cancel Booking</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Manage Package <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_package') }}">New Package</a></li>
                        <li><a href="{{ route('all_package') }}">All Package</a></li>
                    </ul>
                  </li>
                  <li>
                    <a><i class="fa fa-edit"></i> Configuration <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a>Manage Price<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('new_price') }}">New Price</a></li>
                                <li><a href="{{ route('all_price') }}">All Price</a></li>
                            </ul>
                        </li>
                        <li><a>Manage Jeep<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                {{-- <li><a href="{{ route('new_jeep') }}">New Jeep</a></li> --}}
                                <li><a href="{{ route('all_jeep') }}">Edit Capacity</a></li>
                            </ul>
                        </li>
                        <li><a>Manage Timing<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('new_timing') }}">New Timing</a></li>
                                <li><a href="{{ route('all_timing') }}">All Timing</a></li>
                            </ul>
                        </li>
                        <li><a>Manage Park<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                {{-- <li><a href="{{ route('new_park') }}">New Park</a></li> --}}
                                <li><a href="{{ route('all_park') }}">All Park</a></li>
                            </ul>
                        </li>
                        <li><a>Manage Range<span class="fa fa-chevron-down"></span></a>
                            <ul class="nav child_menu">
                                <li><a href="{{ route('new_range') }}">New Range</a></li>
                                <li><a href="{{ route('all_range') }}">All Range</a></li>
                            </ul>
                        </li>
                    </ul>
                  </li> 
                  <li>
                    <a><i class="fa fa-edit"></i> Blog Posts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_post') }}">New Post</a></li>
                        <li><a href="{{ route('all_post') }}">All Posts</a></li>
                    </ul>
                  </li> 
                  <li>
                    <a><i class="fa fa-edit"></i> YouTube Videos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="{{ route('new_video') }}">New Video</a></li>
                        <li><a href="{{ route('all_video') }}">All Videos</a></li>
                    </ul>
                  </li> 
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="forgot_password.php"> Forgot Password</a></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                  </ul>
                </li>

                @include('admin.layouts.notification');
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        @yield('content')
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Developed By <a href="http://webinfotech.net.in/" target="_blank">Web InfoTech</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('vendors/jquery/dist/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script src="{{ asset('vendors/fastclick/lib/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script src="{{ asset('vendors/nprogress/nprogress.js') }}"></script>
    <!-- Chart.js -->
    <script src="{{ asset('vendors/Chart.js/dist/Chart.min.js') }}"></script>
    <!-- jQuery Sparklines -->
    <script src="{{ asset('vendors/jquery-sparkline/dist/jquery.sparkline.min.js') }}"></script>
    <!-- Flot -->
    <script src="{{ asset('vendors/Flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.time.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('vendors/Flot/jquery.flot.resize.js') }}"></script>
    <!-- Flot plugins -->
    <script src="{{ asset('vendors/flot.orderbars/js/jquery.flot.orderBars.js') }}"></script>
    <script src="{{ asset('vendors/flot-spline/js/jquery.flot.spline.min.js') }}"></script>
    <script src="{{ asset('vendors/flot.curvedlines/curvedLines.js') }}"></script>
    <!-- DateJS -->
    <script src="{{ asset('vendors/DateJS/build/date.js') }}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- Datatables -->
    <script src="{{ asset('vendors/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js') }}"></script>
    <script src="{{ asset('vendors/datatables.net-scroller/js/dataTables.scroller.min.js') }}"></script>
    <script src="{{ asset('vendors/jszip/dist/jszip.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/pdfmake.min.js') }}"></script>
    <script src="{{ asset('vendors/pdfmake/build/vfs_fonts.js') }}"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="{{ asset('build/js/custom.min.js') }}"></script>

   
   
    
    <!--<script src="{{ asset('/vendor/unisharp/laravel-ckeditor/adapters/jquery.js') }}"></script>-->
    <script src="{{ asset('vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
        <!-- bootstrap-datetimepicker -->    
    <script src="{{ asset('vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
     
  
    
    @yield('script')
  </body>
</html>