

@extends('Extend.plane')
@section('page')

    {{-- @endsection('page') --}}
    <head><meta name="csrf-token" content="{{ csrf_token() }}">

    </head>
    <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
        <div class="side-navbar-wrapper">
            <!-- Sidebar Header    -->
            <div class="sidenav-header d-flex align-items-center justify-content-center">
                <!-- User Info-->
                <div class="sidenav-header-inner text-center">
                    <h2 class="h5" style=" text-transform:none;">{{ Auth::user()->name }}</h2>
                    {{-- {{ Auth::user()->name }} --}}
                </div>
                <!-- Small Brand information, appears on minimized sidebar-->
                <div class="sidenav-header-logo jersey"><a href="#" class="brand-small text-center"><b>{{ Auth::user()->name[0] }}</b></a></div>
            </div>
            <!-- Sidebar Navigation Menus-->
            <div class="main-menu">
                <h5 class="sidenav-heading">Main</h5>
                <ul id="side-main-menu" class="side-menu list-unstyled active">


                    <li><a href="/community/" class="scroll"> <i class="icon-home"></i>DashBoard</a></li>
                    <li><a href="/community/videos"> <i class="fa fa-bar-chart"></i>View Videos</a></li>
                    <li><a href="#"> <i class="fa fa-upload"></i>Upload Batch File</a></li>


                    {{-- <li class="@if(Route::is('health')) active @endif"><a id="chart" href="#"> <i class="icon-grid"></i>Health                             </a></li> --}}



                </ul>
            </div>

        </div>
    </nav>
    <div class="page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
                <div class="container-fluid">
                    <div class="navbar-holder d-flex align-items-center justify-content-between">
                        <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="index.html" class="navbar-brand">
                                <div class="brand-text d-none d-md-inline-block"><strong class="text-light" style=" text-transform:none;">Code For Good</strong></div></a></div>
                        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">

                            <!-- Log out-->
                            <li class="nav-item"><a href="/logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Breadcrumb-->


        <!-- Page Header-->


        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->


            <!-- Main content -->
            <div class="content">
                <div class="container-fluid">
                    <br>
                    @yield('content')
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->





        {{-- <footer class="main-footer">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <p>CFG &copy; 2019</p>
              </div>
              <div class="col-sm-6 text-right">

              </div>
            </div>
          </div>
        </footer> --}}
    </div>
    <!-- JavaScript files-->

    </body>
@stop