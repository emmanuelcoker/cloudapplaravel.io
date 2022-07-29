@extends('layouts.client.default')

@section('css')
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="{{Path::asset('admin/plugins/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/plugins/fullcalendar/custom-fullcalendar.advance.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{Path::asset('admin/plugins/flatpickr/flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{Path::asset('admin/plugins/flatpickr/custom-flatpickr.css')}}" rel="stylesheet" type="text/css">
    <link href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLE -->
    <style>
        .widget { margin-bottom: 10px; }
        .widget-content-area { border-radius: 6px; }
        .daterangepicker.dropdown-menu {
            z-index: 1059;
        }
    </style>
    <!--  BEGIN CUSTOM SCRIPTS FILE  -->
    <script src="{{Path::asset('calender/event.js')}}"></script>
    
@endsection



@section('content')
<!--  BEGIN CONTENT AREA  -->
<div class="layout-px-spacing" >
    <div class="row layout-top-spacing" id="cancel-row">
    <div class="col-xl-12 col-lg-12 col-md-5 col-sm-12 filtered-list-search layout-spacing align-self-center">
    <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Schedule Calender</h1>
                <p class="" style="color:var(--tableTitleColor2)">Visualize your scheduled events!</p>
            </div>
                    </div>
        <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="statbox widget box box-shadow">
                <div class="widget-content widget-content-area">
                    <div class="calendar-upper-section">
                        <div class="row">
                            <div class="col-md-12 col-12">
                                <div class="labels">
                                <p class="label label-warning"  style="color:var(--blackText)">Media Content</p>
                                    <p class="label label-secondary"  style="color:var(--blackText)">Announcement</p>
                                    <p class="label label-success"  style="color:var(--blackText)">Morning {{$tab->training}} (MDC)</p>
                                    <p class="label label-danger"  style="color:var(--blackText)">Afternoon {{$tab->training}} (ADC)</p>
                                    <p class="label label-primary"  style="color:var(--blackText)">Evening {{$tab->training}} (EDC)</p>
                                </div>
                            </div>
                            <div class="col-md-4 col-12">
                                <!-- <form action="javascript:void(0);" class="form-horizontal mt-md-0 mt-3 text-md-right text-center">
                                    <button id="myBtn" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar mr-2">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg> Add Event</button>
                                </form> -->
                            </div>
                        </div>
                    </div>
                    <br>
                    <div id="calendar"  style="background:white;"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




@section('js')
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="{{Path::asset('admin/plugins/fullcalendar/moment.min.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/flatpickr/flatpickr.js')}}"></script>
    <script src="{{Path::asset('admin/plugins/fullcalendar/fullcalendar.min.js')}}"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    
@endsection