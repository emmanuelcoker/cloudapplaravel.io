@extends('layouts.client.default')

@section('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/widgets/modules-widgets.css')}}">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/elements/alert.css')}}">

<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">
<link href="{{Path::asset('admin/plugins/tagInput/tags-input.css')}}" rel="stylesheet" type="text/css" />
<style>
    .fillColor:hover {
        fill: white
    }

    .fillColor::selection {
        fill: white
    }

    /* .sectionStatus {
        display: inline-block;
        margin: auto;
        width: 50px;
        padding: 2px 7px;
        border-radius: 30px;
        background: transparent;
        border: whitesmoke 4px solid;
        color: black;
    } */
</style>
<style>
    .classSchedule {
        margin: auto;
        padding: 3px 5px;
        color: white;
        border-radius: 40px;
        width: 50%;
        font-size: 10px;
    }


    .classSchedule1 {
        margin: auto;
        padding: 3px 5px;
        color: white;
        border-radius: 40px;
        width: 100%;
        font-size: 10px;
    }

    .numberCircle1 {
        display: block;
        padding: 6px 9px;
        background: var(--primary);
        color: white;
        font-size: 11px;
        border-radius: 100%;
        margin-right: -4px;
    }

    .numberCircle {
        display: block;
        padding: 5px 10px;
        background: var(--primary);
        color: white;
        font-size: 11px;
        border-radius: 100%;
        margin-right: -4px
    }

    @media screen and (max-width:900px) {
        .classSchedule1 {
            width: 100%;
        }

        .numberCircle1 {
            width: 25px;
        }

        .numberCircle {
            width: 25px;
        }
    }

    .classDefault {
        background: var(--purple);
    }

    .classSuccess {
        background: var(--success);
    }

    .classDanger {
        background: var(--danger);
    }

    .classPrimary {
        background: var(--primary);
    }
</style>
@endsection

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        <div class="col-lg-12">
            <div class="widget-content searchable-container list">

                <div class="row">

                <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> {{$tab->training}}</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your {{$tab->training}}!</p>
            </div>
                    </div>

                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">




                        <div class="switch align-self-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list view-list active-view">
                                <line x1="8" y1="6" x2="21" y2="6"></line>
                                <line x1="8" y1="12" x2="21" y2="12"></line>
                                <line x1="8" y1="18" x2="21" y2="18"></line>
                                <line x1="3" y1="6" x2="3" y2="6"></line>
                                <line x1="3" y1="12" x2="3" y2="12"></line>
                                <line x1="3" y1="18" x2="3" y2="18"></line>
                            </svg>
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid view-grid">
                                <rect x="3" y="3" width="7" height="7"></rect>
                                <rect x="14" y="3" width="7" height="7"></rect>
                                <rect x="14" y="14" width="7" height="7"></rect>
                                <rect x="3" y="14" width="7" height="7"></rect>
                            </svg> -->
                        </div>
                    </div>

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




                </div>



                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center fillColor" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>
                                Scheduling
                            </a>
                        </li>


                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-vd0" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tv">
                                    <rect x="2" y="7" width="20" height="15" rx="2" ry="2"></rect>
                                    <polyline points="17 2 12 7 7 2"></polyline>
                                </svg>All Videos</a>
                        </li>

                        <li class="nav-item ml-2 mr-2" >
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-vd1" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sun"><circle cx="12" cy="12" r="5"></circle><line x1="12" y1="1" x2="12" y2="3"></line><line x1="12" y1="21" x2="12" y2="23"></line><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line><line x1="1" y1="12" x2="3" y2="12"></line><line x1="21" y1="12" x2="23" y2="12"></line><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line></svg>Morning</a>
                        </li>

                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-vd2" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-sunset"><path d="M17 18a5 5 0 0 0-10 0"></path><line x1="12" y1="9" x2="12" y2="2"></line><line x1="4.22" y1="10.22" x2="5.64" y2="11.64"></line><line x1="1" y1="18" x2="3" y2="18"></line><line x1="21" y1="18" x2="23" y2="18"></line><line x1="18.36" y1="11.64" x2="19.78" y2="10.22"></line><line x1="23" y1="22" x2="1" y2="22"></line><polyline points="16 5 12 9 8 5"></polyline></svg>Afternoon</a>
                        </li>

                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-vd3" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-moon"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path></svg>Evening</a>
                        </li>


                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg>Add Video</a>
                        </li>



                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two">
                                        <div class="widget-content">
                                            <div class="row" style="padding: 20px;">

                                                <div class="col-md-4" style="margin-bottom:30px">
                                                    @if($settings->morning)
                                                    <h2 class="text-center" style="color:var(--blackText)">Morning Section</h2>
                                                    <br>
                                                    <div class="card component-card_1">
                                                        <div class="card-body" style="background:var(--dashboardCard)">
                                                            @livewire('set-training-time', [$morning->id])
                                                            <hr>
                                                        <button class="btn btn-primary btn-md" style="display:block; margin:auto" onclick="window.open('{{Variables::tvPath("morning.html")}}', 'newwindow', 'width=1300, height=720'); return false;">View Morning Template</button>
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="alert custom-alert-1 mb-4" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                        <div class="media">
                                                            <div class="alert-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon">
                                                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                                </svg>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="alert-text">
                                                                    <strong><b>Disabled!</b> </strong><Br><span> Morning Scheduling has been disabled. </span>
                                                                </div>
                                                                <div class="alert-btn">
                                                                    <a href="{{route('support.index')}}" class="btn btn-default btn-dismiss">Contact Support Team</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

 

                                                <div class="col-md-4" style="margin-bottom:30px">
                                                    @if($settings->afternoon)
                                                    <h2 class="text-center" style="color:var(--blackText)">Afternoon Section</h2>
                                                    <br>
                                                    <div class="card component-card_1">
                                                        <div class="card-body" style="background:var(--dashboardCard)">
                                                            @livewire('set-training-time', [$afternoon->id])
                                                            <hr>
                                                        <button class="btn btn-primary btn-md" style="display:block; margin:auto" onclick="window.open('{{Variables::tvPath("afternoon.html")}}', 'newwindow', 'width=1300, height=720'); return false;">View Afternoon Template</button>
                                                       
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="alert custom-alert-1 mb-4" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                        <div class="media">
                                                            <div class="alert-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon">
                                                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                                </svg>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="alert-text">
                                                                    <strong><b>Disabled!</b> </strong> <br><span> Afternoon Scheduling has been disabled. </span>
                                                                </div>
                                                                <div class="alert-btn">
                                                                    <a href="{{route('support.index')}}" class="btn btn-default btn-dismiss">Contact Support Team</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>



                                                <div class="col-md-4" >
                                                    @if($settings->evening)
                                                    <h2 class="text-center" style="color:var(--blackText)">Evening Section</h2>
                                                    <br>
                                                    <div class="card component-card_1">
                                                        <div class="card-body" style="background:var(--dashboardCard)">
                                                            @livewire('set-training-time', [$evening->id])
                                                            <hr>
                                                        <button class="btn btn-primary btn-md" style="display:block; margin:auto" onclick="window.open('{{Variables::tvPath("evening.html")}}', 'newwindow', 'width=1300, height=720'); return false;">View Evening Template</button>
                                                        
                                                        </div>
                                                    </div>
                                                    @else
                                                    <div class="alert custom-alert-1 mb-4" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
                                                        <div class="media">
                                                            <div class="alert-icon">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-octagon">
                                                                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                                                                    <line x1="12" y1="8" x2="12" y2="12"></line>
                                                                    <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                                </svg>
                                                            </div>
                                                            <div class="media-body">
                                                                <div class="alert-text">
                                                                    <strong><b>Disabled!</b> </strong><br> <span> Evening Scheduling has been disabled. </span>
                                                                </div>
                                                                <div class="alert-btn">
                                                                    <a href="{{route('support.index')}}" class="btn btn-default btn-dismiss">Contact Support Team</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @endif
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade" id="rounded-pills-icon-vd0" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content">
                                        <div class="" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4  style="color:var(--blackText)">Preview</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Title</h4>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Sections</h4>
                                        </div>
                                        <div class="user-email" style="width: 10%; text-align:center;">
                                            <h4  style="color:var(--blackText)">Status</h4>
                                        </div>
                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <?php $x = 1;
                                $y = 1;  ?>
@if(count($tv->trainingVideos) > 0)
                                @foreach($tv->trainingVideos as $video)
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile" style="width: 20%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <a href="" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">
                                                <video src="{{Variables::tvPath('train/item'.$video->video.'.mp4')}}" style="width:70px; height:70px; margin-left: 40px; margin-top:-10px "> </video></a>
                                            &nbsp;&nbsp;

                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" data-occupation="{{$video->title}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Video)</p>
                                            </div>
                                        </div>
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <p class="info-title">Title: </p>
                                            <p class="usr-email-addr" data-email="{{$video->title}}" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">{{$video->title}}</p>
                                        </div>
                                        
                                        <div class="user-email" style="width: 20%; text-align: center;">
                                            <div style="margin-left:38px">
                                            @if($video->morning)
                                            <span class="badge badge-success"> M</span>
                                            @else
                                                <span class="badge outline-badge-success"> M</span>
                                            @endif
                                            @if($video->afternoon)
                                            <span class="badge badge-success"> A</span>
                                            @else
                                                <span class="badge outline-badge-success"> A</span>
                                            @endif
                                            @if($video->evening)
                                            <span class="badge badge-success"> E</span>
                                            @else
                                                <span class="badge outline-badge-success"> E</span>
                                            @endif
                                            </div>
                                        </div>

                                        <div class="action-btn" style="width: 10%; text-align: center;">
                                        <div style="margin-left:38px">
                                        <label class="switch s-outline s-outline-success  mb-4 mr-2" >
                                                                                                <input id="{{$video->id}}" class="trainingSwitch" type="checkbox" @if($video->is_active == true) checked @endif>
                                                                                                <span class="slider round"></span>
                                                                                            </label>
                                        </div>
                                        </div>

                                        <div class="action-btn" style="width: 10%; text-align: right;">
                                            <a href="#" style="display:inline" data-toggle="modal" onclick="
                                            document.getElementById('trainNo').value = '{{$video->id}}';
                                            document.getElementById('titleValue').value = '{{$video->title}}';
                                            <?php
                                            if ($video->morning == '1') {
                                                echo "document.getElementById('morningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('morningSection').checked  = false;";
                                            }

                                            if ($video->afternoon == '1') {
                                                echo "document.getElementById('afternoonSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('afternoonSection').checked  = false;";
                                            }

                                            if ($video->evening == '1') {
                                                echo "document.getElementById('eveningSection').checked  = true;";
                                            } else {
                                                echo "document.getElementById('eveningSection').checked  = false;";
                                            }
                                            ?>
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("train/item".$video->video.'.mp4')}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('trainingNameT').innerHTML = '{{$video->title}}';
                                            " data-target="#video2">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
 @else
                                <h3 class="text-center text-danger" style="margin:60px 0px">You have not uploaded Scheduled Videos for this display!<h2>
                                @endif
                            </div>
                        </div>

                      
                        @livewire('training-section')


                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">
                                    <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
                                        <form method="post" action="{{route('training.store')}}" enctype="multipart/form-data"> @csrf
                                            <div class="info">

                                                <div class="row">
                                                    <div class="col-md-4" style="margin: auto;">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="contact-occupation">
                                                                    <i class="flaticon-fill-area"></i>
                                                                    <input type="text" id="c-occupation" name="title" class="form-control" placeholder="Enter Video Title" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                </div>
                                                                <Br>
                                                            </div>
                                                            <br><br>
                                                        </div>

                                                        <div class="row" style="padding: 25px 0px ;">
                                                            <div class="col-md-12">
                                                                <label for=""><b>{{$tab->training}} Section</b></label>
                                                                <Br>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="n-chk">
                                                                    <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                                        <input type="checkbox" class="new-control-input" checked name="morning">
                                                                        <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;{{$morning->name}}</span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="n-chk">
                                                                    <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                                        <input type="checkbox" class="new-control-input" checked name="afternoon">
                                                                        <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;{{$afternoon->name}}</span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="n-chk">
                                                                    <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                                        <input type="checkbox" class="new-control-input" checked name="evening">
                                                                        <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;{{$evening->name}}</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="custom-file-container" data-upload-id="myFirstImage">
                                                                    <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                    <label class="custom-file-container__custom-file">
                                                                        <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input" >
                                                                        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                                        <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                                    </label>
                                                                    <div class="custom-file-container__image-preview"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button class="btn btn-success" type="submit" style="display: block; margin:30px auto 45px auto; width:200px">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                                </svg> &nbsp;&nbsp; Save
                                            </button>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>








    <!-- Add Modal -->
    <div class="modal fade" id="video2" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
            <div class="modal-content" style="background:var(--dashboardCard)">
                <form id="addContactModalTitle" method="post" action="{{route('training.update')}}" enctype="multipart/form-data">

                    <div class="modal-body">
                        <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                        <div class="add-contact-box">
                            <div class="add-contact-content">

                                @csrf


                                <div class="row">
                                    <div class="col-md-12">
                                        <h3 style="text-align: left; color:var(--blackText)"><span id="trainingNameT"></span></h3>
                                        <hr>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="contact-occupation">
                                                    <i class="flaticon-fill-area"></i>
                                                    <label for="">Title</label>
                                                    <input type="text" id="titleValue" name="title" class="form-control" placeholder="Title" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                </div>
                                                <Br>
                                            </div>

                                            <div class="row" style="margin: 20px auto 40px auto ;">
                                                <div class="col-md-12">
                                                    <label for=""><b>{{$tab->training}} Section</b></label>
                                                    <Br>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                            <input type="checkbox" class="new-control-input" id="morningSection" name="morning">
                                                            <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Morning</span>
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                            <input type="checkbox" class="new-control-input" id="afternoonSection" name="afternoon">
                                                            <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Afternoon</span>
                                                        </label>
                                                    </div>

                                                </div>
                                                <div class="col-md-4">
                                                    <div class="n-chk">
                                                        <label class="new-control new-checkbox new-checkbox-text checkbox-success">
                                                            <input type="checkbox" class="new-control-input" id="eveningSection" name="evening">
                                                            <span class="new-control-indicator"></span><span class="new-radio-content"> &nbsp;&nbsp;Evening</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                                <span id="showLastImage"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group mb-4">
                                                    <input type="hidden" name="id" class="form-control mb-4" id="trainNo" required>
                                                    <div class="custom-file-container" data-upload-id="myFirstImage1">
                                                        <label>Update {{$tab->training}} <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                        <label class="custom-file-container__custom-file">
                                                            <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input">
                                                            <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
                                                            <span class="custom-file-container__custom-file__custom-file-control"></span>
                                                        </label>
                                                        <div class="custom-file-container__image-preview"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">

                        <button class="float-left btn btn-success">Update</button>

                        <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>

</div>










@endsection

@section('js')
<!-- END GLOBAL MANDATORY SCRIPTS -->
<scripdocument.getElementByIddocument.getElementById src="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></scripdocument.getElementByIddocument.getElementById>
<script src="{{Path::asset('admin/assets/js/apps/contact.js')}}"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    var firstUpload = new FileUploadWithPreview('myFirstImage1')
</script>

<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>

<script src="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{Path::asset('admin/plugins/sweetalerts/custom-sweetalert.js')}}"></script>

<script src="{{Path::asset('admin/plugins/tagInput/tags-input.js')}}"></script>

<!-- morning positioning -->
<script>
 $(document).ready(function() {
        $('#mediaDragM').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position_morning') != (index + 1)) {
                        $(this).attr('data-position_morning', (index + 1)).addClass('updated');
                    }
                });
                saveNewPositionsMorning();
            }
        });
    });

    function saveNewPositionsMorning() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index_morning'), $(this).attr('data-position_morning')]);
            $(this).removeClass('updated');
        });
        // console.log(positions);
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{route('morning_positioning')}}",
            type: 'POST',
            data: {
                update: 1,
                positions: positions,
                _token: _token
            },
            success: function(response) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em'
                });

                new toast({
                    type: 'success',
                    title: 'Morning Playlist Arranged Successfully',
                    padding: '2em',
                })
                // console.log(response);
            },
            error: function(error) {
                console.log(error);
            },
        });

    }
</script>





<!-- afternoon positioning -->
<script>
 $(document).ready(function() {
        $('#mediaDragA').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position_afternoon') != (index + 1)) {
                        $(this).attr('data-position_afternoon', (index + 1)).addClass('updated');
                    }
                });
                saveNewPositionsAfternoon();
            }
        });
    });

    function saveNewPositionsAfternoon() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index_afternoon'), $(this).attr('data-position_afternoon')]);
            $(this).removeClass('updated');
        });
        // console.log(positions);
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{route('afternoon_positioning')}}",
            type: 'POST',
            data: {
                update: 1,
                positions: positions,
                _token: _token
            },
            success: function(response) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em'
                });

               new toast({
                    type: 'success',
                    title: 'Afternoon Playlist Arranged Successfully',
                    padding: '2em',
                })
                // console.log(response);
            },
            error: function(error) {
                console.log(error);
            },
        });

    }
</script>





<!-- evening positioning -->
<script>
 $(document).ready(function() {
        $('#mediaDragE').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position_evening') != (index + 1)) {
                        $(this).attr('data-position_evening', (index + 1)).addClass('updated');
                    }
                });
                saveNewPositionsEvening();
            }
        });
    });

    function saveNewPositionsEvening() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index_evening'), $(this).attr('data-position_evening')]);
            $(this).removeClass('updated');
        });
        // console.log(positions);
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{route('evening_positioning')}}",
            type: 'POST',
            data: {
                update: 1,
                positions: positions,
                _token: _token
            },
            success: function(response) {
                const toast = swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    padding: '2em'
                });

              new  toast({
                    type: 'success',
                    title: 'Evening Plyalist Arranged Successfully',
                    padding: '2em',
                })
                // console.log(response);
            },
            error: function(error) {
                console.log(error);
            },
        });

    }
</script>



<script>
    $(document).ready(function() {
        $(".trainingSwitch").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            console.log(status);
            $.ajax({
                type: "POST",
                url: "{{route('training.switch')}}",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    if (status) {
                        var turn = "On";
                    } else {
                        var turn = 'OFF';
                    }
                    new swal("Updated", result + " has been switched " + turn, "success");
                    window.livewire.emit('refreshTrainingSections');
                },
                error: function(e) {
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
</script>



@endsection