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
<link href="{{Path::asset('admin/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/noUiSlider/nouislider.min.css')}}" rel="stylesheet" type="text/css">
<!-- END THEME GLOBAL STYLES -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/noUiSlider/custom-nouiSlider.css')}}" rel="stylesheet" type="text/css">
<link href="{{Path::asset('admin/plugins/bootstrap-range-Slider/bootstrap-slider.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/widgets/modules-widgets.css')}}">

<link href="{{Path::asset('admin/assets/css/pages/contact_us.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/users/user-profile.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/pages/faq/faq.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />

<link href="{{Path::asset('admin/assets/css/apps/mailing-chat.css')}}" rel="stylesheet" type="text/css" />
<style>
    .fillColor:hover {
        fill: white
    }

    .fillColor::selection {
        fill: white
    }

    @media screen and (max-width:900px) {
        .scaleHeight {
            height: 1000px;
        }
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
                <h1 class="" style="color:var(--tableTitleColor1)"> Help Desk</h1>
                <p class="" style="color:var(--tableTitleColor2)">Contact and chat with support at anytime!</p>
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



                <div class="widget-content widget-content-area rounded-pills-icon" style="border:2px solid var(--tableTitleArea)">

                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center fillColor" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-users">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="9" cy="7" r="4"></circle>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                </svg>
                                Support
                            </a>
                        </li>

                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile1" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-circle">
                                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
                                </svg>Chat</a>
                        </li>
                        
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center fillColor" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile2" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                    <polyline points="22,6 12,13 2,6"></polyline>
                                </svg>Contact us</a>
                        </li>

                    </ul>
                    <div class="tab-content" id="rounded-pills-icon-tabContent">


                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="row">
                                <div class="col-md-8 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two">
                                        <div class="widget-content scaleHeight">

                                            <div class="user-profile layout-spacing">
                                                <div class="widget-content widget-content-area" style="border: 0px; outline:0px; ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="d-flex justify-content-between">
                                                                <a href="#" data-toggle="modal" data-target="#exampleModal" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3">
                                                                        <path d="M12 20h9"></path>
                                                                        <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                                                    </svg></a>
                                                            </div>
                                                            <div class="text-center user-info">
                                                                <img src="{{Path::asset('images/'.$clientSupport->image)}}" style="max-width: 150px; border-radius: 100%;" alt="avatar">
                                                                <p class="">{{$clientSupport->name}}</p>
                                                            </div>
                                                            <div class="user-info-list">
                                                                <div class="">
                                                                    <ul class="contacts-block list-unstyled">
                                                                        <li class="contacts-block__item" style="width: 100%;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                                                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                                                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                                                                <line x1="14" y1="1" x2="14" y2="4"></line>
                                                                            </svg>Client Support
                                                                        </li>

                                                                        <li class="contacts-block__item">
                                                                            <a href="mail:{{$clientSupport->email}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                                                </svg>{{$clientSupport->email}}</a>
                                                                        </li>
                                                                        <li class="contacts-block__item">
                                                                            <a href="tel:{{$clientSupport->phone}}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                                                </svg> {{$clientSupport->phone}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="contact-us layout-top-spacing" style="background:transparent">
                                                                <div class="cu-contact-section" >
                                                                    @livewire('contact')
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



                        <div class="tab-pane fade show" id="rounded-pills-icon-profile1" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="row">
                                <div class="col-md-12 layout-spacing" style="margin: 20px auto 0px auto; ">
                                    <div class=" widget-card-two">
                                        <div class="widget-content scaleHeight">
                                            <div class="row">
                                                @livewire('chat')
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>



                        <div class="tab-pane fade show " id="rounded-pills-icon-profile2" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="row">
                                <div class="col-md-8 layout-spacing" style="margin: 40px auto 0px auto; ">
                                    <div class="widget widget-card-two">
                                        <div class="widget-content scaleHeight">

                                            <div class="user-profile layout-spacing">
                                                <div class="widget-content widget-content-area" style="border: 0px; outline:0px; ">
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="text-center user-info">
                                                                <img src="{{Path::asset('images/'.$support->image)}}" style="max-width: 150px; border-radius: 100%;" alt="avatar">
                                                                <p class="">{{$support->name}}</p>
                                                            </div>
                                                            <div class="user-info-list">

                                                                <div class="">
                                                                    <ul class="contacts-block list-unstyled">
                                                                        <li class="contacts-block__item" style="width: 100%;">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-coffee">
                                                                                <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                                                                <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                                                                <line x1="6" y1="1" x2="6" y2="4"></line>
                                                                                <line x1="10" y1="1" x2="10" y2="4"></line>
                                                                                <line x1="14" y1="1" x2="14" y2="4"></line>
                                                                            </svg> CloudApp Support
                                                                        </li>

                                                                        <li class="contacts-block__item">
                                                                            <a href="mail:{{$support->email}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail">
                                                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                                                </svg>{{$support->email}}</a>
                                                                        </li>
                                                                        <li class="contacts-block__item">
                                                                            <a href="tel:{{$support->phone}}">
                                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone">
                                                                                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                                                                                </svg> {{$support->phone}}</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="contact-us layout-top-spacing">
                                                                <div class="cu-contact-section">
                                                                    @livewire('contact')
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






            </div>

        </div>

    </div>
</div>
</div>


</div>


<!-- Add Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post" action="{{route('support.store')}}" enctype="multipart/form-data">

                <div class="modal-head" style="margin:10px;">
                    <h3 style="text-primary">Update your Support Team</h3>
                    <hr>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            @csrf


                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="">Name</label>
                                        <input type="text" name="name" placeholder="Full Name" value="{{$clientSupport->name}}" required class="form-control mb-4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="">Email</label>
                                        <input type="email" name="email" placeholder="Input Email" value="{{$clientSupport->email}}" required class="form-control mb-4">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="">Phone</label>
                                        <input type="tel" name="phone" placeholder="Input Phone Number" value="{{$clientSupport->phone}}" required class="form-control mb-4">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="id" value="0" id="mediaID" class="form-control" required>
                                    <div class="custom-file-container" data-upload-id="myFirstImage">
                                        <label>Upload (Single File) <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
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
                <div class="modal-footer">

                    <button class="float-left btn btn-success">Update</button>

                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Discard</button>

                </div>
            </form>
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
</script>

<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>

<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{Path::asset('admin/plugins/flatpickr/flatpickr.js')}}"></script>
<script src="{{Path::asset('admin/plugins/noUiSlider/nouislider.min.js')}}"></script>

<script src="{{Path::asset('admin/plugins/flatpickr/custom-flatpickr.js')}}"></script>
<script src="{{Path::asset('admin/plugins/noUiSlider/custom-nouiSlider.js')}}"></script>
<script src="{{Path::asset('admin/plugins/bootstrap-range-Slider/bootstrap-rangeSlider.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/apps/mailbox-chat.js')}}"></script>
@endsection