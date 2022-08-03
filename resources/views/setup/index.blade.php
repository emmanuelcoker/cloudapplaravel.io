<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>App Setup</title>
    <link rel="icon" type="image/x-icon" href="{{Path::asset('images/cloudAppImage.png')}}" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,600,700&display=swap" rel="stylesheet">
    <link href="{{Path::asset('admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/assets/css/plugins.css')}}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!--  BEGIN CUSTOM STYLE FILE  -->
    <link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/jquery-step/jquery.steps.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/elements/alert.css')}}">
    <link href="{{Path::asset('admin/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/dropify/dropify.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
    <link href="{{Path::asset('admin/plugins/pricing-table/css/component.css')}}" rel="stylesheet" type="text/css" />
    <style>
        #formValidate .wizard>.content {
            min-height: 25em;
        }

        #example-vertical.wizard>.content {
            min-height: 24.5em;
        }
    </style>
    <style>
        .priceLogo {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            display: block;
            margin: 10px auto 0px auto;
        }
    </style>
    <style>
        /* The message box is shown when the user clicks on the password field */
        #message {
            display: none;
            background: #f1f1f1;
            color: #000;
            position: relative;
            padding: 20px;
            margin-top: 10px;
        }

        #message p {
            padding: 10px 35px;
            font-size: 18px;
        }

        /* Add a green text color and a checkmark when the requirements are right */
        .valid {
            color: green;
        }

        .valid:before {
            position: relative;
            left: -35px;
            content: "✔";
        }

        /* Add a red text color and an "x" when the requirements are wrong */
        .invalid {
            color: red;
        }

        .invalid:before {
            position: relative;
            left: -35px;
            content: "✖";
        }
    </style>
    <!--  END CUSTOM STYLE FILE  -->
    @livewireStyles
</head>

<body class="sidebar-noneoverflow" data-spy="scroll" data-target="#navSection" data-offset="100">

    <div class="header-container fixed-top">
        <header class="header navbar navbar-expand-sm">

            <ul class="navbar-nav theme-brand flex-row  text-center">
                <li class="nav-item theme-logo">
                    <a href="javascript:void(0)">
                        <img src="{{Path::asset('images/setupLoago.png')}}" class="navbar-logo" alt="logo">
                    </a>
                </li>
                <li class="nav-item theme-text">
                    <a href="javascript:void(0)" class="nav-link"> <span style="font-size:13px">App Setup</span> </a>
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



            <ul class="navbar-item flex-row search-ul">

            </ul>
            <ul class="navbar-item flex-row navbar-dropdown">
                <li class="nav-item dropdown language-dropdown more-dropdown">
                    <div class="dropdown  custom-dropdown-icon">
                        <a class="dropdown-toggle btn" href="#" role="button" id="langDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/img/ca.png" class="flag-width" alt="flag"><span>English</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                <polyline points="6 9 12 15 18 9"></polyline>
                            </svg></a>
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
                                <img src="assets/img/90x90.jpg" class="img-fluid mr-2" alt="avatar">
                                <div class="media-body">
                                    <h5>Non User</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </header>
    </div>

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container" style="width:100%">

        <div class="overlay"></div>
        <div class="cs-overlay"></div>
        <div class="search-overlay"></div>


        <div class="container" style="">
            <div class="row" style="">

                <div class="col-md-12">
                    @if(session()->has('errors'))
                    @foreach(session()->get('errors') as $error)
                    <div class="alert alert-light-danger border-0 mb-4" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><svg> x </svg></button>
                        <strong></strong>{{$error}}</button>
                    </div>
                    @endforeach
                    @endif
                </div>

                <div class="col-xl-12 col-lg-12 col-md-12" style="margin-top:170px">
                    <form method="post" action="{{route('register')}}" enctype="multipart/form-data">@csrf
                        <div id="circle-basic" class="" style="width:100%">



                            <h3><b>Select Plan</b></h3>
                            <section>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <section class="pricing-section bg-7 mt-5">
                                            <div class="pricing pricing--norbu">


                                                @foreach($plans as $plan)
                                                <div class="pricing__item">
                                                    <div>
                                                        <img src="{{Path::asset('images/'.$plan->image)}}" alt="sdf" class="priceLogo">
                                                    </div>
                                                    <h3 class="pricing__title">{{$plan->name}}</h3>
                                                    <div class="pricing__price"><span class="pricing__currency">$</span><small>{{number_format($plan->price)}}</small><span class="pricing__period">/ month</span></div>
                                                    <ul class=" text-center" style="display:block;  margin:auto; padding-left: 0px; list-style-type: none; list-style: none">
                                                        <li class="" style="display:block">
                                                            {{$plan->banners}} Banners
                                                        </li>
                                                        <br>
                                                        <li class="" style="display:block">
                                                            {{$plan->logos}} Logos
                                                        </li>
                                                        <br>
                                                        <li class="" style="display:block">
                                                            {{$plan->media}} Media Contents
                                                        </li>
                                                        <br>
                                                        @if($plan->daily_scheduling)
                                                        <li class="" style="display:block">
                                                            Daily Scheduling
                                                        </li><br>
                                                        @endif

                                                    </ul>
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="plan_id" value="{{$plan->id}}" @if($plan->id == 2) checked @endif class="new-control-input" >
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </section>
                                    </div> 
                                </div>
                                <div id="general-info" class="general-info" style="margin-top:20px">
                                    <div class="info">
                                        <h6 class="">Select Path Configuration </h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">

                                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">

                                                            <div class="form-group">
                                                                <label for="country">Path Type</label>
                                                                <select class="form-control mb-4" name="path_id" id="exampleFormControlSelect1" required>
                                                                    @foreach($paths as $path)
                                                                    <option value="{{$path->id}}">{{$path->path}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <h3><b>Company Info</b></h3>
                            <section>
                                <div id="general-info" class="section general-info">
                                    <div class="info">
                                        <h6 class="">Company Information</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                                                <div>
                                                                    <input type="file" id="input-file-max-fs" name="logo" required class="dropify" data-default-file="" data-max-file-size="2M" />
                                                                    <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Company Logo</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Company Name <span class="text-danger"><b>*</b></span></label>
                                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Company Name" value="{{session()->get('company')}}" name="company_name" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fullAddress">Company Address <span class="text-danger"><b>*</b></span> </label>
                                                                        <input type="text" class="form-control mb-4" id="fullAddress" placeholder="Company Address" name="company_address" required>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="country">Country <span class="text-danger"><b>*</b></span></label>
                                                                <select class="form-control mb-4" name="company_country" id="exampleFormControlSelect1" required>
                                                                    <option value="{{session()->get('country')}}">{{App\Models\Country::find(session()->get('country'))['name']}}</option>
                                                                    @foreach($countries as $country)
                                                                    <option value="{{$country->id}}">{{$country->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="country">Industries <span class="text-danger"><b>*</b></span></label>
                                                                <select class="form-control mb-4" name="company_industry" id="exampleFormControlSelect1" required>
                                                                    <option value="">Choose your industry</option>
                                                                    @foreach($industries as $industry)
                                                                    <option value="{{$industry->id}}">{{$industry->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="general-info" class="general-info" style="margin-top:20px">
                                    <div class="info">
                                        <h6 class="">Contact Person</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-4 col-lg-12 col-md-4">
                                                        <div class="upload mt-4 pr-md-4">
                                                            <div style="display: flex; justify-content: center; align-items: center; text-align: center;">
                                                                <div>
                                                                    <input type="file" id="input-file-max-fs" name="contact_person_image" required class="dropify" data-default-file="" data-max-file-size="2M" />
                                                                    <p class="mt-2 "> <i class="flaticon-cloud-upload mr-1"></i> Upload Image</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-8 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name <span class="text-danger"><b>*</b></span></label>
                                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Contact Person Fullname" name="contact_person_name" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Email <span class="text-danger"><b>*</b></span></label>
                                                                        <input type="email" class="form-control mb-4" id="email" placeholder="Contact Person Email" name="contact_person_email" required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Phone Number <span class="text-danger"><b>*</b></span></label>
                                                                        <input type="tel" class="form-control mb-4" id="phone" placeholder="Contact Person Phone Number" name="contact_person_phone" required>
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
                            </section>





                            <h3><b>Platform Admin</b></h3>
                            <section style="margin-top: 50px; ">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="general-info" class="general-info">
                                        <div class="info">
                                            <h6 class="">Platform Admin Details</h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">
                                                        <div class="col-xl-8 col-lg-12 col-md-8 mt-md-0 mt-4" style="left:0px; right:0px; margin:auto">
                                                            <div class="form">
                                                                <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Full Name <span class="text-danger"><b>*</b></span></label>
                                                                            <input type="text" class="form-control mb-4" id="fullName" placeholder="Admin Name" name="admin_name" required>
                                                                        </div><br>
                                                                    </div>

                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Email Address <span class="text-danger"><b>*</b></span></label>
                                                                            <input type="email" class="form-control mb-4" id="fullName" placeholder="Email Address" name="email" required>
                                                                        </div><br>
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Password <span class="text-danger"><b>*</b></span></label>
                                                                            <input type="password" class="form-control mb-4" id="psw" placeholder="Password" name="password" required>
                                                                        </div><br>
                                                                    </div>

                                                                    <!-- <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <label for="fullName">Confirm Password <span class="text-danger"><b>*</b></span></label>
                                                                            <input type="password" class="form-control mb-4" id="pass2" placeholder="Confirm Password" name="confirm" required>
                                                                        </div>
                                                                    </div> -->
                                                                    <!-- 
                                                                    <div id="message">
  <h3>Password must contain the following:</h3>
  <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  <p id="number" class="invalid">A <b>number</b></p>
  <p id="length" class="invalid">Minimum <b>8 characters</b></p>
</div> -->

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </section>








                            <h3><b>Register More Users</b></h3>
                            <section style="margin-top: 50px; ">
                                <div id="general-info" class="general-info">
                                    <div class="info">
                                        <h6 class="">User One</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder=" Person Fullname" name="user1_name">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Email</label>
                                                                        <input type="email" class="form-control mb-4" id="email" placeholder=" Person Email" name="user1_email">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Password</label>
                                                                        <input type="tel" class="form-control mb-4" id="phone" placeholder=" Person Password" name="user1_password">
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Confirm Password</label>
                                                                        <input type="tel" class="form-control mb-4" id="phone" placeholder=" Person Password" name="user1_confirm">
                                                                    </div>
                                                                </div> -->

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="country">Role</label>
                                                                        <select class="form-control mb-4" name="user1_role" id="exampleFormControlSelect1">
                                                                            <option value="">Choose User Role</option>
                                                                            @foreach($roles as $role)
                                                                            @if($role->name !== 'Superadmin')
                                                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                                                            @endif
                                                                            @endforeach
                                                                        </select>
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

                                <div id="general-info" class="general-info" style="margin-top:20px">
                                    <div class="info">
                                        <h6 class="">User Two</h6>
                                        <div class="row">
                                            <div class="col-lg-11 mx-auto">
                                                <div class="row">
                                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                        <div class="form">
                                                            <div class="row">
                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Full Name</label>
                                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder=" Person Fullname" name="user2_name">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Email</label>
                                                                        <input type="email" class="form-control mb-4" id="email" placeholder=" Person Email" name="user2_email">
                                                                    </div>
                                                                </div>

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Password</label>
                                                                        <input type="tel" class="form-control mb-4" id="phone" placeholder=" Person Password" name="user2_password">
                                                                    </div>
                                                                </div>

                                                                <!-- <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="fullName">Confirm Password</label>
                                                                        <input type="tel" class="form-control mb-4" id="phone" placeholder=" Person Password" name="user2_confirm">
                                                                    </div>
                                                                </div> -->

                                                                <div class="col-sm-6">
                                                                    <div class="form-group">
                                                                        <label for="country">Role</label>
                                                                        <select class="form-control mb-4" name="user2_role" id="exampleFormControlSelect1">
                                                                            <option value="">Choose User Role</option>
                                                                            @foreach($roles as $role)
                                                                            @if(!$role->name !== 'Superadmin')
                                                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                                                            @endif
                                                                            @endforeach
                                                                        </select>
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


                            </section>





                            <h3><b>Display Project</b></h3>
                            <section style="margin-top: 50px; ">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="general-info" class="general-info">
                                        <div class="info">
                                            <h6 class="">Default Location</h6>

                                            <div class="row text-center">
                                                <div class="col-md-6" style="margin: 0px auto 20px auto">
                                                    <strong>Load Default Display Location </strong>
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="default_location" value="default" checked class="new-control-input">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="margin: 0px auto 20px auto">
                                                    <strong>Add a Default Display Location </strong>
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="default_location" value="add" class="new-control-input">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="general-info" class="general-info" style="margin-top:20px">
                                        <div class="info">
                                            <h6 class="">Default Display Contents</h6>

                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="form-group">
                                                                    <label for="country">Display Content</label>
                                                                    <select class="form-control mb-4" name="display_content" id="exampleFormControlSelect1" required>
                                                                        <option value="default">Load default Display Contents</option>
                                                                        <option value="new">Add New default Display Contents</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="general-info" class="general-info" style="margin-top:20px">
                                        <div class="info">
                                            <h6 class="">Default Display </h6>

                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">
                                                                <div class="form-group">
                                                                    <label for="country">Default Display</label>
                                                                    <select class="form-control mb-4" name="display_display" id="exampleFormControlSelect1" required>
                                                                        <option value="default">Load Default Display1</option>
                                                                        <option value="hq">Load Default ZoneHQ</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>






                            <h3><b>Select Template</b> </h3>
                            <section style=" ">
                                <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                                    <div id="general-info" class="general-info">
                                        <div class="info">
                                            <h6 class="">Select Template </h6>
                                            <div class="row">
                                                <div class="col-lg-11 mx-auto">
                                                    <div class="row">

                                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                            <div class="form">




                                                                <div class="form-group">
                                                                    <div class="row text-center">
                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/1b.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="1" class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/2b.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="2" class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/3b.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="3" class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/4b.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="4" class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
                                                                            </div>
                                                                        </div>

                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/5b.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="5" class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
                                                                            </div>
                                                                        </div>


                                                                        <div class="col-md-4" style="margin: 0px auto 20px auto">
                                                                            <img src="{{Path::asset('images/fx_template.jpg')}}" alt="" style="width: 150px; height:100px" class="img-responsive">
                                                                            <div class="n-chk" style="margin-top: 15px;">
                                                                                <label class="new-control new-checkbox checkbox-success">
                                                                                    <input type="radio" name="template" value="6" checked class="new-control-input">
                                                                                    <span class="new-control-indicator"></span> .
                                                                                </label>
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
                                    </div>
                                </div>
                            </section>





                            <h3><b>Display Content</b></h3>
                            <section style="margin-top: 50px;  ">
                                <div class="row">
                                    <div class="col-md-12 text-center" >
                                        <button type="submit" class="btn btn-primary btn-lg" style="display:block; left:0px; right:0px; margin:auto">Publish</button>
                                        <br>
                                       <p>NOTE: <span class="text-danger">All required fields must be filled to proceed.</span></p>
                                    </div>
                                </div>
                            </section>




                        </div>
                    </form>
                </div>


            </div>
        </div>

    </div>
    <!-- END MAIN CONTAINER -->



    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{Path::asset('admin/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
    <script src="{{Path::asset('admin/assets/js/app.js')}}"></script>

    <script>
        $(document).ready(function() {
            App.init();
        });
    </script>
    <script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
    <script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/jquery-step/jquery.steps.min.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/jquery-step/custom-jquery.steps.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <script src="{{Path::asset('admin/plugins/dropify/dropify.min.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
    <!-- <script src="{{Path::asset('admin/plugins/tagInput/tags-input.js')}}"></script> -->
    <script src="{{Path::asset('admin/assets/js/users/account-settings.js')}}"></script>

    <x-livewire-alert::scripts />

    <script type="text/javascript">
        feather.replace();
    </script>

    <!-- 
<script>
var myInput = document.getElementById("psw");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box
myInput.onfocus = function() {
  document.getElementById("message").style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
</script> -->



    @livewireScripts
</body>

</html>