
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="icon" type="image/x-icon" href="{{Path::asset('admin/assets/img/favicon.ico')}}"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{Path::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/assets/css/pages/error/style-503.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
</head>
<body class="error503 text-center">
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 mr-auto mt-5 text-md-left text-center">
                <a href="index.html" class="ml-md-5">
                    <img alt="image-503" src="{{Path::asset('images/cloudAppImage.png')}}"  class="theme-logo">
                </a>
            </div>
        </div>
    </div>

    <div class="container-fluid error-content">
        <div class="">
           @yield('error')
            <a href="{{route('home')}}" class="btn btn-secondary mt-5">Home</a>
        </div>
    </div>
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
</body>
</html>