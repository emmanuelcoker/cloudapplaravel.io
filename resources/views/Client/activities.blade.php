@extends('layouts.client.default')

@section('css')

<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/table/datatable/datatables.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/table/datatable/dt-global_style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{Path::asset('admin/plugins/table/datatable/custom_dt_multiple_tables.css')}}">

@endsection

@section('content')

<div class="layout-px-spacing">
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
    @foreach(Session::get('errors') as $error)
    <script>
        swal("Ooosps", "{!! $error !!}", "error");
    </script>
    @endforeach
    @endif
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center" style="margin-top: 50px;">
            <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Activities</h1>
                <p class="" style="color:var(--tableTitleColor2)">View all your activities and changed files!</p>
            </div>
        </div>

        <div class="col-lg-12" style="margin-top: 20px;">
            <div class="widget-content widget-content-area br-6" style="border:2px solid var(--dashboardCard); background:var(--dashboardCard)">
                <table class="multi-table table table-hover" style="width:100%">
                    <thead>
                        <tr>
                            <th >Who made the change</th>
                            <th >Section Changed</th>
                            <th >File / Item changed</th>
                            
                            <th >Action Taken</th>
                            
                            <th >Date/Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($activities as $activity)
                        <tr>
                            <td style="color:var(--tableFontColor)">{{$activity['user']['name']}} ({{$activity['user']['role']['name']}})</td>
                            <td style="color:var(--tableFontColor)">{{$activity->section}}</td>
                            <td style="color:var(--tableFontColor)">{{$activity->file}}</td>
                            
                            <td style="color:white">
                                @if($activity->action == 'switched')
                                <span class="shadow-none badge badge-primary">  {{ucfirst($activity->action)}}  @if($activity->switch) On @else Off @endif </span>
                                @endif
                                
                                @if($activity->action == 'added')
                                <span class="shadow-none badge badge-success">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'updated')
                                <span class="shadow-none badge badge-info">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'published')
                                <span class="shadow-none badge badge-warning">  {{ucfirst($activity->action)}} </span>  
                                @endif
                               
                                @if($activity->action == 'deleted')
                                <span class="shadow-none badge badge-danger">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'uploaded')
                                <span class="shadow-none badge " style="background: var(--purple)">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 're-arranged')
                                <span class="shadow-none badge " style="background: var(--orange)">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'chatted')
                                <span class="shadow-none badge " style="background: var(--secondary)">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'emailed')
                                <span class="shadow-none badge " style="background: var(--gray)">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                @if($activity->action == 'scheduled')
                                <span class="shadow-none badge " style="background: var(--dark)">  {{ucfirst($activity->action)}} </span>  
                                @endif
                                
                                
                            </td>
                            
                            <td style="color:var(--tableFontColor)">{{date('d-M-Y h:i a', strtotime($activity->created_at))}}</td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>






@endsection

@section('js')
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{Path::asset('admin/plugins/table/datatable/datatables.js')}}"></script>
<script>
        $(document).ready(function() {
            $('table.multi-table').DataTable({
                "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
                "oLanguage": {
                    "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                    "sInfo": "Showing page _PAGE_ of _PAGES_",
                    "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                    "sSearchPlaceholder": "Search...",
                   "sLengthMenu": "Results :  _MENU_",
                },
                "stripeClasses": [],
                "lengthMenu": [10, 20, 30, 50],
                "pageLength": 20,
                drawCallback: function () {
                    $('.t-dot').tooltip({ template: '<div class="tooltip status" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' })
                    $('.dataTables_wrapper table').removeClass('table-striped');
                }
            });
        } );
    </script>
@endsection