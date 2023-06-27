@extends('layouts.client.default')

@section('css')
<!--  BEGIN CUSTOM STYLE FILE  -->
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/dropify/dropify.min.css')}}">
<link href="{{Path::asset('admin/assets/css/users/account-setting.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">

<style>
    .dot {
        /*margin: auto;*/
        /*top: 0; left: 0; bottom: 0; right: 0;*/
        margin-top: -10px;
        /*font-family: 'Source Sans Pro', sans-serif;*/
        font-family: 'Lato', sans-serif;
        color: black;
        font-size: 30px;
        margin-left: 0px;
        margin-right: 0px;
        display: inline-block;
    }

    .time_look {
        /*background-color: #3d3b3be3;*/
        background-color: #2c2929;
        padding: 5px;
        width: 40px;
        border-radius: 8px;
        border-color: #3d3b3bb0;
        letter-spacing: 5px;
        box-shadow: 2px 2px 4px #2726266e;
        font-family: 'Lato', sans-serif;
        font-weight: lighter;
        font-size: 12px;
        text-align: center;
        color: white;
        display: inline-block;
    }
</style>
@endsection


@section('content')
<div class="layout-px-spacing">
    <div class="account-settings-container layout-top-spacing">
        @if(Session::has('success'))
        <script>
            swal("Updated", "{!! Session::get('success') !!}", "success");
        </script>
        @endif
        @if(Session::has('fail'))
        <script>
            swal("Ooosps", "{!! Session::get('fail') !!}", "error");
        </script>
        @endif
        @if(Session::has('errors'))
        <script>
            swal("Ooosps", "File type is not allowed", "error");
        </script>
        @endif
        <div class="account-content">
            <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">

                <form action="{{route('settings.store')}}" method="post" enctype="multipart/form-data">@csrf
                    <div class="row" style="width: 90%; margin: auto;">


                         <div class="col-md-12" style="margin-bottom:40px; margin-top:10px">
                         <div class="fq-header-wrapper" style="">
                            <h1 class="" style="color:var(--tableTitleColor1)"> Control Panel</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Super admin managing Control panel!</p>
                        </div>
</div>

                        </div>

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Company Information</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input type="file" id="input-file-max-fs" name="file" class="dropify" data-default-file="<?php if($settings->company_logo){ echo  Path::asset('images/'.$settings->company_logo);}else{ echo Path::asset('images/setupLoago.png');} ?>" data-max-file-size="2M" />
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Logo</p>
                                                    </div>
                                                </div>

                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)"> Company's Name</label>
                                                                    <input type="text" class="form-control mb-4" name="company_name" value="{{$settings->company_name}}" id="fullName" placeholder="Full Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"    readonly>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)"> Company's ID</label>
                                                                    <input type="text" class="form-control mb-4" name="company_ID" value="{{$settings->company_ID}}" id="fullName" placeholder="Full Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"    READONLY>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">Company's Plan</label>
                                                                    <select class="form-control" name="company_plan" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"     >
                                                                        <option value="{{$settings['plan_id']}}">{{$settings['plan']['name']}}</option>
                                                                        @foreach($plans as $plan)
                                                                        <option value="{{$plan->id}}">{{$plan->name}}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group mr-1">
                                                                    <label for="fullName" style="color:var(--blackText)">Expiry Date</label>
                                                                    <input type="date" class="form-control mb-4" name="expiry_date" value="{{$settings->expiry_date}}" id="fullName" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr style="border-top: 1px solid var(--tableDivBorder)">
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input type="file" id="input-file-max-fs" name="file2" class="dropify" data-default-file="{{Path::asset('images/'.$contact->image)}}" data-max-file-size="2M" />
                                                        <p class="mt-2" style="text-align: center;"><i class="flaticon-cloud-upload mr-1"></i> Contact Person Image</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">Contact Person Name</label>
                                                                    <input type="text" class="form-control mb-4" name="contact_name" value="{{$contact->name}}" id="fullName" placeholder="Contact Person Full Name" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">Contact Person Phone</label>
                                                                    <input type="tel" class="form-control mb-4" name="contact_phone" value="{{$contact->phone}}" placeholder="Contact Person Phone Number" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" >
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="form-group mr-1">
                                                                    <label for="fullName" style="color:var(--blackText)">Contact Person Email</label>
                                                                    <input type="email" class="form-control mb-4" name="contact_email" value="{{$contact->email}}" placeholder="Contact Person Email" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" >
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



                        @livewire('industry', [$settings->industry_id])







                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Publish Settings</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>To Zip</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">OFF</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input  id="to_zip" class="sectionVisibility" type="checkbox" @if($settings->to_zip == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                            <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>To CSV</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">OFF</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input  id="to_csv" class="sectionVisibility" type="checkbox" @if($settings->to_csv == true) checked @endif>
                                                                                <span class="slider round"></span>
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
                        </div>



                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Preferred Platform Time </h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="row" style="margin-bottom: 30px;">

                                                        <div class="col-sm-6" id="ST">
                                                            <div class="card component-card_1" style="background-color:var(--inputBackground)" >
                                                                <div class="card-body">
                                                                    <h3 class="text-center" style="color:var(--blackText)">Server Time <br> <small>(GMT)</small></h3>
                                                                    <div style="display: flex; justify-content: center; align-items: center; text-align:center">
                                                                        <ul style="margin-left: -40px; margin-top: 20px;margin-bottom:20px;list-style-type: none;" id="menu">
                                                                            <li class="time_look" id="hour1"></li>
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="minute1"></li>
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="second1"></li>
                                                                            <!-- <li style="margin-left: 10px"></li> -->
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="meridiem1"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-sm-6" id="CT">
                                                            <div class="card component-card_1" style="background-color:var(--inputBackground)">
                                                                <div class="card-body">
                                                                    <h3 class="text-center" style="color:var(--blackText)">Country Time  <small>(GMT)</small></h3>
                                                                        <p style="font-size:15px; text-align: center; text-success"> <span id="databaseCountry">{{$settings->countryName($settings->country)}}</span> <span id="newCountry"></span> </p>
                                                                    <div style="display: flex; justify-content: center; align-items: center; text-align:center; ">
                                                                        <ul style="margin-left: -40px; margin-top: 20px;margin-bottom:20px;list-style-type: none;" id="menu">
                                                                            <li class="time_look" id="hour"></li>
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="minute"></li>
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="second"></li>
                                                                            <!-- <li style="margin-left: 10px"></li> -->
                                                                            <li class="dot"> : </li>
                                                                            <li class="time_look" id="meridiem"></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName" style="color:var(--blackText)">Preferred Time</label>
                                                                <select class="form-control" name="time_type" id="time_type" onchange="getPreTime(this)" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                    <option value="{{$settings->time_type}}">
                                                                        @if($settings->time_type == 0)
                                                                        Server Time
                                                                        @elseif($settings->time_type == 2)
                                                                        Country Time
                                                                        @else
                                                                        Device Time
                                                                        @endif
                                                                    </option>
                                                                    <option value="0"> Server Time</option>
                                                                    <option value="1"> Device Time</option>
                                                                    <option value="2"> Country Time</option>
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

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Country TimeZone</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName" style="color:var(--blackText)">Country</label>
                                                                <select class="form-control" name="country" id="country" onchange="getContryCodeValue(this)" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                    <option value="{{$settings->country}}">{{$settings->countryName($settings->country)}}</option>
                                                                    @foreach($countries as $country)
                                                                    <option value="{{$country['iso2']}}"> {{$country->name}}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label for="fullName " style="color:var(--blackText)">Time Zone</label>
                                                                <input type="text" name="time_zone" class="form-control mb-4" id="selected_hour" value="{{$settings->time_zone}}" placeholder="Time Zone" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)" readonly>
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




                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Announcement Settings </h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">Announcement Tab Name</label>
                                                                    <input type="text" name="announcement" class="form-control mb-4" value="{{$tabs->announcement}}" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-6">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)">Announcement page visibility</label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input  id="announce" class="sectionVisibility" type="checkbox" @if($settings->show_announcement == true) checked @endif>
                                                                                <span class="slider round"></span>
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
                        </div>






                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">{{$tabs->training}}</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-md-5">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">{{$tabs->training}} Tab Name</label>
                                                                    <input type="text" name="training" value="{{$tabs->training}}" class="form-control mb-4" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                    <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)">{{$tabs->training}} page </label>
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input  id="training" class="sectionVisibility" type="checkbox" @if($settings->show_training == true) checked @endif >
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>

                                                                    <div class="col-md-6">
                                                                    <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)">Freeze Time</label>
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">OFF</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input  id="freeze_time" class="sectionVisibility" type="checkbox" @if($settings->freeze_time == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>


                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:autos; color:var(--blackText)""><b>Morning</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <input id="morning" class="sectionVisibility" type="checkbox" @if($settings->morning == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:autos; color:var(--blackText)""><b>Afternoon</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <input id="afternoon" class="sectionVisibility" type="checkbox" @if($settings->afternoon == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                            <br>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:autos; color:var(--blackText)""><b>Evening</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <input id="evening" class="sectionVisibility" type="checkbox" @if($settings->evening == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                            <br>
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
                        </div>






                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                         <button class="btn btn-success" type="submit" style="display: block; margin:30px 30px 30px 0px;float:right; ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                </svg>
                            </button>
                            <div id="general-info" class="section general-info">
                            <div class="info">
                                    <h6 class="" style="color:var(--blackText)">News Title</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName" style="color:var(--blackText)">News Title</label>
                                                                    <input type="text" name="news_title" value="{{$tabs->news_title}}" class="form-control mb-4" placeholder="Enter News Title" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr style="border-top: 1px solid var(--tableDivBorder)">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">News Feed</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Custom Feed</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="allow_custom_news" class="sectionVisibility" type="checkbox" @if($settings->allow_custom_news == true) checked @endif><span class="slider round"></span>

                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-6">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)">
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Rss Feed</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="allow_rss_news" class="sectionVisibility" type="checkbox" @if($settings->allow_rss_news == true) checked @endif>
                                                                                <span class="slider round"></span>
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
                        </div>






                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">

                            <div id="general-info" class="section general-info">
                                <div class="info">
                                    <h6 class="" style="color:var(--blackText)">Section Visibility Control</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">




                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Template</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_template" class="sectionVisibility" type="checkbox" @if($settings->show_template == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Logo</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_logo" class="sectionVisibility" type="checkbox" @if($settings->show_logo == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Banner</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_banner" class="sectionVisibility" type="checkbox" @if($settings->show_banner == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Clock</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_clock" class="sectionVisibility" type="checkbox" @if($settings->show_clock == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Rates</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_rate" class="sectionVisibility" type="checkbox" @if($settings->show_rate == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>News</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="show_news" class="sectionVisibility" type="checkbox" @if($settings->show_news == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>



                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Media Scheduling</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;Show</span>
                                                                                <input id="allow_scheduling" class="sectionVisibility" type="checkbox" @if($settings->allow_scheduling == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Add Display</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Off</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input id="add_display" class="sectionVisibility" type="checkbox" @if($settings->add_display == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Add Location</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Off</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input id="add_location" class="sectionVisibility" type="checkbox" @if($settings->add_location == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-sm-4">
                                                                <hr style="border-top: 1px solid var(--tableDivBorder)"><Br>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <label style=" display:block; text-align: center; margin:auto; color:var(--blackText)"><b>Company Branding</b></label>
                                                                    </div>
                                                                    <div class="col-md-12">
                                                                        <Br>
                                                                        <div style=" display:block; text-align: center; margin:auto">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <span style=" margin-left: -100px">Off</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp;&nbsp;&nbsp;ON</span>
                                                                                <input id="show_company_branding" class="sectionVisibility" type="checkbox" @if($settings->show_company_branding == true) checked @endif>
                                                                                <span class="slider round"></span>
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
                        </div>


                        @livewire('sections')


                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







@livewire('training-settings')


@endsection

@section('js')
<!--  BEGIN CUSTOM SCRIPTS FILE  -->

<script src="{{Path::asset('admin/plugins/dropify/dropify.min.js')}}"></script>
<script src="{{Path::asset('admin/plugins/blockui/jquery.blockUI.min.js')}}"></script>
<!-- <script src="{{Path::asset('admin/plugins/tagInput/tags-input.js')}}"></script> -->
<script src="{{Path::asset('admin/assets/js/users/account-settings.js')}}"></script>
<script src="{{Path::asset('time/moment.min.js')}}"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.3/moment-timezone-with-data.min.js'></script>

<script>
    window.onload = function() {
        function getPreTime1() {
            var value = '{{$settings->time_type}}';
            if (value == 1) {
                $('#ST').hide();
                $('#CT').hide();
            }

            if (value == 0) {
                $('#ST').show();
                $('#CT').hide();
            }

            if (value == 2) {
                $('#ST').show();
                $('#CT').show();
            }
        }
        getPreTime1();
    }


    function getPreTime(data) {
        console.log(data);
        var value = data.value;
        console.log("value: ", value);
        if (value == 1) {
            $('#ST').hide();
            $('#CT').hide();
        }

        if (value == 0) {
            $('#ST').show();
            $('#CT').hide();
        }

        if (value == 2) {
            $('#ST').show();
            $('#CT').show();
        }
    }
    getPreTime(data);
</script>

<script>
    $(document).ready(function() {





        //controlling morning, afternoon and evenong visibility
        $(".trainingSection").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{route('trainingBtn')}}",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    new swal("Updated", "Item has been switched", "success");
                },
                error: function(e) {
                    console.log(e);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });


        //switch zones
        $(".zones").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{route('zoneSwitch')}}",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    new swal("Updated", "Item has been switched", "success");
                },
                error: function(e) {
                    console.log(e);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });




        //other section visibility
        $(".sectionVisibility").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            $.ajax({
                type: "POST",
                url: "{{route('pageVisibilityControl')}}",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    if (status == true) {
                        $switch = 'ON';
                    } else {
                        $switch = 'OFF';
                    }
                    new swal("Updated", result + " has been switched " + $switch, "success");
                },
                error: function(e) {
                    console.log(e);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });


    });
</script>





<script>
    var f2 = flatpickr(document.getElementById('dateTimeFlatpickr'), {
        enableTime: true,
        dateFormat: "Y-m-d H:i",
    });
</script>








<script>
    var add = 0;

    function getContryCodeValue(country) {
        var countryCode = country.value;
        /*Generated 2016-05-23 08:17:41.711000*/
        var timezone_json = {
            "BD": [{
                "tzid": "Asia/Dhaka",
                "name": "Bangladesh"
            }],
            "BE": [{
                "tzid": "Europe/Brussels",
                "name": "Romance"
            }],
            "BF": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "BG": [{
                "tzid": "Europe/Sofia",
                "name": "FLE"
            }],
            "BA": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "BB": [{
                "tzid": "America/Barbados",
                "name": "SA Western"
            }],
            "WF": [{
                "tzid": "Pacific/Wallis",
                "name": "UTC+12"
            }],
            "BL": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "BM": [{
                "tzid": "Atlantic/Bermuda",
                "name": "Atlantic"
            }],
            "BN": [{
                "tzid": "Asia/Brunei",
                "name": "Singapore"
            }],
            "BO": [{
                "tzid": "America/La_Paz",
                "name": "SA Western"
            }],
            "JP": [{
                "tzid": "Asia/Tokyo",
                "name": "Tokyo"
            }],
            "BI": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "BJ": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "BT": [{
                "tzid": "Asia/Thimphu",
                "name": "Bangladesh"
            }],
            "JM": [{
                "tzid": "America/Jamaica",
                "name": "SA Pacific"
            }],
            "JO": [{
                "tzid": "Asia/Amman",
                "name": "Jordan"
            }],
            "WS": [{
                "tzid": "Pacific/Apia",
                "name": "Samoa"
            }],
            "BQ": [{
                "tzid": "America/Curacao",
                "name": "SA Western"
            }],
            "BR": [{
                "tzid": "America/Noronha",
                "name": "UTC-02"
            }, {
                "tzid": "America/Belem",
                "name": "Belem"
            }, {
                "tzid": "America/Fortaleza",
                "name": "Fortaleza"
            }, {
                "tzid": "America/Recife",
                "name": "Recife"
            }, {
                "tzid": "America/Araguaina",
                "name": "Araguaina"
            }, {
                "tzid": "America/Maceio",
                "name": "Maceio"
            }, {
                "tzid": "America/Bahia",
                "name": "Bahia"
            }, {
                "tzid": "America/Sao_Paulo",
                "name": "Sao Paulo"
            }, {
                "tzid": "America/Campo_Grande",
                "name": "Campo Grande"
            }, {
                "tzid": "America/Cuiaba",
                "name": "Cuiaba"
            }, {
                "tzid": "America/Porto_Velho",
                "name": "Velho"
            }, {
                "tzid": "America/Boa_Vista",
                "name": "Boa Vista"
            }, {
                "tzid": "America/Manaus",
                "name": "Manaus"
            }, {
                "tzid": "America/Rio_Branco",
                "name": "Rio Branco"
            }],
            "BS": [{
                "tzid": "America/Nassau",
                "name": "Eastern"
            }],
            "JE": [{
                "tzid": "Europe/London",
                "name": "GMT"
            }],
            "BY": [{
                "tzid": "Europe/Minsk",
                "name": "Belarus"
            }],
            "BZ": [{
                "tzid": "America/Belize",
                "name": "Central America"
            }],
            "RU": [{
                "tzid": "Europe/Kaliningrad",
                "name": "Kaliningrad"
            }, {
                "tzid": "Europe/Moscow",
                "name": "Russian"
            }, {
                "tzid": "Europe/Simferopol",
                "name": "Russian"
            }, {
                "tzid": "Europe/Volgograd",
                "name": "Russian"
            }, {
                "tzid": "Europe/Samara",
                "name": "Russia Zone 3"
            }, {
                "tzid": "Asia/Yekaterinburg",
                "name": "Ekaterinburg"
            }, {
                "tzid": "Asia/Omsk",
                "name": "N. Central Asia"
            }, {
                "tzid": "Asia/Novosibirsk",
                "name": "N. Central Asia"
            }, {
                "tzid": "Asia/Novokuznetsk",
                "name": "North Asia"
            }, {
                "tzid": "Asia/Krasnoyarsk",
                "name": "North Asia"
            }, {
                "tzid": "Asia/Irkutsk",
                "name": "North Asia East"
            }, {
                "tzid": "Asia/Chita",
                "name": "Yakutsk"
            }, {
                "tzid": "Asia/Yakutsk",
                "name": "Yakutsk"
            }, {
                "tzid": "Asia/Khandyga",
                "name": "Yakutsk"
            }, {
                "tzid": "Asia/Vladivostok",
                "name": "Vladivostok"
            }, {
                "tzid": "Asia/Ust-Nera",
                "name": "Vladivostok"
            }, {
                "tzid": "Asia/Magadan",
                "name": "Magadan"
            }, {
                "tzid": "Asia/Sakhalin",
                "name": "Vladivostok"
            }, {
                "tzid": "Asia/Srednekolymsk",
                "name": "Russia Zone 10"
            }, {
                "tzid": "Asia/Kamchatka",
                "name": "Russia Zone 11"
            }, {
                "tzid": "Asia/Anadyr",
                "name": "Russia Zone 11"
            }],
            "RW": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "RS": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "LT": [{
                "tzid": "Europe/Vilnius",
                "name": "FLE"
            }],
            "RE": [{
                "tzid": "Indian/Reunion",
                "name": "Mauritius"
            }],
            "LU": [{
                "tzid": "Europe/Luxembourg",
                "name": "W. Europe"
            }],
            "LR": [{
                "tzid": "Africa/Monrovia",
                "name": "Greenwich"
            }],
            "RO": [{
                "tzid": "Europe/Bucharest",
                "name": "GTB"
            }],
            "TK": [{
                "tzid": "Pacific/Fakaofo",
                "name": "Tonga"
            }],
            "GW": [{
                "tzid": "Africa/Bissau",
                "name": "Greenwich"
            }],
            "GU": [{
                "tzid": "Pacific/Guam",
                "name": "West Pacific"
            }],
            "GT": [{
                "tzid": "America/Guatemala",
                "name": "Central America"
            }],
            "GR": [{
                "tzid": "Europe/Athens",
                "name": "GTB"
            }],
            "GQ": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "GP": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "BH": [{
                "tzid": "Asia/Qatar",
                "name": "Arab"
            }],
            "GY": [{
                "tzid": "America/Guyana",
                "name": "SA Western"
            }],
            "GG": [{
                "tzid": "Europe/London",
                "name": "GMT"
            }],
            "GF": [{
                "tzid": "America/Cayenne",
                "name": "SA Eastern"
            }],
            "GE": [{
                "tzid": "Asia/Tbilisi",
                "name": "Georgian"
            }],
            "GD": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "GB": [{
                "tzid": "Europe/London",
                "name": "GMT"
            }],
            "GA": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "GN": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "GM": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "GL": [{
                "tzid": "America/Godthab",
                "name": "Greenland"
            }, {
                "tzid": "America/Danmarkshavn",
                "name": "UTC"
            }, {
                "tzid": "America/Scoresbysund",
                "name": "Azores"
            }, {
                "tzid": "America/Thule",
                "name": "Atlantic"
            }],
            "GI": [{
                "tzid": "Europe/Gibraltar",
                "name": "W. Europe"
            }],
            "GH": [{
                "tzid": "Africa/Accra",
                "name": "Greenwich"
            }],
            "OM": [{
                "tzid": "Asia/Dubai",
                "name": "Arabian"
            }],
            "BW": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "HR": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "HT": [{
                "tzid": "America/Port-au-Prince",
                "name": "Eastern"
            }],
            "HU": [{
                "tzid": "Europe/Budapest",
                "name": "Central Europe"
            }],
            "HK": [{
                "tzid": "Asia/Hong_Kong",
                "name": "China"
            }],
            "HN": [{
                "tzid": "America/Tegucigalpa",
                "name": "Central America"
            }],
            "LV": [{
                "tzid": "Europe/Riga",
                "name": "FLE"
            }],
            "AD": [{
                "tzid": "Europe/Andorra",
                "name": "W. Europe"
            }],
            "PR": [{
                "tzid": "America/Puerto_Rico",
                "name": "SA Western"
            }],
            "PS": [{
                "tzid": "Asia/Gaza",
                "name": "Palestine Time"
            }],
            "PW": [{
                "tzid": "Pacific/Palau",
                "name": "Tokyo"
            }],
            "PT": [{
                "tzid": "Europe/Lisbon",
                "name": "Lisbon"
            }, {
                "tzid": "Atlantic/Azores",
                "name": "Azores"
            }],
            "KR": [{
                "tzid": "Asia/Seoul",
                "name": "Korea"
            }],
            "PY": [{
                "tzid": "America/Asuncion",
                "name": "Paraguay"
            }],
            "IQ": [{
                "tzid": "Asia/Baghdad",
                "name": "Arabic"
            }],
            "PA": [{
                "tzid": "America/Panama",
                "name": "SA Pacific"
            }],
            "PF": [{
                "tzid": "Pacific/Tahiti",
                "name": "Hawaiian"
            }],
            "PG": [{
                "tzid": "Pacific/Port_Moresby",
                "name": "West Pacific"
            }, {
                "tzid": "Pacific/Bougainville",
                "name": "Central Pacific"
            }],
            "PE": [{
                "tzid": "America/Lima",
                "name": "SA Pacific"
            }],
            "PK": [{
                "tzid": "Asia/Karachi",
                "name": "Pakistan"
            }],
            "PH": [{
                "tzid": "Asia/Manila",
                "name": "Singapore"
            }],
            "PN": [{
                "tzid": "Pacific/Pitcairn",
                "name": "Pitcairn Time"
            }],
            "PL": [{
                "tzid": "Europe/Warsaw",
                "name": "Central European"
            }],
            "PM": [{
                "tzid": "America/Miquelon",
                "name": "Miquelon Time"
            }],
            "ZM": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "EH": [{
                "tzid": "Africa/El_Aaiun",
                "name": "Morocco"
            }],
            "EE": [{
                "tzid": "Europe/Tallinn",
                "name": "FLE"
            }],
            "EG": [{
                "tzid": "Africa/Cairo",
                "name": "Egypt"
            }],
            "ZA": [{
                "tzid": "Africa/Johannesburg",
                "name": "South Africa"
            }],
            "EC": [{
                "tzid": "America/Guayaquil",
                "name": "SA Pacific"
            }, {
                "tzid": "Pacific/Galapagos",
                "name": "Central America"
            }],
            "AL": [{
                "tzid": "Europe/Tirane",
                "name": "Central Europe"
            }],
            "AO": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "KZ": [{
                "tzid": "Asia/Almaty",
                "name": "Almaty"
            }, {
                "tzid": "Asia/Aqtobe",
                "name": "Aqtobe"
            }, {
                "tzid": "Asia/Aqtau",
                "name": "Aqtau"
            }],
            "ET": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "SO": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "ZW": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "KY": [{
                "tzid": "America/Panama",
                "name": "SA Pacific"
            }],
            "ES": [{
                "tzid": "Europe/Madrid",
                "name": "Madrid"
            }, {
                "tzid": "Africa/Ceuta",
                "name": "Ceuta"
            }, {
                "tzid": "Atlantic/Canary",
                "name": "GMT"
            }],
            "ER": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "ME": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "MD": [{
                "tzid": "Europe/Chisinau",
                "name": "E. Europe"
            }],
            "MG": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "MF": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "MA": [{
                "tzid": "Africa/Casablanca",
                "name": "Morocco"
            }],
            "MC": [{
                "tzid": "Europe/Monaco",
                "name": "W. Europe"
            }],
            "UZ": [{
                "tzid": "Asia/Tashkent",
                "name": "Tashkent"
            }],
            "MM": [{
                "tzid": "Asia/Rangoon",
                "name": "Myanmar"
            }],
            "ML": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "MO": [{
                "tzid": "Asia/Macau",
                "name": "China"
            }],
            "MN": [{
                "tzid": "Asia/Ulaanbaatar",
                "name": "Ulaanbaatar"
            }, {
                "tzid": "Asia/Choibalsan",
                "name": "Choibalsan"
            }],
            "MH": [{
                "tzid": "Pacific/Majuro",
                "name": "Majuro"
            }, {
                "tzid": "Pacific/Kwajalein",
                "name": "Kwajalein"
            }],
            "MK": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "UM": [{
                "tzid": "Pacific/Pago_Pago",
                "name": "UTC-11"
            }, {
                "tzid": "Pacific/Wake",
                "name": "UTC+12"
            }, {
                "tzid": "Pacific/Honolulu",
                "name": "Hawaiian"
            }],
            "MT": [{
                "tzid": "Europe/Malta",
                "name": "W. Europe"
            }],
            "MW": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }],
            "MV": [{
                "tzid": "Indian/Maldives",
                "name": "West Asia"
            }],
            "MQ": [{
                "tzid": "America/Martinique",
                "name": "SA Western"
            }],
            "MP": [{
                "tzid": "Pacific/Guam",
                "name": "West Pacific"
            }],
            "MS": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "MR": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "AU": [{
                "tzid": "Antarctica/Macquarie",
                "name": "Central Pacific"
            }, {
                "tzid": "Australia/Hobart",
                "name": "Eastern - Hobart"
            }, {
                "tzid": "Australia/Sydney",
                "name": "Eastern - Sydney"
            }, {
                "tzid": "Australia/Brisbane",
                "name": "Eastern - Brisbane"
            }, {
                "tzid": "Australia/Adelaide",
                "name": "Central- Adelaide"
            }, {
                "tzid": "Australia/Darwin",
                "name": "Central - Darwin"
            }, {
                "tzid": "Australia/Perth",
                "name": "Western"
            }],
            "UG": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "MY": [{
                "tzid": "Asia/Kuala_Lumpur",
                "name": "Kuala Lumpur"
            }],
            "MX": [{
                "tzid": "America/Mexico_City",
                "name": "Central - Mexico City"
            }, {
                "tzid": "America/Cancun",
                "name": "Eastern"
            }, {
                "tzid": "America/Chihuahua",
                "name": "Mountain - Chihuahua"
            }, {
                "tzid": "America/Hermosillo",
                "name": "Mountain - Hermosillo"
            }, {
                "tzid": "America/Tijuana",
                "name": "Pacific"
            }],
            "VU": [{
                "tzid": "Pacific/Efate",
                "name": "Central Pacific"
            }],
            "FR": [{
                "tzid": "Europe/Paris",
                "name": "Romance"
            }],
            "AW": [{
                "tzid": "America/Curacao",
                "name": "SA Western"
            }],
            "SH": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "AF": [{
                "tzid": "Asia/Kabul",
                "name": "Afghanistan"
            }],
            "AX": [{
                "tzid": "Europe/Helsinki",
                "name": "FLE"
            }],
            "FI": [{
                "tzid": "Europe/Helsinki",
                "name": "FLE"
            }],
            "FJ": [{
                "tzid": "Pacific/Fiji",
                "name": "Fiji"
            }],
            "FK": [{
                "tzid": "Atlantic/Stanley",
                "name": "SA Eastern"
            }],
            "FM": [{
                "tzid": "Pacific/Kosrae",
                "name": "Central Pacific"
            }],
            "FO": [{
                "tzid": "Atlantic/Faroe",
                "name": "Faroe Time"
            }],
            "NI": [{
                "tzid": "America/Managua",
                "name": "Central America"
            }],
            "NL": [{
                "tzid": "Europe/Amsterdam",
                "name": "W. Europe"
            }],
            "NO": [{
                "tzid": "Europe/Oslo",
                "name": "W. Europe"
            }],
            "NA": [{
                "tzid": "Africa/Windhoek",
                "name": "Namibia"
            }],
            "NC": [{
                "tzid": "Pacific/Noumea",
                "name": "Central Pacific"
            }],
            "NE": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "NF": [{
                "tzid": "Pacific/Norfolk",
                "name": "Central Pacific"
            }],
            "NG": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "NZ": [{
                "tzid": "Pacific/Auckland",
                "name": "New Zealand"
            }],
            "NP": [{
                "tzid": "Asia/Kathmandu",
                "name": "Nepal Time"
            }],
            "NR": [{
                "tzid": "Pacific/Nauru",
                "name": "UTC+12"
            }],
            "NU": [{
                "tzid": "Pacific/Niue",
                "name": "UTC-11"
            }],
            "CK": [{
                "tzid": "Pacific/Rarotonga",
                "name": "Hawaiian"
            }],
            "CI": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "CH": [{
                "tzid": "Europe/Zurich",
                "name": "W. Europe"
            }],
            "CO": [{
                "tzid": "America/Bogota",
                "name": "SA Pacific"
            }],
            "CN": [{
                "tzid": "Asia/Shanghai",
                "name": "China"
            }, {
                "tzid": "Asia/Urumqi",
                "name": "Central Asia"
            }],
            "CM": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "CL": [{
                "tzid": "America/Santiago",
                "name": "Santiago"
            }, {
                "tzid": "Pacific/Easter",
                "name": "Easter Island"
            }],
            "CC": [{
                "tzid": "Indian/Cocos",
                "name": "Myanmar"
            }],
            "CA": [{
                "tzid": "America/St_Johns",
                "name": "Newfoundland"
            }, {
                "tzid": "America/Halifax",
                "name": "Atlantic - Halifax"
            }, {
                "tzid": "America/Toronto",
                "name": "Eastern - Toronto"
            }, {
                "tzid": "America/Iqaluit",
                "name": "Eastern - Iqaluit"
            }, {
                "tzid": "America/Winnipeg",
                "name": "Central - Winnipeg"
            }, {
                "tzid": "America/Regina",
                "name": "Central - Regina"
            }, {
                "tzid": "America/Edmonton",
                "name": "Mountain - Edmonton"
            }, {
                "tzid": "America/Yellowknife",
                "name": "Mountain - Yellowknife"
            }, {
                "tzid": "America/Dawson_Creek",
                "name": "Dawson Creek"
            }, {
                "tzid": "America/Vancouver",
                "name": "Pacific - Vancouver"
            }, {
                "tzid": "America/Whitehorse",
                "name": "Pacific - Whitehorse"
            }],
            "CG": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "CF": [{
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "CD": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }, {
                "tzid": "Africa/Lagos",
                "name": "W. Central Africa"
            }],
            "CZ": [{
                "tzid": "Europe/Prague",
                "name": "Central Europe"
            }],
            "CY": [{
                "tzid": "Asia/Nicosia",
                "name": "GTB"
            }],
            "CX": [{
                "tzid": "Indian/Christmas",
                "name": "SE Asia"
            }],
            "CR": [{
                "tzid": "America/Costa_Rica",
                "name": "Central America"
            }],
            "CW": [{
                "tzid": "America/Curacao",
                "name": "SA Western"
            }],
            "CV": [{
                "tzid": "Atlantic/Cape_Verde",
                "name": "Cape Verde"
            }],
            "CU": [{
                "tzid": "America/Havana",
                "name": "Eastern"
            }],
            "SZ": [{
                "tzid": "Africa/Johannesburg",
                "name": "South Africa"
            }],
            "SY": [{
                "tzid": "Asia/Damascus",
                "name": "Syria"
            }],
            "SX": [{
                "tzid": "America/Curacao",
                "name": "SA Western"
            }],
            "KG": [{
                "tzid": "Asia/Bishkek",
                "name": "Central Asia"
            }],
            "KE": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "SS": [{
                "tzid": "Africa/Khartoum",
                "name": "E. Africa"
            }],
            "SR": [{
                "tzid": "America/Paramaribo",
                "name": "SA Eastern"
            }],
            "KI": [{
                "tzid": "Pacific/Tarawa",
                "name": "UTC+12"
            }, {
                "tzid": "Pacific/Enderbury",
                "name": "Tonga"
            }, {
                "tzid": "Pacific/Kiritimati",
                "name": "Line Islands"
            }],
            "KH": [{
                "tzid": "Asia/Bangkok",
                "name": "SE Asia"
            }],
            "SV": [{
                "tzid": "America/El_Salvador",
                "name": "Central America"
            }],
            "KM": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "ST": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "SK": [{
                "tzid": "Europe/Prague",
                "name": "Central Europe"
            }],
            "SJ": [{
                "tzid": "Europe/Oslo",
                "name": "W. Europe"
            }],
            "SI": [{
                "tzid": "Europe/Belgrade",
                "name": "Central Europe"
            }],
            "KP": [{
                "tzid": "Asia/Pyongyang",
                "name": "North Korea"
            }],
            "KW": [{
                "tzid": "Asia/Riyadh",
                "name": "Arab"
            }],
            "SN": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "SM": [{
                "tzid": "Europe/Rome",
                "name": "W. Europe"
            }],
            "SL": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "SC": [{
                "tzid": "Indian/Mahe",
                "name": "Mauritius"
            }],
            "SB": [{
                "tzid": "Pacific/Guadalcanal",
                "name": "Central Pacific"
            }],
            "SA": [{
                "tzid": "Asia/Riyadh",
                "name": "Arab"
            }],
            "SG": [{
                "tzid": "Asia/Singapore",
                "name": "Singapore"
            }],
            "SE": [{
                "tzid": "Europe/Stockholm",
                "name": "W. Europe"
            }],
            "SD": [{
                "tzid": "Africa/Khartoum",
                "name": "E. Africa"
            }],
            "DO": [{
                "tzid": "America/Santo_Domingo",
                "name": "SA Western"
            }],
            "DM": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "DJ": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "DK": [{
                "tzid": "Europe/Copenhagen",
                "name": "Romance"
            }],
            "DE": [{
                "tzid": "Europe/Berlin",
                "name": "Berlin"
            }],
            "YE": [{
                "tzid": "Asia/Riyadh",
                "name": "Arab"
            }],
            "AT": [{
                "tzid": "Europe/Vienna",
                "name": "W. Europe"
            }],
            "DZ": [{
                "tzid": "Africa/Algiers",
                "name": "W. Central Africa"
            }],
            "US": [{
                "tzid": "America/New_York",
                "name": "Eastern"
            }, {
                "tzid": "America/Chicago",
                "name": "Central"
            }, {
                "tzid": "America/Denver",
                "name": "Mountain"
            }, {
                "tzid": "America/Phoenix",
                "name": "Mountain - AZ"
            }, {
                "tzid": "America/Los_Angeles",
                "name": "Pacific"
            }, {
                "tzid": "America/Anchorage",
                "name": "Alaskan"
            }, {
                "tzid": "Pacific/Honolulu",
                "name": "Hawaiian"
            }],
            "UY": [{
                "tzid": "America/Montevideo",
                "name": "Montevideo"
            }],
            "YT": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "MU": [{
                "tzid": "Indian/Mauritius",
                "name": "Mauritius"
            }],
            "KN": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "LB": [{
                "tzid": "Asia/Beirut",
                "name": "Middle East"
            }],
            "LC": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "LA": [{
                "tzid": "Asia/Bangkok",
                "name": "SE Asia"
            }],
            "TV": [{
                "tzid": "Pacific/Funafuti",
                "name": "UTC+12"
            }],
            "TW": [{
                "tzid": "Asia/Taipei",
                "name": "Taipei"
            }],
            "TT": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "TR": [{
                "tzid": "Europe/Istanbul",
                "name": "Turkey"
            }],
            "LK": [{
                "tzid": "Asia/Colombo",
                "name": "Sri Lanka"
            }],
            "LI": [{
                "tzid": "Europe/Zurich",
                "name": "W. Europe"
            }],
            "TN": [{
                "tzid": "Africa/Tunis",
                "name": "W. Central Africa"
            }],
            "TO": [{
                "tzid": "Pacific/Tongatapu",
                "name": "Tonga"
            }],
            "TL": [{
                "tzid": "Asia/Dili",
                "name": "Tokyo"
            }],
            "TM": [{
                "tzid": "Asia/Ashgabat",
                "name": "West Asia"
            }],
            "TJ": [{
                "tzid": "Asia/Dushanbe",
                "name": "West Asia"
            }],
            "LS": [{
                "tzid": "Africa/Johannesburg",
                "name": "South Africa"
            }],
            "TH": [{
                "tzid": "Asia/Bangkok",
                "name": "SE Asia"
            }],
            "TG": [{
                "tzid": "Africa/Abidjan",
                "name": "Greenwich"
            }],
            "TD": [{
                "tzid": "Africa/Ndjamena",
                "name": "W. Central Africa"
            }],
            "TC": [{
                "tzid": "America/Grand_Turk",
                "name": "SA Western"
            }],
            "LY": [{
                "tzid": "Africa/Tripoli",
                "name": "Libya"
            }],
            "VA": [{
                "tzid": "Europe/Rome",
                "name": "W. Europe"
            }],
            "VC": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "AE": [{
                "tzid": "Asia/Dubai",
                "name": "Arabian"
            }],
            "VE": [{
                "tzid": "America/Caracas",
                "name": "Venezuela"
            }],
            "AG": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "VG": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "AI": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "VI": [{
                "tzid": "America/Port_of_Spain",
                "name": "SA Western"
            }],
            "IS": [{
                "tzid": "Atlantic/Reykjavik",
                "name": "Greenwich"
            }],
            "IR": [{
                "tzid": "Asia/Tehran",
                "name": "Iran"
            }],
            "AM": [{
                "tzid": "Asia/Yerevan",
                "name": "Caucasus"
            }],
            "IT": [{
                "tzid": "Europe/Rome",
                "name": "W. Europe"
            }],
            "VN": [{
                "tzid": "Asia/Bangkok",
                "name": "SE Asia"
            }],
            "AS": [{
                "tzid": "Pacific/Pago_Pago",
                "name": "UTC-11"
            }],
            "AR": [{
                "tzid": "America/Argentina/Salta",
                "name": "Argentina"
            }],
            "IM": [{
                "tzid": "Europe/London",
                "name": "GMT"
            }],
            "IL": [{
                "tzid": "Asia/Jerusalem",
                "name": "Israel"
            }],
            "IO": [{
                "tzid": "Indian/Chagos",
                "name": "Central Asia"
            }],
            "IN": [{
                "tzid": "Asia/Kolkata",
                "name": "India"
            }],
            "TZ": [{
                "tzid": "Africa/Nairobi",
                "name": "E. Africa"
            }],
            "AZ": [{
                "tzid": "Asia/Baku",
                "name": "Azerbaijan"
            }],
            "IE": [{
                "tzid": "Europe/Dublin",
                "name": "GMT"
            }],
            "ID": [{
                "tzid": "Asia/Jakarta",
                "name": "Jakarta"
            }, {
                "tzid": "Asia/Makassar",
                "name": "Singapore"
            }, {
                "tzid": "Asia/Jayapura",
                "name": "Tokyo"
            }],
            "UA": [{
                "tzid": "Europe/Kiev",
                "name": "Kiev"
            }],
            "QA": [{
                "tzid": "Asia/Qatar",
                "name": "Arab"
            }],
            "MZ": [{
                "tzid": "Africa/Maputo",
                "name": "South Africa"
            }]
        }

        for (var i in timezone_json[countryCode]) {
            var timezoneObj = timezone_json[countryCode][i];
            var now = moment(new Date())
            // console.log(moment.tz(now, timezoneObj.tzid).format('Z'));
            var string = moment.tz(now, timezoneObj.tzid).format('Z');
            var zone = string.charAt(0);
            var hour = parseInt(string.slice(1, 3), 10);
            var value = zone + hour;
            $('#selected_hour').val(value);
            add = zone + hour;
            getTime(timeZone = add)
            $('#databaseCountry').hide();
            $('#newCountry').text(timezoneObj.name);
        }
    };


    //for country time
    function getTime(timeZone = add) {
        var meridiems = " AM";

        if (timeZone == 0) {
            $.ajax({
                url: "{{ env('APP_URL') }}/api/get_server_time",
                data: {},
                success: function(data) {
                    if (data != "") {
                        let res = JSON.parse(data)
                        console.log(res.hours)
                        var hours = res.hours;
                        var minutes = res.minutes;
                        var seconds = res.seconds;
                        var day_in_full = res.date;
                        var date = res.day;
                        var s_month = res.month;
                        var year = res.year;

                        if (hours > 11) {
                            hours = hours - 12;
                            meridiems = " PM";
                        }
                        if (hours === 0) {
                            hours = 12;
                        }
                        if (hours < 10) {
                            hours = "0" + hours;
                        }
                        if (minutes < 10) {
                            minutes = "0" + minutes;
                        }
                        if (seconds < 10) {
                            seconds = "0" + seconds;
                        }
                        $("#hour").text(hours);
                        $("#minute").text(minutes);
                        $("#second").text(seconds);
                        $("#meridiem").text(meridiems);
                        $("#calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                        localStorage.setItem("time", JSON.stringify(JSON.parse(data)));
                        var divs = document.getElementsByTagName("div");
                        for (var i = divs.length; i--;) {
                            var div = divs[i];
                            if (div.className === "response") {
                                div.style.display = "none";
                                // ul.style.display = "none";
                            }

                            if (div.className === "responses") {
                                div.style.display = "block";
                                // ul.style.display = "none";
                            }
                        }
                    } else {
                        res = JSON.parse(localStorage.getItem("time"));
                        console.log(res);
                        day_in_full = res.date;
                        date = res.day;
                        s_month = res.month;
                        year = res.year;
                        console.log("year " + year)
                        $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                        var divs = document.getElementsByTagName("div");
                        for (var i = divs.length; i--;) {
                            var div = divs[i];
                            if (div.className === "response") {
                                div.style.display = "block";
                                // ul.style.display = "none";
                            }

                            if (div.className === "responses") {
                                div.style.display = "none";
                                // ul.style.display = "none";
                            }
                        }

                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error: ", error);
                    res = JSON.parse(localStorage.getItem("time"));
                    console.log(res);
                    day_in_full = res.date;
                    date = res.day;
                    s_month = res.month;
                    year = res.year;
                    console.log("year " + year)
                    $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                    var divs = document.getElementsByTagName("div");
                    for (var i = divs.length; i--;) {
                        var div = divs[i];
                        if (div.className === "response") {
                            div.style.display = "block";
                            // ul.style.display = "none";
                        }

                        if (div.className === "responses") {
                            div.style.display = "none";
                            // ul.style.display = "none";
                        }
                    }
                }
            })
        } else {
            $.ajax({
                url: "{{ env('APP_URL') }}/api/get_raw_server_time",
                data: {},
                success: function(data) {
                    if (data != "") {
                        let res = JSON.parse(data)

                        console.log(res.hours)
                        var hours = res.hours + parseInt(timeZone);
                        var minutes = res.minutes;
                        var seconds = res.seconds;
                        var day_in_full = res.date;
                        var date = res.day;
                        var s_month = res.month;
                        var year = res.year;

                        if (hours > 11) {
                            hours = hours - 12;
                            meridiems = " PM";
                        }
                        if (hours === 0) {
                            hours = 12;
                        }
                        if (hours < 10) {
                            hours = "0" + hours;
                        }
                        if (minutes < 10) {
                            minutes = "0" + minutes;
                        }
                        if (seconds < 10) {
                            seconds = "0" + seconds;
                        }
                        $("#hour").text(hours);
                        $("#minute").text(minutes);
                        $("#second").text(seconds);
                        $("#meridiem").text(meridiems);
                        $("#calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                        localStorage.setItem("time", JSON.stringify(JSON.parse(data)));
                        var divs = document.getElementsByTagName("div");
                        for (var i = divs.length; i--;) {
                            var div = divs[i];
                            if (div.className === "response") {
                                div.style.display = "none";
                                // ul.style.display = "none";
                            }

                            if (div.className === "responses") {
                                div.style.display = "block";
                                // ul.style.display = "none";
                            }
                        }
                    } else {
                        res = JSON.parse(localStorage.getItem("time"));
                        console.log(res);
                        day_in_full = res.date;
                        date = res.day;
                        s_month = res.month;
                        year = res.year;
                        console.log("year " + year)
                        $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                        var divs = document.getElementsByTagName("div");
                        for (var i = divs.length; i--;) {
                            var div = divs[i];
                            if (div.className === "response") {
                                div.style.display = "block";
                                // ul.style.display = "none";
                            }

                            if (div.className === "responses") {
                                div.style.display = "none";
                                // ul.style.display = "none";
                            }
                        }

                    }
                },
                error: function(xhr, status, error) {
                    console.log("Error: ", error);
                    res = JSON.parse(localStorage.getItem("time"));
                    console.log(res);
                    day_in_full = res.date;
                    date = res.day;
                    s_month = res.month;
                    year = res.year;
                    console.log("year " + year)
                    $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                    var divs = document.getElementsByTagName("div");
                    for (var i = divs.length; i--;) {
                        var div = divs[i];
                        if (div.className === "response") {
                            div.style.display = "block";
                            // ul.style.display = "none";
                        }

                        if (div.className === "responses") {
                            div.style.display = "none";
                            // ul.style.display = "none";
                        }
                    }
                }
            })
        }
    }
    setInterval(getTime, 1000);



    function getRawTime() {
        $.ajax({
            url: "{{ env('APP_URL') }}/api/get_raw_server_time",
            data: {},
            success: function(data) {
                if (data != "") {
                    let res = JSON.parse(data)
                    console.log(res.hours)
                    var hours = res.hours + 1;
                    var minutes = res.minutes;
                    var seconds = res.seconds;
                    var day_in_full = res.date;
                    var date = res.day;
                    var s_month = res.month;
                    var year = res.year;

                    if (hours > 11) {
                        hours = hours - 12;
                        meridiems = " PM";
                    }
                    if (hours === 0) {
                        hours = 12;
                    }
                    if (hours < 10) {
                        hours = "0" + hours;
                    }
                    if (minutes < 10) {
                        minutes = "0" + minutes;
                    }
                    if (seconds < 10) {
                        seconds = "0" + seconds;
                    }
                    $("#hour1").text(hours);
                    $("#minute1").text(minutes);
                    $("#second1").text(seconds);
                    $("#meridiem1").text(meridiems);
                    $("#calendar1").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                    localStorage.setItem("time", JSON.stringify(JSON.parse(data)));
                    var divs = document.getElementsByTagName("div");
                    for (var i = divs.length; i--;) {
                        var div = divs[i];
                        if (div.className === "response") {
                            div.style.display = "none";
                            // ul.style.display = "none";
                        }

                        if (div.className === "responses") {
                            div.style.display = "block";
                            // ul.style.display = "none";
                        }
                    }
                } else {
                    res = JSON.parse(localStorage.getItem("time"));
                    console.log(res);
                    day_in_full = res.date;
                    date = res.day;
                    s_month = res.month;
                    year = res.year;
                    console.log("year " + year)
                    $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                    var divs = document.getElementsByTagName("div");
                    for (var i = divs.length; i--;) {
                        var div = divs[i];
                        if (div.className === "response") {
                            div.style.display = "block";
                            // ul.style.display = "none";
                        }

                        if (div.className === "responses") {
                            div.style.display = "none";
                            // ul.style.display = "none";
                        }
                    }

                }
            },
            error: function(xhr, status, error) {
                console.log("Error: ", error);
                res = JSON.parse(localStorage.getItem("time"));
                console.log(res);
                day_in_full = res.date;
                date = res.day;
                s_month = res.month;
                year = res.year;
                console.log("year " + year)
                $("#storage_calendar").text(day_in_full + " - " + date + " - " + s_month + " - " + year);
                var divs = document.getElementsByTagName("div");
                for (var i = divs.length; i--;) {
                    var div = divs[i];
                    if (div.className === "response") {
                        div.style.display = "block";
                        // ul.style.display = "none";
                    }

                    if (div.className === "responses") {
                        div.style.display = "none";
                        // ul.style.display = "none";
                    }
                }
            }
        })
    }
    setInterval(getRawTime, 1000);
</script>
@endsection
