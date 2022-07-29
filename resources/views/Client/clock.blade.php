@extends('layouts.client.default')



@section('css')

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{Path::asset('admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/widgets/modules-widgets.css')}}">
<!-- <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}"> -->
<link href="{{Path::asset('admin/assets/css/elements/color_library.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
@endsection

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center">
    <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Clock Features</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage clock settings!</p>
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





        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="height: 580px;">
                <div class="widget-content">
                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Date/Time Layout</h6>
                            <p class="meta-date-time">Pick a layout that suit your view.</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                       @livewire('clock-layout')
                        <br>
                        <br>
                        @livewire('clock-type')

                    </div>
                </div>
            </div>
        </div>



        
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="height: 580px;">
                <div class="widget-content">
                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Clock Background</h6>
                            <p class="meta-date-time">Choose Clock Logo</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-6" style="left:0px; right: 0px; margin:auto">
                                @if($tv->clockImage)
                                <img src="{{Variables::tvPath('time/'.$tv->clockImage)}}" alt="" style="max-width: 100%; height: 250px;" class="img-responsive">
                                @else
                                <h4 class="text-center">No Clock Logo chosen yet!</h4>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        <button href="javascript:void(0);" data-toggle="modal" data-target="#logo" class="btn btn-success" style="width: 45%; display: block; margin: auto;">Change Image</button>
                        <br>
                        <br>
                        <hr>
                        <div class="row">
                        <div class="col-md-12">
        <br>
        <label for=""><b>Clock Background Visibility</b></label>
    </div>
                            <div class="col-md-6" style="left:0px; right: 0px; margin:20px auto 0px auto">
                                <div style=" display:block; text-align: center; margin:auto">
                                    <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                        <span style=" margin-left: -100px">Hide</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <span style=" margin-right: -100px;" class="text-success">&nbsp;&nbsp; Show</span>
                                        <input id="show_date_image" class="switchStatus" type="checkbox" @if($tv['show_date_image']==true) checked @endif>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>



        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="height: 200px;">
                <div class="widget-content">

                    <div class="media">
                        <!-- <div class="w-img">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div> -->
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Clock Background Color</h6>
                            <p class="meta-date-time">Choose your clock background style color</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4" style="left:0px; right: 0px; margin:auto">
                                @if($tv->clock_background_color)
                                <div class="color-box">
                                    <span class="cl-example" style="background-color: {{$tv->clock_background_color}};"></span>
                                    <div class="cl-info">
                                        <h3 class="cl-title">{{$tv->clock_background_color}}</h3>
                                    </div>
                                </div>
                                @else
                                <h4 class="text-center text-danger">No Color chosen yet!</h4>
                                @endif
                            </div>
                            <div class="col-md-6" style="left:0px; right: 0px; margin:auto">
                            <div style="position: absolute; bottom:10%; left:0px; right:0px;">
                        <button href="javascript:void(0);" style=" display:block;   margin:auto" data-toggle="modal" data-target="#color" class="btn btn-success" >Change Colour</button>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Add Modal -->
        <div class="modal fade" id="logo" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background:var(--dashboardCard)">
                    <form id="addContactModalTitle" method="post" action="{{route('clock.logo')}}" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                <b><span id="uploadTitle" style="color:var(--blackText)">Upload Clock Logo</span> </b>
                            </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                    <line x1="18" y1="6" x2="6" y2="18"></line>
                                    <line x1="6" y1="6" x2="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <div class="modal-body">
                            <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                            <div class="add-contact-box">
                                <div class="add-contact-content">

                                    @csrf

                                    <div class="row">
                                        <br><br>
                                        <div class="col-md-12" id="showBannerCodeName">
                                            <h3 style="text-align: left;"><span id="updateBannerNow"></span></h3>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
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
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button id="btn-edit" class="float-left btn btn-success">Upload</button>

                            <button class="btn" style="background: var(--danger); color:white" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>




        <div class="modal fade" id="color" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post" action="{{route('clock.color')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle">
                        <b><span id="uploadTitle" style="color:var(--blackText)">Pick background color</span> </b>
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            @csrf

                            <div class="row">
                                <div class="col-md-6" style="right: 0px;left: 0px; margin: auto;">
                                    <div class="contact-occupation">
                                        <label for="">Select your Color</label>
                                        <input type="color" value="{{$tv->clock_background_color}}" name="color" class="form-control" placeholder="Select a Color" required>
                                    </div>
                                    <Br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btn-edit" class="float-left btn btn-success">Upload</button>

                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>
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
@endsection

@section('js')
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{Path::asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/widgets/modules-widgets.js')}}"></script>


<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
</script>


<script>
    $(document).ready(function() {
        $(".switchStatus").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            console.log(id);
            console.log(status);
            $.ajax({
                type: "POST",
                url: "{{route('clock.switch')}}",
                data: {
                    id: id,
                    status: status,
                    _token: _token
                },
                success: function(result) {
                    if (status == true) {
                        var btn = 'ON';
                    } else {
                        var btn = 'OFF';
                    }
                    new swal("Updated", result + " has been switched " + btn, "success");
                },
                error: function(e) {
                    console.log(e);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
</script>


@endsection