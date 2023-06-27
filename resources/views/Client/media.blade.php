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

<!-- BEGIN THEME GLOBAL STYLES -->
<!-- <link href="{{Path::asset('admin/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css"> -->
<!-- END THEME GLOBAL STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<!-- <link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css"> -->

<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">
<link href="{{Path::asset('admin/plugins/drag-and-drop/dragula/dragula.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/drag-and-drop/dragula/example.css')}}" rel="stylesheet" type="text/css" />

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
                            <h1 class="" style="color:var(--tableTitleColor1)"> Media Content</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Manage your master and scheduled video!</p>
                        </div>
                    </div>

                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                        <div class="d-flex justify-content-sm-end justify-content-center">
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
                            swal("Uploaded", "{!! Session::get('success') !!}", "success");
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
                        <!-- Add Modal -->
                        <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                            <div class="modal-dialog @if(Permission::check('can_upload_media_contents')) modal-xl @endif modal-dialog-centered" role="document">
                                <div class="modal-content" style="background:var(--dashboardCard)">
                                    <form id="addContactModalTitle" method="post" action="{{route('media.store')}}" enctype="multipart/form-data">

                                        <div class="modal-body">
                                            <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                            <div class="add-contact-box">
                                                <div class="add-contact-content">

                                                    @csrf


                                                    <div class="row">

                                                        <div class="@if(Permission::check('can_upload_media_contents')) col-md-6 @else col-md-12 @endif">
                                                            <div class="row"><br>
                                                            @if(Permission::check('can_upload_media_contents'))
                                                                <div class="col-md-12">
                                                                    <div class="contact-occupation">
                                                                        <i class="flaticon-fill-area"></i>
                                                                        <input type="text" id="c-occupation" name="title" class="form-control" placeholder="Title" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                    </div>
                                                                    <Br>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-4">
                                                                        <textarea class="form-control" id="descMedia" name="description" placeholder="Enter Description" rows="2" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                                                                    </div>
                                                                </div>
                                                                @endif
                                                                <br><br><Br>
                                                                <div class="col-md-12" style="display: flex; justify-content: center;  align-items: center; text-align: center;padding:40px 0px">
                                                                    <span id="showLastImage"></span>
                                                                    <br><br>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @if(Permission::check('can_upload_media_contents'))
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <input type="hidden" name="id" id="mediaID" class="form-control" required>
                                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                                        <label>Update Media File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
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
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @if(Permission::check('can_upload_media_contents'))
                                        <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                            <button id="btn-edit" class="float-left btn">Update</button>

                                            <button class="btn" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                                            <!-- <button type="submit" id="btn-add" class="btn">Add Media</button> -->
                                        </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                        </div>


                        <!-- schedule model -->
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog  modal-dialog-centered" role="document">
                                <div class="modal-content" style="background:var(--dashboardCard)">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel" style="color:var(--blackText)"><b>Reschedule item<span id="scheduleItem"></span></b></h5>
                                    </div>

                                    <form method="post" action="{{route('media.schedule')}}" enctype="multipart/form-data">@csrf
                                        <div class="modal-body">
                                            <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                            <div class="add-contact-box">
                                                <div class="add-contact-content">

                                                    @csrf


                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="form-group mb-0" style="margin: 35px 0px;">
                                                                <input class="form-control" name="id" id="schduleID" type="hidden">
                                                                <h5 style="text-align: center; " class="text-info">Start date & time</h5>
                                                                <b>
                                                                    <h6 style="text-align: left; color:var(--blackText)" id="startTime"></h6>
                                                                </b>
                                                                <input class="form-control" name="start" type="datetime-local" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">

                                                            <div class="form-group mb-0" style="margin: 35px 0px;">
                                                                <h5 style="text-align: center; " class="text-info">End date & time</h5>
                                                                <b>
                                                                    <h6 style="text-align: left; color:var(--blackText)" id="endTime"></h6>
                                                                </b>
                                                                <input class="form-control" name="end" type="datetime-local" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                            <button id="btn-edit" class="float-left btn">Reschedule</button>

                                            <button class="btn" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                                        </div>
                                    </form>

                                </div>
                            </div>


                        </div>


                    </div>
                </div>



                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home00" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                    <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon>
                                </svg> Playlist</a>
                        </li>
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-play-circle">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                </svg> Master Videos</a>
                        </li>
                        @if($setting->allow_scheduling)
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-clock">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <polyline points="12 6 12 12 16 14"></polyline>
                                </svg>Scheduled</a>
                        </li>
                        @endif
                        @if(Permission::check('can_upload_media_contents'))
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile100" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Add Media</a>
                        </li>
                        @endif
                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">

                        <div class="tab-pane fade show active" id="rounded-pills-icon-home00" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content" style="width: 100%;display: block; margin: 0px auto 50px auto; ">
                                        <div class="col-md-12   layout-spacing">
                                            <div class="statbox  box box-shadow">
                                                <div class="widget-content ">
                                                    <div class='parent ex-2'>
                                                        <div class='row'>
                                                            <div style="width: 100%;">
                                                                <div class="widget-header">
                                                                    <div style="display: block; margin:10px auto 30px auto; width: 50%; text-align: center;">
                                                                        <h2 class="text-center" style="color:var(--blackText)">Playlist Arrangement</h2>
                                                                    </div>
                                                                    <p class="text-center" style="font-size:15px; color:var(--tableTitleColor2) ">
                                                                        <b>Note:</b><br> You can Drag and re-arrange items.
                                                                    </p>
                                                                </div>
                                                                <div id='mediaDrag' class='dragula' style="width: 100%;">
                                                                    @foreach($playlists as $playlist)
                                                                    <div class="media   d-block d-sm-flex" style="width: 100%;" data-index="{{$playlist->id}}" data-position="{{$playlist->position}}">
                                                                        <div @if($playlist->position < 10) class="numberCircle" @else class="numberCircle1" @endif>{{$playlist->position}}</div>
                                                                            @if($playlist->content_type == 'schedule')
                                                                            @if($playlist->type == 'image')
                                                                            <img src="{{Variables::tvPath('videobank/item'.$playlist->file.'.'.$playlist->extension)}}" style="width:70px; height:70px; margin-left: 40px; border:0px; border-radius: 0px;" alt="">
                                                                            @else
                                                                            <video src="{{Variables::tvPath('videobank/item'.$playlist->file.'.'.$playlist->extension)}}" style="margin-left: 40px; width:70px; height:70px; margin-top:-10px "> </video>
                                                                            &nbsp;&nbsp;
                                                                            @endif
                                                                            @else
                                                                            @if($playlist->type == 'image')
                                                                            <img src="{{Variables::tvPath('video/item'.$playlist->file.'.'.$playlist->extension)}}" style="width:70px; height:70px; margin-left: 40px; border:0px; border-radius: 0px;" alt="">
                                                                            @else
                                                                            <video src="{{Variables::tvPath('video/item'.$playlist->file.'.'.$playlist->extension)}}" style="margin-left: 40px; width:70px; height:70px; margin-top:-10px "> </video>
                                                                            &nbsp;&nbsp;
                                                                            @endif
                                                                            @endif
                                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <div class="media-body">
                                                                            <div class="d-flex justify-content-between" style="width:100%">
                                                                                <div class="" style="width:60%">
                                                                                    <h6 class="" style="color:var(--blackText)">{{$playlist->title}}</h6>
                                                                                    <p class="" style="width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis"><span style="color:var(--primary)">item{{$playlist->file}}</span></p>
                                                                                </div>
                                                                                <div class="" style="width:50%; text-align:center">
                                                                                    @if($playlist->content_type == 'schedule')
                                                                                    @if(strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) <= strtotime($playlist->start) && strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) < strtotime($playlist->end))
                                                                                            <div class="classSchedule classDefault">Scheduled Media</div>
                                                                                            @elseif(strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) >= strtotime($playlist->start) && strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) < strtotime($playlist->end))
                                                                                                <div class="classSchedule classSuccess">Running Media</div>
                                                                                                @else
                                                                                                <div class="classSchedule classDanger">Expired Media</div>
                                                                                                @endif
                                                                                                @else
                                                                                                <div class="classSchedule classPrimary">Master Media</div>
                                                                                                @endif
                                                                                </div>
                                                                                <div class="" style="width:10%">
                                                                                    <div style="display: inline-block;">
                                                                                        <div style="margin-top: 13px;">
                                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                                <input id="{{$playlist->id}}" class="mediaSwitch" type="checkbox" @if($playlist->is_active == true) checked @endif>
                                                                                                <span class="slider round"></span>
                                                                                            </label>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
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

                        <div class="tab-pane fade " id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content" style="width: 100%;">
                                        <div class="" style="width: 25%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <h4 style="color:var(--blackText)">Preview</h4>
                                        </div>
                                        <div class="user-email" style="width: 25%; text-align: center; margin-left:-8px">
                                            <h4 style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 25%; text-align: center;">
                                            <h4 style="color:var(--blackText)">Title</h4>
                                        </div>
                                        <div class="user-email" style="width: 25%; text-align: center;">
                                            <h4 style="color:var(--blackText)">Description</h4>
                                        </div>
                                        <!-- <div class="user-location" style="width: 25%; text-align: center;">
                                            <h4 style="margin-left: 0;">Status</h4>
                                        </div> -->
                                        <div class="action-btn" style="width: 25%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                <circle cx="12" cy="12" r="3"></circle>
                                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>

                                @if(count($medias) > 0)
                                @foreach($medias as $media )
                                <div class="items">
                                    <div class="item-content">
                                        <div class="user-profile" style="width: 25%; text-align: left;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <a href="#" data-toggle="modal" data-target="#addContactModal" onclick="var id = '{{$media->id}}';  
                                            var description = '{{$media->description}}'; 
                                            var type = '{{$media->type}}'; 
                                            document.getElementById('mediaID').value = id;
                                            type == 'image'   ?  document.getElementById('showLastImage').innerHTML = '<img src=\'{{Variables::tvPath("video/item".$media->file.".".$media->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\'  >'
                                            :
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("video/item".$media->file.".".$media->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('descMedia').value = description;
                                            document.getElementById('c-occupation').value = '{{$media->title}}';
                                            ">
                                                @if($media->type == 'image')
                                                <img src="{{Variables::tvPath('video/item'.$media->file.'.'.$media->extension)}}" style="width:70px; height:70px; margin-left: 40px;" alt="">
                                                @else
                                                <video src="{{Variables::tvPath('video/item'.$media->file.'.'.$media->extension)}}" style="margin-left: 40px; width:70px; height:70px; margin-top:-10px "> </video>
                                                &nbsp;&nbsp;
                                                @endif
                                            </a>
                                        </div>

                                        <div class="user-email" style="width: 25%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-name" data-name="item{{$media->file}}" style="font-size: 14px; color:var(--tableFontColor)">&nbsp;&nbsp;&nbsp;item{{$media->file}}</p>
                                                <p class="user-work" data-occupation="{{$media->title}}">&nbsp;&nbsp;&nbsp;({{$media->type}})</p>
                                            </div>
                                        </div>
                                        <div class="user-email" style="width: 25%; text-align: center;">
                                            <p class="usr-email-addr" data-email="{{$media->title}}" style="font-size: 14px; color:var(--tableFontColor); display: block; margin-left: 40px;">{{$media->title}}</p>
                                        </div>
                                        <div class="user-email" style="width: 25%; text-align: center; ">
                                            <p class="usr-email-addr" data-email="{{$media->description}}" style="font-size: 14px; color:var(--tableFontColor) ;display: block; margin-left: 40px;">{{$media->description}}</p>
                                        </div>


                                        <div class="action-btn" style="width: 25%; text-align: right;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit" onclick=" var id = '{{$media->id}}';  
                                            var description = '{{$media->description}}'; 
                                            var type = '{{$media->type}}'; 
                                            document.getElementById('mediaID').value = id;
                                            type == 'image'   ?  document.getElementById('showLastImage').innerHTML = '<img src=\'{{Variables::tvPath("video/item".$media->file.".".$media->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\'  >'
                                            :
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("video/item".$media->file.".".$media->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('descMedia').value = description;
                                            ">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                            </svg>

                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                @else
                                <h2 class="text-center text-danger" style="margin-top:100px">You have not uploaded Media for this display!<h2>
                                        @endif

                            </div>
                        </div>

                        @if($setting->allow_scheduling)
                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">

                                    <div class="searchable-items list">
                                        <div class="items items-header-section">
                                            <div class="item-content">
                                                <div class="" style="width: 16.6%; text-align: left;">
                                                    <div class="n-chk align-self-center text-center">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input" id="contact-check-all">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <h4 style="color:var(--blackText)">Preview</h4>
                                                </div>
                                                <div class="user-email" style="width: 16.6%; text-align: center; margin-left:-8px">
                                                    <h4 style="color:var(--blackText)"> File Type</h4>
                                                </div>
                                                <div class="user-location" style="width: 16.6%; text-align: center;">
                                                    <h4 class="text-center" style="color:var(--blackText)">Start Time</h4>
                                                </div>
                                                <div class="user-location" style="width: 16.6%; text-align: center;">
                                                    <h4 class="text-center" style="color:var(--blackText)">End Time</h4>
                                                </div>
                                                <div class="user-location" style="width: 16.6%; text-align: center;">
                                                    <h4 class="text-center" style="color:var(--blackText)">Status</h4>
                                                </div>
                                                <div class="action-btn" style="width: 16.6%; text-align: right;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                                        <circle cx="12" cy="12" r="3"></circle>
                                                        <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>

                                        @if(count($medias) > 0)
                                        @foreach($schedules as $schedule )
                                        <div class="items">
                                            <div class="item-content">
                                                <div class="user-profile" style="width: 16.6%; text-align: left;">
                                                    <div class="n-chk align-self-center text-center">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input contact-chkbox">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </div>

                                                    @if($schedule->type == 'image')
                                                    <img src="{{Variables::tvPath('videobank/item'.$schedule->file.'.png')}}" style="width:70px; height:70px; margin-left: 40px;" alt="">
                                                    @else
                                                    <video src="{{Variables::tvPath('videobank/item'.$schedule->file.'.mp4')}}" style="margin-left: 40px; width:70px; height:70px; margin-top:-10px "> </video>
                                                    &nbsp;&nbsp;
                                                    @endif
                                                </div>

                                                <div class="user-email" style="width: 16.6%; text-align: center;">
                                                    <div class="user-meta-info">
                                                        <p class="user-name" data-name="item{{$schedule->file}}" style="font-size: 14px; color:var(--tableFontColor)">&nbsp;&nbsp;&nbsp;item{{$schedule->file}}</p>
                                                        <p class="user-work" data-occupation="{{$schedule->title}}">&nbsp;&nbsp;&nbsp;({{$schedule->type}})</p>
                                                    </div>
                                                </div>


                                                <div class="user-email" style="width: 16.6%; text-align: center;">
                                                    <p class="info-title">Start: </p>
                                                    <p class="usr-email-addr" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">
                                                        {{date('d-m-Y', strtotime($schedule->start))}} <br> Time: {{date('H:i', strtotime($schedule->start))}}
                                                    </p>
                                                </div>


                                                <div class="user-email" style="width: 16.6%; text-align: center;">
                                                    <p class="info-title">End: </p>
                                                    <p class="usr-email-addr" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">
                                                        {{date('d-m-Y', strtotime($schedule->end))}} <br> Time: {{date('H:i', strtotime($schedule->end))}}
                                                    </p>
                                                </div>


                                                <div class="user-location" style="width: 16.6%; text-align: center; padding-left:40px ">
                                                    <p class="info-title" style="font-size: 14px;">Status: </p>
                                                    @if(strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) <= strtotime($schedule->start) && strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) < strtotime($schedule->end))
                                                            <div class="classSchedule1 classDefault">Scheduled</div>
                                                            @elseif(strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) >= strtotime($schedule->start) && strtotime(date("Y-m-d H:i:s", strtotime($setting->time_zone.' hour'))) < strtotime($schedule->end))
                                                                <div class="classSchedule1 classSuccess">Running</div>
                                                                @else
                                                                <div class="classSchedule1 classDanger">Expired</div>
                                                                @endif
                                                </div>


                                                <div class="action-btn" style="width: 16.6%; text-align: right;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit" onclick=" var id = '{{$schedule->id}}';  
                                            var description = '{{$schedule->description}}'; 
                                            var type = '{{$schedule->type}}'; 
                                            document.getElementById('mediaID').value = id;
                                            type == 'image'   ?  document.getElementById('showLastImage').innerHTML = '<img src=\'{{Variables::tvPath("videobank/item".$schedule->file.".".$schedule->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\'  >'
                                            :
                                            document.getElementById('showLastImage').innerHTML = '<video controls src=\'{{Variables::tvPath("videobank/item".$schedule->file.".".$schedule->extension)}}\' style=\'max-width: 50%; display:block; margin: auto;\' > </video>'; 
                                            document.getElementById('descMedia').value = description;
                                            ">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                    </svg>

                                                    &nbsp;&nbsp;
                                                    <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('schduleID').value = '{{$schedule->id}}';  
                                            document.getElementById('scheduleItem').innerHTML = '{{$schedule->file}}';  
                                            document.getElementById('endTime').innerHTML = '{{date("d-m-Y", strtotime($schedule->end))." - Time: ".date('H:i', strtotime($schedule->end))}}';  
                                            document.getElementById('startTime').innerHTML = '{{date("d-m-Y", strtotime($schedule->start))." - Time: ".date('H:i', strtotime($schedule->start))}}';">
                                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 24 24" stroke-width="2" style="fill: var(--tableFontColor)">
                                                            <path d="M12 0c6.623 0 12 5.377 12 12s-5.377 12-12 12-12-5.377-12-12 5.377-12 12-12zm0 1c6.071 0 11 4.929 11 11s-4.929 11-11 11-11-4.929-11-11 4.929-11 11-11zm0 11h6v1h-7v-9h1v8z" />
                                                        </svg>
                                                    </a>

                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        @else
                                        <h2 class="text-center text-danger" style="margin-top:100px">You have not uploaded Media for this display!<h2>
                                                @endif


                                    </div>

                                </div>
                            </div>
                        </div>
                        @endif


                        <div class="tab-pane fade" id="rounded-pills-icon-profile100" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body ">
                                    <form method="post" action="{{route('media.store')}}" enctype="multipart/form-data"> @csrf
                                        <div class="searchable-items list">
                                            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
                                                <div class="info">

                                                    <div class="row">
                                                        <div class="col-md-8" style="margin: auto;">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="col-md-12">
                                                                        <div class="contact-occupation">
                                                                            <i class="flaticon-fill-area"></i>
                                                                            <input type="text" name="title" class="form-control" maxlength="15" placeholder="Title" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                        </div>
                                                                        <Br>
                                                                    </div>

                                                                    <div class="col-md-12">
                                                                        <div class="form-group mb-4">
                                                                            <textarea class="form-control" id="descMedia" name="description" maxlength="30" placeholder="Enter Description" rows="2" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                    <hr>
                                                                    <div class="col-md-12">
                                                                        <h5 class="text-center">Content Type</h5>
                                                                        <Br>
                                                                    </div>
                                                                    <div class="col-md-12 text-center">
                                                                        <select name="content_type" id="" onchange="handleClick(this)" class="form-control" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                            <option value="">Choose Content Type</option>
                                                                            <option value="master">Master Media</option>
                                                                            <option value="schedule">Schedule Media</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-md-12" id="showTimeNow" style="display:none">
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb-0" style="margin: 35px 0px;">
                                                                                    <h5 style="text-align: center; " class="text-info">Start date & time</h5>
                                                                                    <input class="form-control" name="start" type="datetime-local" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="form-group mb-0" style="margin: 35px 0px;">
                                                                                    <h5 style="text-align: center; " class="text-info">End date & time</h5>
                                                                                    <input class="form-control" name="end" type="datetime-local"  style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="row">
                                                                        <div class="col-md-12">
                                                                            <input type="hidden" name="id" value="0" id="mediaID" class="form-control" required>
                                                                            <div class="custom-file-container" data-upload-id="myFirstImage1">
                                                                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
                                                                                <label class="custom-file-container__custom-file">
                                                                                    <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input" required>
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
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <br><br>
                                                            <button class="btn btn-success" type="submit" style="display: block; margin:30px auto 45px auto; width:200px">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                    <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                                                </svg> &nbsp;&nbsp; Save
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
</div>
</div>
@endsection

@section('js')
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


<script>
    $(document).ready(function() {
        $(".mediaSwitch").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            console.log(status);
            $.ajax({
                type: "POST",
                url: "{{route('media.switch')}}",
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
                },
                error: function(e) {
                    // new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
</script>


<script>
    $(document).ready(function() {
        $('#mediaDrag').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('updated');
                    }
                });

                saveNewPositions();
            }
        });
    });

    function saveNewPositions() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated');
        });

        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{route('positioning')}}",
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
                    title: 'Arranged Successfully',
                    padding: '2em',
                })
            },
            error: function(error) {
                console.log(error);
            },
        });

    }

    //re-arrange-position
</script>

<script>
    function handleClick(myRadio) {
        var data = myRadio.value;
        if (data == 'master') {
            $('#showTimeNow').hide();
        } else if (data == '') {
            $('#showTimeNow').hide();
        } else {
            $('#showTimeNow').show();
        }
    }
</script>
@endsection