@extends('layouts.client.default')

@section('css')

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<link href="{{Path::asset('admin/assets/css/pages/faq/faq.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-modal.css')}}" rel="stylesheet" type="text/css">
<!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->
<style>
    .section {
        padding: 5px 10px;
        border-radius: 30px;
        color: white;
        background: seagreen;
    }
</style>
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
    <script>
        swal("Ooosps", "File type is not allowed", "error");
    </script>
    @endif

    @livewire('tutorials')
</div>

@if(Permission::check('global_setting'))
<!-- Add Modal -->
<div class="modal fade" id="editTu" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post" action="{{route('settings.update_tutorial')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:var(--blackText)">Edit Tutorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Section</label>
                                        <select class="form-control" name="section_id" id="section_id" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            @foreach($sections as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input type="hidden" name="id" id="Tid">
                                        <input class="form-control" name="title" id="title" aria-describedby="emailHelp" placeholder="Enter Title" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-12"><Br><br>
                                    <span id="showVideo"></span>
                                    <br><br>
                                </div>
                                <br><br>

                                <div class="col-md-12">
                                    <div class="form-group mb-4">
                                        <label for="">File Upload</label>
                                        <input type="file" name="file" class="form-control mb-4" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button id="modal-blockui" type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn" style="background: var(--danger); color:white" data-dismiss="modal">Discard</button>

                </div>
            </form>
        </div>
    </div>
</div>

@endif

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post"  action="{{route('settings.store_tutorial')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:var(--blackText)">Add New Tutorial</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="flaticon-cancel-12 close" data-dismiss="modal"></i>
                    <div class="add-contact-box">
                        <div class="add-contact-content">

                            @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Select Section</label>
                                        <select class="form-control" name="section_id" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            <option value="">Choose</option>
                                            @foreach($sections as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                            @endforeach
                                        </select>
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title</label>
                                        <input class="form-control" name="title" aria-describedby="emailHelp" placeholder="Enter Title" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                        <br>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                <label for="">File Upload</label>
                                        <input type="file" name="file" class="form-control mb-4" style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button id="modal-blockui" type="submit" class="btn btn-success">Update</button>
                    <button type="button" class="btn" style="background: var(--danger); color:white" data-dismiss="modal">Discard</button>

                </div>
            </form>
        </div>
    </div>
</div>



@endsection

@section('js')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{Path::asset('admin/assets/js/pages/faq/faq.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection