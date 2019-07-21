<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CFG</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ URL::to('vendor/bootstrap/css/bootstrap.min.css')}}">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ URL::to('vendor/font-awesome/css/font-awesome.min.css')}}">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="{{ URL::to('css/fontastic.css')}}">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="{{ URL::to('css/grasp_mobile_progress_circle-1.0.0.min.css')}}">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="{{Url::to('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css')}}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{Url::to('css/style.violet.css')}}" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ URL::to('css/custom.css')}}">
    <!-- Favicon-->
    {{-- <link rel="shortcut icon" href="{{ URL::to('img/favicon.ico')}}"> --}}
    <link rel="shortcut icon" href="{{ URL::to('img/rm_logo.png')}}
   ">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]
      -->


      <script type="text/javascript" src="{{ URL::to('vendor/jquery/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('vendor/popper.js/umd/popper.min.js')}}"> </script>
    <script type="text/javascript" src="{{ URL::to('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('js/grasp_mobile_progress_circle-1.0.0.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
    <script type="text/javascript" src="{{Url::to('vendor/chart.js/Chart.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script type="text/javascript" src="{{ URL::to('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{Url::to('js/charts-custom.js')}}"></script>
    <!-- Main File-->
    <script type="text/javascript" src="{{ URL::to('js/front.js')}}"></script>


    <link href="{{ URL::to('css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
  </head>
  <body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/auth') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" >Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                            </div>
                        </div>

                       
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                   Login
                                </button>
                                <a href="{{ url('/register') }}">Register</a>

                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
  </body>
  <html>
