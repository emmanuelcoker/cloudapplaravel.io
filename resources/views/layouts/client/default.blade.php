<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>{{env('APP_NAME')}} </title>
    <link rel="icon" type="image/x-icon" href="{{Path::asset('images/cloudAppImage.png')}}" />
    <link href="{{Path::asset('admin/assets/css/loader.css')}}" rel="stylesheet" type="text/css" />
    <script src="{{Path::asset('admin/assets/js/loader.js')}}"></script>
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{Path::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">

    @if(!Auth::user()->dark_mode)
    <!-- implement color theme for light mode -->
    <style>
        :root{
            --themeColor1: #fff;
            --themeColor2: #445ede;
            --themeColor3: #515365;
            /* for sidebar nav  links    */
            --themeColor4: #3b3f5c;
            /* profile info   */
            --themeColor5: #fafafa;
            --themeColor6: #304aca;
            --dashboardCard : #fff;
            --blackText: #0e1726;
            --fullBackground:#fafafa;
            --imgBorder:#e0e6ed;
            --inputBackground: transparent;
            --inputColor: #888ea8;
            --tabs:#f1f2f3;
            --tabsColor:#000;
            --tableDiv: #fff;
            --tableDivBorder: #e0e6ed;
            --siderBarRightBorder:#e0e6ed;
            --tableTitleArea:#ebedf2;
            --tableTitleColor1: #00000099;
            --tableTitleColor2: #513565;
            --tableFontColor:#888ea8;
        }
    </style>
    @endif

    @if(Auth::user()->dark_mode)
    <!-- implement color theme for dark mode -->
    <style>
        :root{
            --themeColor1 : #060818;
            --themeColor2 : #1a1c2d;
            --themeColor3 : #506690;
            --themeColor4 : #888ea8;
            --themeColor5 : #1a1c2d;
            --themeColor6 : #506690;
            --dashboardCard : #0e1726;
            --blackText: whitesmoke;
            --fullBackground:#060818;
            --imgBorder:#3b3f5c;
            --inputBackground: #1a1c2d;
            --inputColor: whitesmoke;
            --tabs:#191e3a;
            --tabsColor:#888ea8;
            --tableFontColor:#888ea8;
            --tableDiv:#0e1726;
            --tableDivBorder: #3b3f5c;
            --siderBarRightBorder: #1a1c2d;
            --tableTitleArea: #060818; /* #506690 */
            --tableTitleColor1: whitesmoke;
            --tableTitleColor2: #007bff;
        }
    </style>
    @endif


    <link href="{{Path::asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>

    <style>
        .fq-header-wrapper {
            padding: 0 0;
            overflow: hidden;
        }

        .fq-header-wrapper h1 {
            font-size: 33px;
            font-weight: 700;
            margin-bottom: 8px;
            color: rgba(0, 0, 0, 0.6);
        }

        .fq-header-wrapper p {
            font-size: 14px;
            margin-bottom: 0px;
            line-height: 25px;
        }
    </style>
    @yield('css')

    @livewireStyles
</head>

<body class="sidebar-noneoverflow">
    <!-- BEGIN LOADER -->
    <div id="load_screen">
        <div class="loader">
            <div class="loader-content">
                <div class="spinner-grow align-self-center"></div>
            </div>
        </div>
    </div>
    <!--  END LOADER -->



    <!--  BEGIN NAVBAR  -->
    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="">
                        <img src="{{Path::asset('images/'.$setting->company_logo)}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="" class="nav-link"> <small>Admin</small> </a>
                </li>
                <li class="nav-item toggle-sidebar">
                    <a href="javascript:void(0);" class="sidebarCollapse" data-placement="bottom"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                            <line x1="8" y1="6" x2="21" y2="6"></line>
                            <line x1="8" y1="12" x2="21" y2="12"></line>
                            <line x1="8" y1="18" x2="21" y2="18"></line>
                            <line x1="3" y1="6" x2="3" y2="6"></line>
                            <line x1="3" y1="12" x2="3" y2="12"></line>
                            <line x1="3" y1="18" x2="3" y2="18"></line>
                        </svg></a>
                </li>
            </ul>
            @if(Session::has('publish'))
            <script>
                swal("Published", "{!! Session::get('publish') !!}", "success");
            </script>
            @endif
            @if(Session::has('onChanges'))
            <script>
                swal("No changes", "{!! Session::get('onChanges') !!}", "success");
            </script>
            @endif
            @if(Session::has('clear'))
            <script>
                swal("Cleared changes", "{!! Session::get('clear') !!}", "success");
            </script>
            @endif
            @if(Session::has('zip'))
            <script>
                swal("Zipped", "{!! Session::get('zip') !!}", "success");
            </script>
            @endif
            @if(Session::has('display'))
            <script>
                swal("Display Changed", "{!! Session::get('display') !!}", "success");
            </script>
            @endif
            @if(Session::has('permission'))
            <script>
                swal("No Permission", "{!! Session::get('permission') !!}", "info");
            </script>
            @endif
            <ul class="navbar-item flex-row navbar-dropdown">

            </ul>

            <ul class="navbar-item flex-row search-ul">

            </ul>

            <ul class="navbar-item flex-row navbar-dropdown">

                @if(Permission::check('visibility_change_display'))
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{Path::asset('images/tv.jpg')}}" class="flag-width" alt="flag"><span> {{session()->get('tv')['name']}}</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="langDropdown">
                            @foreach($tvs as $tv)
                            @if($tv->id !== session()->get('tv')['id'] && $tv->is_active )
                            <a class="dropdown-item" data-img-value="de" data-value="{{$tv['name']}}" href="{{route('changeTv', $tv['id'])}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg> &nbsp; {{$tv['name']}}</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                </li>
                @endif

                <li class="nav-item dropdown message-dropdown">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-send">
                            <line x1="22" y1="2" x2="11" y2="13"></line>
                            <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                        </svg>
                        <span class="badge badge-danger"></span>
                    </a>
                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                        <div class="" style="background:#28a745; border-radius: 10px; ">
                            <a class="dropdown-item" id="block-page" href="{{route('publish')}}">
                                <div class="">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name" style="color:white">Publish</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @if($setting->to_csv)
                        <div class="" style="background:#28a745; border-radius: 10px; ">
                            <a class="dropdown-item" href="{{route('publish_to_api')}}">
                                <div class="">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name" style="color:white">Publish to API</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                        @if($setting->to_zip)
                        <div class="" style="background:#28a745; border-radius: 10px; ">
                            <a class="dropdown-item" id="block-page1" href="{{route('publish_to_zip')}}">
                                <div class="">
                                    <div class="media">
                                        <div class="media-body">
                                            <div class="">
                                                <h5 class="usr-name" style="color:white" ; ">Publish to ZIP</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endif
                    </div>
                </li>

                <li class=" nav-item dropdown message-dropdown">
                                                    <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="messageDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                                            <circle cx="12" cy="12" r="3"></circle>
                                                        </svg>
                                                        <span class="badge badge-danger"></span>
                                                    </a>
                                                    <div class="dropdown-menu p-0 position-absolute" aria-labelledby="messageDropdown">
                                                        <div class="" style="background:#28a745; border-radius: 10px; ">
                                                            <a class="dropdown-item" id="block-page" onclick="window.open('{{Variables::tvPath($data = null)}}', 'newwindow', 'width=1300, height=720'); return false;">
                                                                <div class="">
                                                                    <div class="media">
                                                                        <div class="media-body">
                                                                            <div class="">
                                                                                <h5 class="usr-name" style="color:white">View Live Page</h5>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                </li>





                <li class="nav-item dropdown user-profile-dropdown  order-lg-0 order-1">
                    <a href="javascript:void(0);" class="nav-link dropdown-toggle user" id="userProfileDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                            <circle cx="12" cy="12" r="3"></circle>
                            <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                        </svg>
                    </a>
                    <div class="dropdown-menu position-absolute" aria-labelledby="userProfileDropdown">
                        <div class="user-profile-section">
                            <div class="media mx-auto">
                                <img src="{{Path::asset('images/'.$setting->company_logo)}}" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <small>
                                        <h5>{{Auth::user()->name}}</h5>
                                        <h5 class="text-primary" style="font-size:8px"> {{Auth::user()->role->name}}</h5>
                                        <small>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown-item">
                            <a href="{{route('profile.index')}}">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg> <span>My Profile</span>
                            </a>
                        </div>

                        <div class="dropdown-item">
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
                                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                    <polyline points="16 17 21 12 16 7"></polyline>
                                    <line x1="21" y1="12" x2="9" y2="12"></line>
                                </svg> <span>Log Out</span>
                            </a>
                        </div>

                        <div class="dropdown-item" style="display:flex; justify-content: center; align-items: center; text-align: center; padding-top:20px">
                        <div>
                        <span style="display:block;  margin:0px auto 10px auto;">Dark Mode is @if(Auth::user()->dark_mode) On @else Off @endif</span>
                        <label class="switch s-icons s-outline  s-outline-dark  mb-4 mr-2"  style="display:block; margin:auto">
                                                <input id="dark_mode" type="checkbox" @if(Auth::user()->dark_mode) checked @endif>
                                                <span class="slider round"></span>
                                            </label>
                        </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>
    <!--  END NAVBAR  -->

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class="sidebar-wrapper sidebar-theme">

            <nav id="sidebar">
                <div class="profile-info" style="padding-bottom: 20px;">
                    <figure class="user-cover-image"></figure>
                    <div style="position:relative; top:-83px; left:0px; width: 260px; height: 100px; background: url('{{Path::asset('images/'.$setting->menuBackground)}}') no-repeat center/cover;"></div>
                    <div class="user-info" style="margin-top: -90px; ">
                        <img src="{{Path::asset('images/'.$setting->company_logo)}}" alt="avatar">
                        <h6 class="" style="color:var(--themeColor4)">{{$setting->company_name}}</h6>
                        <p style="color:black; display:block;"> <span class="text-center text-success">{{session()->get('tv')['name']}}</span></p>
                    </div>
                </div>

                <div class="shadow-bottom" style="display: block; margin-top: -40px;"></div>
                <ul class="list-unstyled menu-categories" id="accordionExample">
                    <li class="menu active">
                        <a href="{{route('home')}}" aria-expanded="true" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>
                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li>


                    @if(Permission::check('visibility_location'))
                    <li class="menu menu-heading" style="margin-top: 20px">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>Display Management</span></div>
                    </li>

                    <li class="menu">
                        <a href="{{route('location.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                <span>Locations</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    <li class="menu menu-heading">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>Module Management</span></div>
                    </li>


                    <!-- <li class="menu">
                        <a href="{{route('home')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg>

                                <span>Dashboard</span>
                            </div>
                        </a>
                    </li> -->

                    @if(Permission::check('visibility_media'))
                    <li class="menu">
                        <a href="{{route('media.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay">
                                    <path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
                                    <polygon points="12 15 17 21 7 21 12 15"></polygon>
                                </svg>
                                <span>Media Content</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if($setting->show_banner == true && Permission::check('visibility_banner'))
                    <li class="menu">
                        <a href="{{route('banner.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg>
                                <span>Banner Content</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if($setting->show_logo == true && Permission::check('visibility_logo'))
                    <li class="menu">
                        <a href="{{route('logo.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-pocket">
                                    <path d="M4 3h16a2 2 0 0 1 2 2v6a10 10 0 0 1-10 10A10 10 0 0 1 2 11V5a2 2 0 0 1 2-2z"></path>
                                    <polyline points="8 10 12 14 16 10"></polyline>
                                </svg>
                                <span>Logo Content</span>
                            </div>
                        </a>
                    </li>
                    @endif



                    @if($setting->show_template == true && Permission::check('visibility_template'))
                    <li class="menu">
                        <a href="{{route('template.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
                                    <rect x="3" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="3" width="7" height="7"></rect>
                                    <rect x="14" y="14" width="7" height="7"></rect>
                                    <rect x="3" y="14" width="7" height="7"></rect>
                                </svg>
                                <span>Template Layout</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if($setting->show_company_branding == true && Permission::check('visibility_branding'))
                    <li class="menu">
                        <a href="{{route('branding.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>

                                <span>Dashboard Branding</span>
                            </div>
                        </a>
                    </li>
                    @endif






                    @if($setting->show_announcement == true && Permission::check('visibility_annouce'))
                    <li class="menu">
                        <a href="{{route('announcement.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-volume-2">
                                    <polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"></polygon>
                                    <path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"></path>
                                </svg>
                                <span>{{$tab->announcement}}</span>
                            </div>
                        </a>
                    </li>
                    @endif







                    @if($setting->show_rate == true && Permission::check('visibility_rate'))
                    <li class="menu">
                        <a href="{{route('rates.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>Today's Rate</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if($setting->show_news == true && Permission::check('visibility_news'))
                    <li class="menu">
                        <a href="{{route('news.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layout">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="3" y1="9" x2="21" y2="9"></line>
                                    <line x1="9" y1="21" x2="9" y2="9"></line>
                                </svg>
                                <span>News Updates</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if($setting->show_clock == true && Permission::check('visibility_clock'))
                    <li class="menu">
                        <a href="{{route('clock.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-watch">
                                    <circle cx="12" cy="12" r="7"></circle>
                                    <polyline points="12 9 12 12 13.5 13.5"></polyline>
                                    <path d="M16.51 17.35l-.35 3.83a2 2 0 0 1-2 1.82H9.83a2 2 0 0 1-2-1.82l-.35-3.83m.01-10.7l.35-3.83A2 2 0 0 1 9.83 1h4.35a2 2 0 0 1 2 1.82l.35 3.83"></path>
                                </svg>
                                <span>Clock features</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if($setting->show_training == true && Permission::check('visibility_training'))
                    <li class="menu">
                        <a href="{{route('training.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                                <span>{{$tab->training}}</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(Permission::check('visibility_calendar'))
                    <li class="menu">
                        <a href="{{route('calender.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="16" y1="2" x2="16" y2="6"></line>
                                    <line x1="8" y1="2" x2="8" y2="6"></line>
                                    <line x1="3" y1="10" x2="21" y2="10"></line>
                                </svg>
                                <span>Schedule Calendar</span>
                            </div>
                        </a>
                    </li>
                    @endif




                    @if(Permission::check('visibility_activity_log'))

                    <li class="menu menu-heading" style="margin-top: 20px">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>Logs & Activities</span></div>
                    </li>


                    <li class="menu">
                        <a href="{{route('activities')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitch">
                                    <path d="M21 2H3v16h5v4l4-4h5l4-4V2zm-10 9V7m5 4V7"></path>
                                </svg>
                                <span>Activity Logs</span>
                            </div>
                        </a>
                    </li>
                    @endif




                    @if(Permission::check('visibility_manage_users'))
                    <li class="menu menu-heading" style="margin-top: 20px">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>User Management</span></div>
                    </li>


                    <li class="menu">
                        <a href="{{route('users.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                <span>Users</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    <li class="menu menu-heading" style="margin-top: 20px">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>Support & Assistance </span></div>
                    </li>

                    @if(Permission::check('visibility_help'))
                    <li class="menu">
                        <a href="{{route('support.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-at-sign">
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-3.92 7.94"></path>
                                </svg>
                                <span>Help Desk</span>
                            </div>
                        </a>
                    </li>
                    @endif


                    @if(Permission::check('visibility_faq'))
                    <li class="menu">
                        <a href="{{route('settings.faq')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span>FAQs</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(Permission::check('visibility_tutorials'))
                    <li class="menu">
                        <a href="{{route('settings.tutorial')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                                <span>Tutorials</span>
                            </div>
                        </a>
                    </li>
                    @endif

                    @if(Permission::check('visibility_plans'))
                    <li class="menu">
                        <a href="{{route('plans')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>Upgrade Plan</span>
                            </div>
                        </a>
                    </li>
                    @endif




                    @if(Permission::check('global_setting'))
                    <li class="menu menu-heading" style="margin-top: 20px">
                        <div class="heading"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg><span>Global Management</span></div>
                    </li>

                    <li class="menu">
                        <a href="{{route('settings.index')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>
                                <span>Control Panel</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('settings.faq')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-help-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"></path>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span>Faq Management</span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="{{route('settings.tutorial')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>
                                <span>Tutorial Management</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{route('permission')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-triangle">
                                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
                                    <line x1="12" y1="9" x2="12" y2="13"></line>
                                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                                </svg>
                                <span>User Permission</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{route('settings.plan')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign">
                                    <line x1="12" y1="1" x2="12" y2="23"></line>
                                    <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
                                </svg>
                                <span>Plans</span>
                            </div>
                        </a>
                    </li>

                    <li class="menu">
                        <a href="{{route('logs.login')}}" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-key">
                                    <path d="M21 2l-2 2m-7.61 7.61a5.5 5.5 0 1 1-7.778 7.778 5.5 5.5 0 0 1 7.777-7.777zm0 0L15.5 7.5m0 0l3 3L22 7l-3-3m-3.5 3.5L19 4"></path>
                                </svg>
                                <span>Client Login History</span>
                            </div>
                        </a>
                    </li>

                    @endif
                    <li class="menu">
                        <a href="#" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <span> </span>
                            </div>
                        </a>
                    </li>
                    <li class="menu">
                        <a href="#" aria-expanded="false" class="dropdown-toggle">
                            <div class="">
                                <span> </span>
                            </div>
                        </a>
                    </li>
                </ul>

            </nav>

        </div>
        <!--  END SIDEBAR  -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

        <!--  BEGIN CONTENT AREA  -->
        <div id="content" class="main-content">
            @yield('content')
            <div class="footer-wrapper">
                <div class="footer-section f-section-1">
                    <p class="">Copyright © 2021 {{env('APP_NAME')}}, All rights reserved.</p>
                </div>
                <div class="footer-section f-section-2">
                    <p class="">Developed with
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                            <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                        </svg>
                    </p> by Moore Advice Dev Team
                </div>
            </div>
        </div>
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{Path::asset('admin/assets/js/app.js')}}"></script>
    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>


    <script>
        window.addEventListener('refreshPage', event => {
            window.location.reload();
        })
    </script>

    <script>
        $('#block-page').on('click', function() {
            $.blockUI({
                message: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg> <br><Br> <h1 class="text-success">Publishing...</h1>',
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
        $('#block-page1').on('click', function() {
            $.blockUI({
                message: '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-loader"><line x1="12" y1="2" x2="12" y2="6"></line><line x1="12" y1="18" x2="12" y2="22"></line><line x1="4.93" y1="4.93" x2="7.76" y2="7.76"></line><line x1="16.24" y1="16.24" x2="19.07" y2="19.07"></line><line x1="2" y1="12" x2="6" y2="12"></line><line x1="18" y1="12" x2="22" y2="12"></line><line x1="4.93" y1="19.07" x2="7.76" y2="16.24"></line><line x1="16.24" y1="7.76" x2="19.07" y2="4.93"></line></svg> <br><Br> <h1 class="text-success">Zipping...</h1>',
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
    @yield('js')
    <!-- END GLOBAL MANDATORY SCRIPTS -->




    <!-- dark mode switch -->
    <script>
    $(document).ready(function() {
        $("#dark_mode").change(function() {
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{route('darkmode')}}",
                data: {
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    location.reload()
                },
                error: function(e) {
                    console.log(e);
                }
            });
        });
    });
</script>






    <script type="text/javascript">
        feather.replace();
    </script>
     @livewireScripts

     <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

     <x-livewire-alert::scripts />
</body>

</html>
