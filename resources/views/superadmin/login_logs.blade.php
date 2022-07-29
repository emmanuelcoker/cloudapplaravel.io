@extends('layouts.client.default')

@section('css')
<!-- BEGIN PAGE LEVEL STYLES -->
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />


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
                    <div class="fq-header-wrapper" style="">
                            <h1 class="" style="color:var(--tableTitleColor1)"> Login History</h1>
                            <p class="" style="color:var(--tableTitleColor2)">Manage and track login histories!</p>
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
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                                Client Logins
                            </a>
                        </li>

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
                                            <h4 style="color:var(--blackText)">Users</h4>
                                        </div>
                                        <div class="user-email" style="width: 35%; text-align: center;">
                                            <h4 style="color:var(--blackText)">Device Used</h4>
                                        </div>
                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <h4 style="color:var(--blackText)">Role</h4>
                                        </div>
                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <h4 style="color:var(--blackText)">IP Address</h4>
                                        </div>
                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <h4 style="color:var(--blackText)">Login Time</h4>
                                        </div>
                                    </div>
                                </div>

                                @foreach($logs as $log )
                                <div class="items">
                                    <div class="item-content" style="min-width: 100%;  ">
                                        <div class="user-profile" style="width: 20%; text-align: center;">
                                            <div class="n-chk align-self-center text-center">
                                                <label class="new-control new-checkbox checkbox-primary">
                                                    <input type="checkbox" class="new-control-input contact-chkbox">
                                                    <span class="new-control-indicator"></span>
                                                </label>
                                            </div>
                                            <p class="user-name" data-name="{{$log['user']['name']}}" style="font-size: 14px; display: block; margin-left: 40px; color:var(--tableFontColor)">{{$log['user']['name']}}</p>
                                        </div>

                                        <div class="user-email" style="width: 35%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-name" data-name="{{$log->user_agent}}" style="font-size: 14px; display: block; margin-left: 40px;">{{$log->user_agent}}</p>
                                            </div>
                                        </div>

                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px;" data-occupation="{{$log->ip_address}}">{{$log['role']['name']}}</p>
                                            </div>
                                        </div>

                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px;" data-occupation="{{$log->ip_address}}">{{$log->ip_address}}</p>
                                            </div>
                                        </div>
                                        
                                        
                                        
                                        <div class="user-email" style="width: 15%; text-align: center;">
                                            <div class="user-meta-info">
                                                <p class="user-work" style="font-size: 14px; display: block; margin-left: 40px;" data-occupation="{{date('d M, Y (H:ia)', strtotime($log->created_at))}}">{{date('d M, Y (H:ia)', strtotime($log->created_at))}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>


                    </div>


                </div>

                <div class="col-md">
                    {{$logs->links()}}
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


<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY STYLES -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>





@endsection