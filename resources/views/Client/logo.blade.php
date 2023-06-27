@extends('layouts.client.default')

@section('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.js"></script>

@endsection

@section('content')
<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        <div class="col-lg-12">
            <div class="widget-content searchable-container list">

                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                        <div class="fq-header-wrapper">
                            <h1 class="" style="color:var(--tableTitleColor1)"> Logo Content</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Manage your company and brands logos!</p>
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

                <div class="modal fade" id="addContactModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
                    <div class="modal-dialog @if(Permission::check('can_change_logo')) modal-xl @endif modal-dialog-centered" role="document">
                        <div class="modal-content" style="background:var(--dashboardCard)">
                                <div class="modal-body">
                                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                                    <div class="add-contact-box">
                                        <div class="add-contact-content">

                                            @csrf

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h3 style="text-align: left; color:var(--blackText)"><span id="updateLogoNow"></span></h3>
                                                    <hr>
                                                </div>
                                                <div class="@if(Permission::check('can_change_logo')) col-md-6  @else col-md-12 @endif" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                                    <img id="showLastImage" src="" style="max-width: 50%; display:block; margin: auto;" alt="sd">
                                                    <br><br>
                                                </div>
                                                @if(Permission::check('can_change_logo'))
                                                <br><br>
                                                        <div class="col-md-6" style="margin-top:30px">

                                                    <div class="row">
                                                        <div class="col-md-12" style="margin: auto;" >
                                                        <span style="font-size:14px; color:var(--success)">Select image to crop:</span>
                                                            <input type="file" id="file1" name="file" class="form-control">
                                                            <input type="hidden" name="logoID" id="logoID" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top:40px">
                                                        <div class="col-md-12 text-center" >
                                                            <div id="upload-demo1"></div>
                                                        </div>
                                                    </div>
                                </div>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if(Permission::check('can_change_logo'))
                                <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                    <button  class="float-left btn btn-lg btn-success btn-upload-image1">Update</button>

                                    <button data-dismiss="modal" class="btn" style="background: var(--danger); color:white"> <i class="flaticon-delete-1"></i> Close</button>
                                </div>
                                @endif
                        </div>
                    </div>
                </div>


                <div class="widget-content widget-content-area rounded-pills-icon">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-image">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <circle cx="8.5" cy="8.5" r="1.5"></circle>
                                    <polyline points="21 15 16 10 5 21"></polyline>
                                </svg> Logos</a>
                        </li>
                        @if(Permission::check('can_change_logo'))
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile100" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                                    <line x1="12" y1="5" x2="12" y2="19"></line>
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                </svg> Add Logo</a>
                        </li>
                        @endif
                    </ul>

                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
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
                                        <div class="user-email" style="width: 30%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File Type</h4>
                                        </div>
                                        <div class="user-email" style="width: 30%; text-align:center;">
                                            <h4  style="color:var(--blackText)">File</h4>
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
                                @if(count($logos) > 0)
                                <div id="mediaDrag" class='dragula'>
                                @foreach($logos as $logo )
                               
                                <div class="items" data-index="{{$logo->id}}" data-position="{{$logo->position}}">
                                    <div class="item-content">
                                                <div class="user-profile" style="width: 20%; text-align: left;">
                                                    <div class="n-chk align-self-center text-center">
                                                        <label class="new-control new-checkbox checkbox-primary">
                                                            <input type="checkbox" class="new-control-input contact-chkbox">
                                                            <span class="new-control-indicator"></span>
                                                        </label>
                                                    </div>
                                                    <a href="#" data-toggle="modal" data-target="#addContactModal" onclick="var id = '{{$logo->id}}';  
                                            document.getElementById('logoID').value = id;
                                            document.getElementById('updateLogoNow').innerHTML= 'Update logo{{$logo->image}}';
                                            document.getElementById('showLastImage').src = '{{Variables::tvPath("logo/logo".$logo->image.".".$logo->extension)}}';
                                            document.getElementById('showLogoCodeName').style.display = 'block';
                                            
                                            ">
                                                        <img src="{{Variables::tvPath('logo/logo'.$logo->image.'.'.$logo->extension)}}" style="width:70px; height:70px; margin-left: 40px;" alt="">
                                                    </a>
                                                </div>

                                                <div class="user-email" style=" width: 30%; text-align: center;">
                                                    <div class="user-meta-info">
                                                        <p class="user-work" style="text-align: center;" data-occupation="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Image)</p>
                                                    </div>
                                                </div>
                                                <div class="user-email" style="width: 30%; text-align: center;">
                                                    <h4 class="user-name" data-name="logo{{$logo->image}}" style="font-size: 14px; color:var(--tableFontColor); margin-left: 40px;">logo{{$logo->image}}</h4>
                                                </div>

                                                <div class="action-btn" style="width: 10%; text-align: center;">
                                        <div style="margin-left:38px">
                                        <label class="switch s-outline s-outline-success  mb-4 mr-2" >
                                                                                                <input id="{{$logo->id}}" class="logoSwitch" type="checkbox" @if($logo->is_active == true) checked @endif>
                                                                                                <span class="slider round"></span>
                                                                                            </label>
                                        </div>
                                        </div>

                                                <div class="action-btn" style="width: 10%; text-align: right;">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 edit" onclick="var id = '{{$logo->id}}';  
                                            document.getElementById('logoID').value = id;
                                            document.getElementById('updateLogoNow').innerHTML= 'Update logo{{$logo->image}}';
                                            document.getElementById('showLastImage').src = '{{Variables::tvPath("logo/logo".$logo->image.".".$logo->extension)}}';
                                            document.getElementById('showLogoCodeName').style.display = 'block';
                                            ">
                                                        <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                    </svg>
                                                </div>
                                        </div>
                                </div>
                                
                                @endforeach
                                </div>
                                @else
                                <h2 class="text-center text-danger" style="margin:60px 0px">You have not uploaded logos for this display!<h2>
                                        @endif

                            </div>
                        </div>



                        <div class="tab-pane fade" id="rounded-pills-icon-profile100" role="tabpanel" aria-labelledby="rounded-pills-icon-profile-tab">
                            <div class="media">
                                <div class="media-body">
                                        <div class="searchable-items list">

                                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing" style="margin-top: 40px;">
                                                <div class="info">

                                                    <div class="row">
                                                        <div class="col-md-4" style="margin: auto;" style="padding:5%;">
                                                        <span style="font-size:14px; color:var(--success)">Select image to crop:</span>
                                                            <input type="file" id="file" name="file" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row" style="margin-top:40px">
                                                        <div class="col-md-12 text-center" >
                                                            <div id="upload-demo"></div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <button class="btn btn-success btn-upload-image" type="submit" style="display: block; margin:30px auto 45px auto; width:15%">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                        <path d="M13 3h2.996v5h-2.996v-5zm11 1v20h-24v-24h20l4 4zm-17 5h10v-7h-10v7zm15-4.171l-2.828-2.829h-.172v9h-14v-9h-3v20h20v-17.171zm-3 10.171h-14v1h14v-1zm0 2h-14v1h14v-1zm0 2h-14v1h14v-1z"></path>
                                                    </svg> &nbsp;&nbsp; Save
                                                </button>
                                    <!-- </form> -->
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
<!-- END GLOBAL MANDATORY SCRIPTS -->
<script src="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
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


<script type="text/javascript">
    var resize = $('#upload-demo').croppie({
        enableExif: true,
        enableOrientation: true,
       viewport: { // Default { width: 100, height: 100, type: 'square' } 
            width: 210,
            height: 200,
            type: 'square' //square
        },
        boundary: {
            width: 350,
            height: 350
        }
    });
    
    var resize1 = $('#upload-demo1').croppie({
        enableExif: true,
        enableOrientation: true,
       viewport: { // Default { width: 100, height: 100, type: 'square' } 
            width: 210,
            height: 200,
            type: 'square' //square
        },
        boundary: {
            width: 350,
            height: 350
        }
    });


    $('#file').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            resize.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });
   
    $('#file1').on('change', function() {
        var reader = new FileReader();
        reader.onload = function(e) {
            resize1.croppie('bind', {
                url: e.target.result
            }).then(function() {
                console.log('jQuery bind complete');
            });
        }
        reader.readAsDataURL(this.files[0]);
    });


    $('.btn-upload-image').on('click', function(ev) {
        resize.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(img) {
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: "{{route('logos.store')}}",
                type: "POST",
                data: {
                    "file": img,
                    _token: _token
                },
                success: function(data) {
                    new swal("Uploaded", 'Logo Uploaded successfully', "success");
                    location.reload()
                },
                error: function(data){
                    console.log(data);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
   
    $('.btn-upload-image1').on('click', function(ev) {
        resize1.croppie('result', {
            type: 'canvas',
            size: 'viewport'
        }).then(function(img) {
            var _token = $('input[name="_token"]').val();
            var id = $('input[name="logoID"]').val();
            $.ajax({
                url: "{{route('logos.update')}}",
                type: "POST",
                data: {
                    "file": img,
                    _token: _token,
                    id:id
                },
                success: function(data) {
                    new swal("Uploaded", 'Logo Updated successfully', "success");
                    location.reload()
                    // console.log(data);
                },
                error: function(data){
                    // console.log(data);
                    new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
</script>




<script>
    $(document).ready(function() {
        $(".logoSwitch").change(function() {
            var id = $(this).attr("id");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();
            console.log(status);
            $.ajax({
                type: "POST",
                url: "{{route('logo.switch')}}",
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
                    new swal("Oooops!", "An Error occurred", "error");
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
                saveNewPositionsMorning();
            }
        });
    });

    function saveNewPositionsMorning() {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated');
        });
        console.log(positions);
        var _token = $('input[name="_token"]').val();

        $.ajax({
            url: "{{route('logo.positioning')}}",
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
                    title: 'Logo Playlist Arranged Successfully',
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

@endsection