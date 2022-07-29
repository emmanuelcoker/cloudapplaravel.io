@extends('layouts.client.default')



@section('css')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{Path::asset('admin/plugins/apex/apexcharts.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/widgets/modules-widgets.css')}}">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/theme-checkbox-radio.css')}}">
@endsection

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">

        <div class="col-lg-12">
        <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> Templates</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your template type!</p>
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
  

        @livewire('template')



    </div>
</div>
@endsection

@section('js')
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{Path::asset('admin/plugins/apex/apexcharts.min.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/widgets/modules-widgets.js')}}"></script>
@endsection