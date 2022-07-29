<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}} </title>
    <link rel="icon" type="image/x-icon" href="{{Path::asset('images/cloudAppImage.png')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{Path::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/assets/css/pages/coming-soon/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
    <style>
        li {
            font-size: 13px;
        }
    </style>

</head>

<body>
    <div class="container">
        <div class="row" style="width: 100%; padding: 30px 0px;">
            <div class="col-md-12 " style="margin-top: 50px; margin-bottom: 50px;">
                <h1 class="text-primary">File changes</h1>
                <p>Preview files changes and proceed!</p>
            </div>
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <td>#</td>
                            <td>File</td>
                            <td>Section</td>
                            <td>Time</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <form action="{{route('publishToApi')}}" method="post"> @csrf
                        <tbody>
                            @foreach(session()->get('files') as $file)
                            <tr>
                                <td>
                                    <div class="n-chk">
                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                            <input type="checkbox" name="update[]" value="{{$file[0]}}" class="new-control-input" checked>
                                            <span class="new-control-indicator"></span><span class="new-chk-content"> &nbsp;</span>
                                        </label>
                                    </div>
                                </td>
                                <th>{{$file[0]}}</th>
                                <td>{{$file[2]}}</td>
                                <td>{{\Carbon\Carbon::parse($file[1])->diffForHumans()}}</td>
                                <td>
                                    <a href="#" class="btn btn-success btn-xs" onclick="window.open('{{$file[0]}}', 'newwindow', 'width=1300, height=720'); return false;">

                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                            <circle cx="12" cy="12" r="3"></circle>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                   
                </table>
                <br>
            </div>
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="row">
                    <div class="col-md-4">
                        <button id="block-page"    type="submit" class="btn btn-success btn-lg" style="display: block; margin: auto; width:70%">
                            Publish to CSV
                        </button>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('clearPreview')}}" class="btn btn-danger btn-lg" style="display: block; margin: auto; width:70%">
                            Clear all changes
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a href="{{route('home')}}" class="btn btn-primary btn-lg" style="display: block; margin: auto; width:70%">
                            Go Back Home
                        </a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/pages/coming-soon/coming-soon.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>

    <script>
        $('#block-page').on('click', function() {
            $.blockUI({
                message: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg> <br><Br> <h1 class="text-success">Publishing To CSV...</h1>',
                fadeIn: 800,
                timeout: 5000, //unblock after 2 seconds
                overlayCSS: {
                    backgroundColor: '#1b2024',
                    opacity: 0.8,
                    zIndex: 1200,
                    cursor: 'wait'
                },
                css: {
                    border: 0,
                    color: '#fff',
                    zIndex: 1201,
                    padding: 0,
                    backgroundColor: 'transparent'
                }
            });
        });
        </script>

</body>

</html>