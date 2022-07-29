@extends('layouts.client.default')

@section('css')
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{Path::asset('admin/assets/css/selectUI.css')}}">

<link href="{{Path::asset('admin/assets/css/components/tabs-accordian/custom-accordions.css')}}" rel="stylesheet" type="text/css" />
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
                <h1 class="" style="color:var(--tableTitleColor1)"> Permission</h1>
                <p class="" style="color:var(--tableTitleColor2)">Manage Permission!</p>
            </div>
        </div>



        @livewire('roles')


        <div class="col-md-12 layout-spacing" style="padding:10px">
            <div class="statbox widget box box-shadow" style="border:2px solid var(--dashboardCard);">
                <!-- <div id="accordionIcons" class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <br>
                            <h4>Icons</h4>
                        </div>
                    </div>
                </div> -->
                <div class="widget-content widget-content-area" style="border:2px solid var(--dashboardCard); background:var(--dashboardCard)">

                    <div id="iconsAccordion" class="accordion-icons">


                        <form action="{{route('permission.store')}}" method="post"> @csrf
                        <div class="row">
                            <div class="col-md-12" style="padding-bottom:40px">
                            <button type="submit" class="btn btn-primary mt-4 btn-xs" style="display:block; margin:auto" >Update</button> 
                            </div>
                        </div>
                        <div class="row">
                            @foreach($permissions as $permission)
                            <div class="col-md-6">
                                <div class="card" style="background:var(--tableDiv)">
                                    <div class="card-header" id="headingThree{{$permission->id}}">
                                        <section class="mb-0 mt-0">
                                            <div role="menu" class="" data-toggle="collapse" data-target="#iconAccordionThree{{$permission->id}}" aria-expanded="true" aria-controls="iconAccordionThree">
                                                <div class="accordion-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
                                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                                        <line x1="3" y1="6" x2="3.01" y2="6"></line>
                                                        <line x1="3" y1="12" x2="3.01" y2="12"></line>
                                                        <line x1="3" y1="18" x2="3.01" y2="18"></line>
                                                    </svg>
                                                </div>
                                                <span style="color:var(--tableFontColor)">{{$permission->name}}</span>
                                                <div class="icons"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down">
                                                        <polyline points="6 9 12 15 18 9"></polyline>
                                                    </svg></div>
                                            </div>
                                        </section>
                                    </div>
                                    <div id="iconAccordionThree{{$permission->id}}" class="collapse" aria-labelledby="headingThree{{$permission->id}}" data-parent="#iconsAccordion">
                                        <div class="card-body">
                                                <ul class="ks-cboxtags">
                                                    @foreach($roles as $role)
                                                    <li><input type="checkbox" @if($permission->role && in_array($role->name, json_decode($permission->role))) checked @endif id="{{$permission->name}}-{{$role->id}}-checkboxOne" name="{{$permission->key}}[]" value="{{$role->name}}">
                                                        <label for="{{$permission->name}}-{{$role->id}}-checkboxOne">{{$role->name}}</label>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <!-- <button type="submit" class="btn btn-primary mt-4 btn-xs" style="display:block; margin:auto">Update</button> -->

                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        </form>


                    </div>
                </div>
            </div>
        </div>

    </div>

</div>






@endsection

@section('js')
<script src="{{Path::asset('admin/plugins/highlight/highlight.pack.js')}}"></script>
<script src="{{Path::asset('admin/assets/js/scrollspyNav.js')}}"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{Path::asset('admin/assets/js/components/ui-accordions.js')}}"></script>
@endsection