@extends('layouts.client.default')

@section('css')

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/widgets/modules-widgets.css')}}">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">

<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />


<style>
    .fillColor:hover {
        fill: white
    }

    .fillColor::selection {
        fill: white
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
                            <h1 class="" style="color:var(--tableTitleColor1)"> Announcement</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Mange your quick pop-up accouncement!</p>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">

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
                </div>



                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center fillColor" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers">
                                    <polygon points="12 2 2 7 12 12 22 7 12 2"></polygon>
                                    <polyline points="2 17 12 22 22 17"></polyline>
                                    <polyline points="2 12 12 17 22 12"></polyline>
                                </svg>
                                Template
                            </a>
                        </li>

                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings">
                                    <circle cx="12" cy="12" r="3"></circle>
                                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                                </svg>Setup</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">

                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two" style="border:2px solid var(--dashboardCard)">
                                        <div class="widget-content">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 style="color:var(--blackText)">Choose Your Template</h6>
                                                    <p class="meta-date-time">Template 1, 2, 3, 4, 5, 6 & 7</p>
                                                </div>
                                            </div>

                                            <!-- template 1 -->
                                            <div class="row" style="margin-top: 50px; text-align: center;">
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce1.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '1') checked @endif value="1" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- template 2 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce2.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '2') checked @endif value="2" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- template 3 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce3.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '3') checked @endif value="3" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- template 4 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce4.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '4') checked @endif value="4" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>

                                                <!-- template 5 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce5.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '5') checked @endif value="5" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>


                                                <!-- template 6 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce6.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '6') checked @endif value="6" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>


                                                <!-- template 7 -->
                                                <div class="col-md-4" style="margin:0px auto 30px auto">
                                                    <img src="{{Path::asset('images/announce7.jpg')}}" alt="" style="width: 250px; height:150px" class="img-responsive">
                                                    <div class="n-chk" style="margin-top: 15px;">
                                                        <label class="new-control new-checkbox checkbox-success">
                                                            <input type="radio" name="chooseTemplate" @if($announce->template == '7') checked @endif value="7" class="new-control-input chooseTemplate">
                                                            <span class="new-control-indicator"></span> .
                                                        </label>
                                                    </div>
                                                </div>


                                            </div>
                                            <div class="row">
                                                <div class="col-md-6" style="left:0px; right:0px; margin: auto;">
                                                    <br><br><br>
                                                    <button href="javascript:void(0);" class="btn btn-primary" style="display:block; margin: auto;" onclick="window.open('{{Variables::tvPath("announce.html")}}', 'newwindow', 'width=1600, height=860'); return false;">Preview Live Page</button>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane fade" id="rounded-pills-icon-profile" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="row">
                                <div class="col-md-8 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two" style="border:2px solid var(--dashboardCard)">
                                        <div class="widget-content">
                                            <div class="media">
                                                <div class="media-body">
                                                    <h6 style="color:var(--blackText)">Announcement</h6>
                                                    <p class="meta-date-time" style="color:var(--blackText)">Setup your next Announcement</p>

                                                    <div style=" position:absolute; top:10px; right: 10px;">
                                                        <p>Last Session is </p>
                                                        @if(strtotime(date("Y-m-d H:i:s", strtotime($settings->time_zone.' hour'))) <= strtotime($announce->end))
                                                            <h3 class="text-success">
                                                                Scheduled
                                                            </h3>
                                                            @else
                                                            <h3 class="text-danger">
                                                                Expired
                                                                </h2>
                                                                @endif
                                                    </div>
                                                </div>
                                            </div>
                                            @if($announce)
                                            <form action="{{route('announcement.store')}}" method="post" enctype="multipart/form-data">@csrf
                                                <div class="card-bottom-section">
                                                    <div class="row" style="margin-top: 30px; padding:30px">
                                                        <div class="@if($announce->template == 1) col-md-12 @else col-md-6 @endif">
                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <div class="contact-occupation">
                                                                                <label for=""><b>Start Date</b> <Br> <span class="text-primary">{{date('d M, Y. h:i a', strtotime($announce->start))}}</span></label>
                                                                                <input type="datetime-local" name="start" class="form-control mb-4" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                            </div>
                                                                            <Br>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                            <div class="form-group mb-4">
                                                                                <label for=""><b>End Date</b> <br> <span class="text-primary">{{date('d M, Y. h:i a', strtotime($announce->end))}}</span> </label>
                                                                                <input type="datetime-local" name="end" class="form-control mb-4" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <br><br>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-4">
                                                                        <label for=""><b>Title</b></label>
                                                                        <input type="text" name="title" class="form-control mb-4" value="{{$announce->title}}" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-4">
                                                                        <label for=""><b>Title Divider Color</b></label>
                                                                        <input type="color" name="color" class="form-control mb-4" value="{{$announce->color}}" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-12">
                                                                    <div class="form-group mb-4">
                                                                        <label for=""><b>Announcement</b></label>
                                                                        <textarea type="text" name="text" rows="5" class="form-control mb-4" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">{{$announce->text}}</textarea>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        @if($announce->template != 1)
                                                        <div class="col-md-6">
                                                            <div class="row">
                                                                <div class="col-md-12" style="margin: auto;">
                                                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                                                        <label> <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image"></a></label>
                                                                        <label class="custom-file-container__custom-file">
                                                                            <input type="file" name="file" class="custom-file-container__custom-file__custom-file-input" accept="image/*">
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
                                                    <br><br><br>
                                                    <button type="submit" data-toggle="modal" data-target="#video2" class="btn btn-success" style="width: 40%; margin: auto;">Update</button>
                                                    <br>
                                                </div>
                                            </form>
                                            @else
                                            <h4 class="text-center text-danger" style="margin:50px 0px">You have not uploaded Announcement for this display!<h4>
                                                    @endif


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

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>




<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>



<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>

<!-- BEGIN THEME GLOBAL STYLE -->
<script src="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{Path::asset('admin/plugins/sweetalerts/custom-sweetalert.js')}}"></script>



<script>
    $(".chooseTemplate").change(function() {
        var template = $("input[type='radio'][name='chooseTemplate']:checked").val();
        var _token = $('input[name="_token"]').val();
        $.ajax({
            type: "POST",
            url: "{{route('announcement.update')}}",
            data: {
                template: template,
                _token: _token
            },
            success: function(result) {
                swal({
                    title: 'Template Changed & Published',
                    text: 'Your page will refresh in 5 seconds',
                    timer: 6000,
                    padding: '2em',
                    onOpen: function() {
                        swal.showLoading()
                    }
                }).then(function(result) { 
                    if (
                        // Read more about handling dismissals
                        result.dismiss === swal.DismissReason.timer
                    ) {
                        console.log('I was closed by the timer')
                    }
                })
                window.setTimeout(function() {
                    location.reload()
                }, 3000)
            },
            error: function(e) {
                new swal("Oooops!", "An Error occurred", "error");
            }
        });
    });
</script>

@endsection