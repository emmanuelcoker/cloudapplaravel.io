@extends('layouts.client.default')



@section('css')
<link href="{{Path::asset('admin/plugins/drag-and-drop/dragula/dragula.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/drag-and-drop/dragula/example.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/apps/contacts.css')}}" rel="stylesheet" type="text/css" />

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/plugins/jquery-ui/jquery-ui.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.css')}}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/forms/switches.css')}}">

<link href="{{Path::asset('admin/assets/css/scrollspyNav.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/animate/animate.css')}}" rel="stylesheet" type="text/css" />
<script src="{{Path::asset('admin/plugins/sweetalerts/promise-polyfill.js')}}"></script>
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/plugins/sweetalerts/sweetalert.css')}}" rel="stylesheet" type="text/css" />
<link href="{{Path::asset('admin/assets/css/components/custom-sweetalert.css')}}" rel="stylesheet" type="text/css" />

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-tabs.css')}}" rel="stylesheet" type="text/css" />

@endsection

@section('content')


<div class="layout-px-spacing">
    <div class="row layout-spacing layout-top-spacing" id="cancel-row">
        <div class="col-lg-12">
            <div class="widget-content searchable-container list">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                    <div class="fq-header-wrapper">
                <h1 class="" style="color:var(--tableTitleColor1)"> News Updates</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage your company and external news update!</p>
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
                    @if(Session::has('rssFail'))
                    <script>
                        swal("Invalid RSS Link", "{!! Session::get('rssFail') !!}", "error");
                    </script>
                    @endif

                </div>

                <div class="widget-content widget-content-area rounded-pills-icon">
                    <ul class="nav nav-pills mb-4 mt-3  justify-content-center" id="rounded-pills-icon-tab" role="tablist">
                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 active text-center" id="rounded-pills-icon-home-tab" data-toggle="pill" href="#rounded-pills-icon-home" role="tab" aria-controls="rounded-pills-icon-home" aria-selected="true">

                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <rect x="7" y="7" width="3" height="9"></rect>
                                    <rect x="14" y="7" width="3" height="5"></rect>
                                </svg> RSS Feed</a>
                        </li>

                        <li class="nav-item ml-2 mr-2">
                            <a class="nav-link mb-2 text-center" id="rounded-pills-icon-profile-tab" data-toggle="pill" href="#rounded-pills-icon-profile100" role="tab" aria-controls="rounded-pills-icon-profile" aria-selected="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trello">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <rect x="7" y="7" width="3" height="9"></rect>
                                    <rect x="14" y="7" width="3" height="5"></rect>
                                </svg>Custom Feed</a>
                        </li>

                    </ul>


                    <div class="tab-content" id="rounded-pills-icon-tabContent">
                        <div class="tab-pane fade show active" id="rounded-pills-icon-home" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content" style="width: 50%;display: block; margin: 0px auto 50px auto; ">
                                        <div class="col-md-12   layout-spacing">
                                            <div class="statbox  box box-shadow">
                                                <div class="widget-content widget-content-area">
                                                    <div class='parent ex-2'>
                                                        <div class='row'>
                                                            @if($setting->allow_rss_news == true)
                                                            <div style="width: 100%;">
                                                                <div class="widget-header">
                                                                @if(Permission::check('can_edit_rss_news'))
                                                                    <div style="display: block; margin:10px auto 30px auto; width: 50%; text-align: center;">
                                                                        <a class="btn btn-success" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#rss" aria-haspopup="true" aria-expanded="false" onclick=" 
                                                document.getElementById('newsID').value = 0; 
                                                document.getElementById('btn-edit').style.display = 'none'; 
                                                document.getElementById('btn-add').style.display = 'block'; 
                                                document.getElementById('uploadTitle').style.display = 'block'; 
                                                document.getElementById('updateTitle').style.display = 'none'; 
                                                document.getElementById('showTextarea').style.display = 'none'; 
                                                document.getElementById('showInput').style.display = 'block'; 
                                                document.getElementById('newsType').value = 'rss';
                                                document.getElementById('link').value = '';
                                                document.getElementById('title').value = '';
                                                document.getElementById('showLastImage').src = '';
                                                        document.getElementById('count').value = '';  ">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                                <path d="M11.5 0c6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5-11.5-5.153-11.5-11.5 5.153-11.5 11.5-11.5zm0 1c5.795 0 10.5 4.705 10.5 10.5s-4.705 10.5-10.5 10.5-10.5-4.705-10.5-10.5 4.705-10.5 10.5-10.5zm.5 10h6v1h-6v6h-1v-6h-6v-1h6v-6h1v6z"></path>
                                                                            </svg> &nbsp;&nbsp; Add RSS Feed
                                                                        </a>
                                                                    </div>
                                                                    @endif
                                                                    <p class="text-center" style="color:var(--tableTitleColor2)">
                                                                        <b>Note:</b><br> You can Drag and re-arrange items.
                                                                    </p>
                                                                </div>
                                                                <div id='left-events' class='dragula' style="width: 100%;">
                                                                @if(count($rsss) > 0)
                                                                    @foreach($rsss as $rss)
                                                                    <div class="media   d-block d-sm-flex" style="width: 100%;" data-index="{{$rss->id}}" data-position="{{$rss->position}}">
                                                                        <div style="margin-top: 13px;">
                                                                            <label class="switch s-outline s-outline-success  mb-4 mr-2">
                                                                                <input id="{{$rss->id}}" class="rss" type="checkbox" @if($rss->is_active == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <img alt="avatar" src="{{Variables::tvPath('rss/images/'.$rss->image)}}"  class="img-fluid ">
                                                                        <div class="media-body">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="">
                                                                                    <h6 class="" style="color:var(--blackText)">{{$rss->name}}</h6>
                                                                                    <p class="" style="width: 100px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis">{{$rss->link}}</p>
                                                                                    <p class=""><b style="color:black; color:var(--blackText)">Items to show:</b> {{$rss->count}}</p>
                                                                                </div>
                                                                                @if(Permission::check('can_edit_rss_news'))
                                                                                <div class="">
                                                                                    <div style="display: inline-block;">
                                                                                        <a href="#" class="text-success" data-toggle="modal" data-target="#rss" onclick=" document.getElementById('newsID').value = '{{$rss->id}}'; document.getElementById('btn-edit').style.display = 'block'; document.getElementById('btn-add').style.display = 'none';
                                                        document.getElementById('title').value = '{{$rss->name}}'; 
                                                        document.getElementById('title2').innerHTML = '{{$rss->name}}';
                                                        document.getElementById('showTextarea').style.display = 'none'; 
                                                        document.getElementById('showInput').style.display = 'block'; 
                                                        document.getElementById('link').value = '{{$rss->link}}';
                                                        document.getElementById('count').value = '{{$rss->count}}';
                                                        document.getElementById('uploadTitle').style.display = 'none'; 
                                                        document.getElementById('updateTitle').style.display = 'block'; 
                                                        document.getElementById('newsType').value = 'rss';
                                                        document.getElementById('showLastImage').src = '{{Variables::tvPath("rss/images/".$rss->image)}}';
                                                        ">
                                                                                            <svg class="text-success" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block">
                                                                                                <path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"></path>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
                                                                    @else
                                <h3 class="text-center text-danger" style="margin:60px auto">You have not added RSS Content for this display!<h2>
                                @endif
                                                                </div>
                                                            </div>
                                                            @else
                                <h3 class="text-center text-danger" style="margin:60px auto">This Feature has been remove, Please contact support!<h2>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade show" id="rounded-pills-icon-profile100" role="tabpanel" aria-labelledby="rounded-pills-icon-home-tab">
                            <div class="searchable-items list">
                                <div class="items items-header-section">
                                    <div class="item-content" style="width: 50%;display: block; margin: 0px auto 50px auto; ">
                                        <div class="col-md-12   layout-spacing">
                                            <div class="statbox  box box-shadow">
                                                <div class="widget-content widget-content-area">
                                                    <div class='parent ex-2'>
                                                        <div class='row'>
                                                            @if($setting->allow_custom_news == true)
                                                            <div style="width: 100%;">
                                                                <div class="widget-header">
                                                                @if(Permission::check('can_edit_custom_news'))
                                                                    <div style="display: block; margin:10px auto 30px auto; width: 50%; text-align: center;">
                                                                        <a class="btn btn-success" href="#" role="button" id="pendingTask" data-toggle="modal" data-target="#rss" aria-haspopup="true" aria-expanded="false" onclick=" document.getElementById('newsID').value = 0; document.getElementById('btn-edit').style.display = 'none'; document.getElementById('uploadTitle').style.display = 'block'; document.getElementById('updateTitle').style.display = 'none'; document.getElementById('showTextarea').style.display = 'block'; document.getElementById('showInput').style.display = 'none'; document.getElementById('newsType').value = 'custom'; document.getElementById('title').value = ''; document.getElementById('content').value = ''; document.getElementById('btn-add').style.display = 'block'; document.getElementById('showLastImage').src = '';">
                                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right">
                                                                                <path d="M11.5 0c6.347 0 11.5 5.153 11.5 11.5s-5.153 11.5-11.5 11.5-11.5-5.153-11.5-11.5 5.153-11.5 11.5-11.5zm0 1c5.795 0 10.5 4.705 10.5 10.5s-4.705 10.5-10.5 10.5-10.5-4.705-10.5-10.5 4.705-10.5 10.5-10.5zm.5 10h6v1h-6v6h-1v-6h-6v-1h6v-6h1v6z"></path>
                                                                            </svg> &nbsp;&nbsp;Add Custom Feed
                                                                        </a>
                                                                    </div>
                                                                    @endif
                                                                    <p class="text-center" style="color:var(--tableTitleColor2)">
                                                                        <b>Note:</b><br> You can Drag and re-arrange items.
                                                                    </p>
                                                                </div>
                                                                <div id='right-events' class='dragula' style="width: 100%;">
                                                                 @if(count($newss) > 0)
                                                                    @foreach($newss as $news)
                                                                    <div class="media   d-block d-sm-flex" style="width: 100%;" data-index="{{$news->id}}" data-position="{{$news->position}}">
                                                                        <div style="margin-top: 13px;">
                                                                            <label class="switch s-outline s-outline-info  mb-4 mr-2">
                                                                                <input id="{{$news->id}}" class="custom" type="checkbox" @if($news->is_active == true) checked @endif>
                                                                                <span class="slider round"></span>
                                                                            </label>
                                                                        </div>&nbsp;&nbsp;&nbsp;&nbsp;
                                                                        <img alt="avatar" src="{{Variables::tvPath('rss/images/'.$news->image)}}" class="img-fluid ">
                                                                        <div class="media-body">
                                                                            <div class="d-flex justify-content-between">
                                                                                <div class="">
                                                                                    <h6 class="" style="color:var(--blackText)">{{$news->name}}</h6>
                                                                                    <p class="" style="word-wrap: break-word;">{{$news->content}}</p>
                                                                                </div>
                                                                                @if(Permission::check('can_edit_custom_news'))
                                                                                <div class="">
                                                                                    <div style="display: inline-block;">
                                                                                        <a href="#" class="text-info" data-toggle="modal" data-target="#rss" onclick=" document.getElementById('newsID').value = '{{$news->id}}'; document.getElementById('btn-edit').style.display = 'block'; document.getElementById('btn-add').style.display = 'none';
                                                        document.getElementById('title').value = '{{$news->name}}'; 
                                                        document.getElementById('title2').innerHTML = '{{$news->name}}'; 
                                                        document.getElementById('showTextarea').style.display = 'block'; document.getElementById('showInput').style.display = 'none';
                                                        document.getElementById('newsContent').value = '{{$news->content}}';
                                                        document.getElementById('uploadTitle').style.display = 'none'; document.getElementById('updateTitle').style.display = 'block'; 
                                                        document.getElementById('newsType').value = 'custom';
                                                        document.getElementById('showLastImage').src = '{{Variables::tvPath("rss/images/".$news->image)}}';
                                                        ">
                                                                                            <svg class="text-info" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star f-icon-line" style="display:block">
                                                                                                <path d="M7.127 22.562l-7.127 1.438 1.438-7.128 5.689 5.69zm1.414-1.414l11.228-11.225-5.69-5.692-11.227 11.227 5.689 5.69zm9.768-21.148l-2.816 2.817 5.691 5.691 2.816-2.819-5.691-5.689z"></path>
                                                                                            </svg>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                @endif
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    @endforeach
@else
                                <h3 class="text-center text-danger" style="margin:60px 0px">You have not added Custom News Content for this display!<h2>
                                @endif
                                                                </div>
                                                            </div>
                                                            @else
                                <h3 class="text-center text-danger" style="margin:60px auto">This Feature has been remove, Please contact support!<h2>
                                                            @endif
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
<div class="modal fade" id="rss" tabindex="-1" role="dialog" aria-labelledby="addContactModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-xl modal-dialog-centered" role="document">
        <div class="modal-content" style="background:var(--dashboardCard)">
            <form id="addContactModalTitle" method="post" action="{{route('rss.store')}}" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenterTitle" style="color:var(--blackText)">
                        <b><span id="uploadTitle" >Add Feed</span> <span id="updateTitle">Update <span id="title2"></span></span></b>
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

                                <div class="col-md-6">
                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="contact-occupation">
                                                <i class="flaticon-fill-area"></i>
                                                <input type="text" id="title" name="title" class="form-control" placeholder="Title" required style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                            <Br>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group mb-4" id="showInput">
                                                <input type="text" id="link" name="link" class="form-control" placeholder="Link" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                                <br>
                                                <label for="">Number of items to show</label>
                                                <input type="text" id="count" name="count" class="form-control" placeholder="Number of items to show" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">
                                            </div>
                                            <div class="form-group mb-4" id="showTextarea">
                                                <textarea class="form-control" id="newsContent" name="content" rows="5" style="background-color:var(--inputBackground) !important; color:var(--inputColor); border:2px solid var(--imgBorder)">Enter News Content</textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                                            <img id="showLastImage" src="" style="max-width: 50%;">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <input type="hidden" name="id" id="newsID" class="form-control" required>
                                            <input type="hidden" name="type" id="newsType" class="form-control" required>
                                            <div class="custom-file-container" data-upload-id="myFirstImage">
                                                <label>Update News Logo <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">x</a></label>
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
                    </div>
                </div>
                <div class="modal-footer" style="display: flex; justify-content: center;  align-items: center; text-align: center;">
                    <button id="btn-edit" class="float-left btn btn-success">Update</button>

                    <button type="submit" id="btn-add" class="btn btn-primary">Add</button>

                    <button class="btn btn-danger" data-dismiss="modal"> <i class="flaticon-delete-1"></i> Close</button>

                    
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/custom.js')}}"></script>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
<script src="{{Path::asset('admin/plugins/file-upload/file-upload-with-preview.min.js')}}"></script>

<!-- BEGIN THEME GLOBAL STYLE -->
<script src="{{Path::asset('admin/plugins/sweetalerts/sweetalert2.min.js')}}"></script>
<script src="{{Path::asset('admin/plugins/sweetalerts/custom-sweetalert.js')}}"></script>

<script>
    //First upload
    var firstUpload = new FileUploadWithPreview('myFirstImage')
    //Second upload
    var secondUpload = new FileUploadWithPreview('mySecondImage')
</script>


<script>
    $(document).ready(function() {

        //rss section
        $('#left-events').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('updated');
                    }
                });
                saveNewPositions('rss');
            }
        });

        $('#left-events').disableSelection();
        //rss section
        $('#right-events').sortable({
            update: function(event, ui) {
                $(this).children().each(function(index) {
                    if ($(this).attr('data-position') != (index + 1)) {
                        $(this).attr('data-position', (index + 1)).addClass('updated');
                    }
                });
                saveNewPositions('news');
            }
        });
    });


    $('#right-events').disableSelection();

    function saveNewPositions(type) {
        var positions = [];
        $('.updated').each(function() {
            positions.push([$(this).attr('data-index'), $(this).attr('data-position')]);
            $(this).removeClass('updated');
        });

        var _token = $('input[name="_token"]').val();
        console.log(positions);
        console.log(type);
        $.ajax({
            url: '{{route("arrange_news")}}',
            type: 'POST',
            data: {
                positions: positions,
                type: type,
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
                    title: 'Arranged Successfully',
                    padding: '2em',
                })
            },
            error: function(error) {
                console.log(error);
            },
        });

    }
</script>



<script>
    $(document).ready(function() {
        $("input").change(function() {
            var id = $(this).attr("id");
            var type = $(this).attr("class");
            var status = $(this).prop('checked');
            var _token = $('input[name="_token"]').val();

            $.ajax({
                type: "POST",
                url: "/client/switch",
                data: {
                    id: id,
                    type: type,
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
                    // new swal("Oooops!", "An Error occurred", "error");
                }
            });
        });
    });
</script>
@endsection