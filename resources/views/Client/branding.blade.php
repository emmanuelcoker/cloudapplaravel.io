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
@endsection

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

        <div class="col-lg-12">
            <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Dashboard Branding</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your company brand image!</p>
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
            <div class="widget widget-card-two" style="min-height: 500px;">
                <div class="widget-content">

                    <div class="media">
                        <!-- <div class="w-img">
                                        <img src="assets/img/90x90.jpg" alt="avatar">
                                    </div> -->
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Background Color</h6>
                            <p class="meta-date-time">Choose your background style color</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-4" style="left:0px; right: 0px; margin:auto">
                                @if($settings->tv_background)
                                <div class="color-box">
                                    <span class="cl-example" style="background-color: {{$settings->tv_background}};"></span>
                                    <div class="cl-info">
                                        <h3 class="cl-title">{{$settings->tv_background}}</h3>
                                    </div>
                                </div>
                                @else
                                <h4 class="text-center text-danger">No Color chosen yet!</h4>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        @if(Permission::check('can_change_background_color'))
                        <div style="position: absolute; bottom:10%; left:0px; right:0px;">
                        <button href="javascript:void(0);" style=" display:block;   margin:auto" data-toggle="modal" data-target="#color" class="btn btn-success" >Change Colour</button>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>






        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="min-height: 500px;">
                <div class="widget-content">
                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Menu Background</h6>
                            <p class="meta-date-time">Menu Background</p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-6" style="left:0px; right: 0px; margin:auto">
                                @if($settings->menuBackground)
                                <img src="{{Path::asset('images/'. $settings->menuBackground)}}" alt="" style="max-width: 100%; height: 250px;" class="img-responsive">
                                @else
                                <h4 class="text-center">No Menu Background chosen yet!</h4>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        <div style="position: absolute; bottom:10%; left:0px; right:0px;">
                        <button href="javascript:void(0);" style=" display:block;   margin:auto" data-toggle="modal" data-target="#logo" class="btn btn-success" onclick="document.getElementById('dataType').value = 'menuBg'; " style="width: 40%; margin: auto;">Change Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 layout-spacing" style="margin: 40px auto 0px auto; ">
            <div class="widget widget-card-two" style="min-height: 500px;">
                <div class="widget-content">
                    <div class="media">
                        <div class="media-body">
                            <h6 style="color:var(--blackText)">Local Update Logo</h6>
                            <p class="meta-date-time">Upload a Logo Image that will appear on your local update popup. </p>
                        </div>
                    </div>

                    <div class="card-bottom-section">
                        <div class="row" style="margin-top: 30px;">
                            <div class="col-md-6" style="left:0px; right: 0px; margin:auto">
                                @if($tv->localUpdateLogo)
                                <img src="{{Variables::tvPath('logo/'. $tv->localUpdateLogo)}}" alt="" style="max-width: 100%; height: 250px;" class="img-responsive">
                                @else
                                <h4 class="text-center  text-danger">No Local Image chosen yet!</h4>
                                @endif
                            </div>
                        </div>
                        <br><br>
                        <div style="position: absolute; bottom:10%; left:0px; right:0px;">
                        <button href="javascript:void(0);" style=" display:block; bottom:10%;  margin:auto" data-toggle="modal" data-target="#logo" class="btn btn-success" onclick="document.getElementById('dataType').value = 'localUpdateLogo'; " style="width: 40%; margin: auto;">Change Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <!-- Add Modal -->
        <div class="modal fade" id="logo" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content" style="background:var(--dashboardCard)">
                    <form id="addContactModalTitle" method="post" action="{{route('logo.store')}}" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">
                                <b><span id="uploadTitle" style="color:var(--blackText)">Upload Logo</span> </b>
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
                                            <input type="hidden" name="type" id="dataType" class="form-control" required>
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

                            <button data-dismiss="modal" class="btn btn-danger"> <i class="flaticon-delete-1"></i> Close</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>












    </div>
</div>
</div>



<!-- Add Modal -->
<div class="modal fade" id="color" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post" action="{{route('color.store')}}" enctype="multipart/form-data">
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
                                        <input type="color" value="{{$settings->tv_background}}" name="color" class="form-control" placeholder="Select a Color" required>
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
@endsection