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

    @livewire('faq')
</div>


@if(Permission::check('global_setting'))
<!-- to add faq  Modal  -->
<div class="modal fade text-left" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal-reload" style="background:var(--dashboardCard)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:var(--blackText)">Add Faq</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('settings.store_faq')}}"> @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Section</label>
                        <select name="section_id" class="form-control" id="" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                            <option value="">Choose</option>
                            @foreach($sections as $section)
                            <option value="{{$section->id}}">{{$section->name}}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <textarea class="form-control" name="question" aria-describedby="emailHelp" placeholder="Enter Question" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Answer</label>
                        <textarea class="form-control" name="answer" aria-describedby="emailHelp" placeholder="Enter Answer" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                        <br>
                    </div>
            </div>
            <div class="modal-footer">
                <button id="modal-blockui" type="submit" class="btn btn-primary">Save</button>
                <button type="button" class="btn" style="background: var(--danger); color:white"  data-dismiss="modal">Discard</button>
            </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div class="modal fade text-left" id="editfaq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="modal-reload" style="background:var(--dashboardCard)">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="color:var(--blackText)">Edit Faq</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('settings.update_faq')}}"> @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Select Section</label>
                        <select name="section_id" class="form-control" id="section_id" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)">
                            <option value="">Choose</option>
                            @foreach($sections as $section)
                            <option value="{{$section->id}}">{{$section->name}}</option>
                            @endforeach
                        </select>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Question</label>
                        <input type="hidden" id="Fid" name="id">
                        <textarea class="form-control" name="question" id="question" aria-describedby="emailHelp" placeholder="Enter Question" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                        <br>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Answer</label>
                        <textarea class="form-control" rows="5" name="answer" id="answer" aria-describedby="emailHelp" placeholder="Enter Answer" required style="background:var(--inputBackground); color:var(--inputColor); border:2px solid var(--imgBorder)"></textarea>
                        <br>
                    </div>
            </div>
            <div class="modal-footer">
                

                <button id="modal-blockui" type="submit" class="btn btn-success">Update</button>
                <button type="button" class="btn" style="background: var(--danger); color:white" data-dismiss="modal">Close</button>    
            </div>
            </form>
        </div>
    </div>
</div>
@endif
@endsection

@section('js')
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
<script src="{{Path::asset('admin/assets/js/pages/faq/faq.js')}}"></script>
<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
@endsection