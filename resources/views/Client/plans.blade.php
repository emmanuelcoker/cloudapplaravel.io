@extends('layouts.client.default')

@section('css')

<!-- BEGIN PAGE LEVEL STYLES -->
<link href="{{Path::asset('admin/plugins/pricing-table/css/component.css')}}" rel="stylesheet" type="text/css" />

<style>
    .priceLogo {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        display: block;
        margin: 10px auto 0px auto;
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
    @foreach(Session::get('errors') as $error)
    <script>
        swal("Ooosps", "{!! $error !!}", "error");
    </script>
    @endforeach
    @endif
    <div class="row">

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 filtered-list-search layout-spacing align-self-center" style="margin-top: 50px;">
            <div class="fq-header-wrapper">
                <h1 class=""  style="color:var(--tableTitleColor1)"> Plans</h1>
                <p class=""  style="color:var(--tableTitleColor1)">Choose and upgrade your plans!</p>
            </div>
        </div>

        <div class="col-lg-12" style="margin-top: 20px;">
            <section class="pricing-section bg-7 mt-5">
                <div class="pricing pricing--norbu">


                    @foreach($plans as $plan)
                    <div class="pricing__item" @if($plan->id == $setting->plan_id) style="background:#4361ee; color:white" @else style="background:var(--dashboardCard); color: var(--blackText)" @endif >
                        <div>
                            <img src="{{Path::asset('images/'.$plan->image)}}" alt="sdf" class="priceLogo">
                        </div>
                        <h3 class="pricing__title" style="color:var(--blackText)">{{$plan->name}}</h3>
                        <div class="pricing__price"><span class="pricing__currency">$</span>{{number_format($plan->price)}}<span class="pricing__period">/ month</span></div>
                        <ul class="pricing__feature-list text-center">
                            <li class="pricing__feature">
                                {{$plan->banners}} Banners
                            </li>
                            <br>
                            <li class="pricing__feature">
                                {{$plan->logos}} Logos
                            </li>
                            <br>
                            <li class="pricing__feature">
                                {{$plan->media}} Media Contents
                            </li>
                            <br>
                            <li class="pricing__feature">
                                {{$plan->schedule_video}} Media Schedule Contents
                            </li>
                            <br>
                            <li class="pricing__feature">
                                {{$plan->locations}} Locations
                            </li>
                            <br>
                            <li class="pricing__feature">
                                {{$plan->displays}} Displays
                            </li>
                            <br>
                        </ul>
                        @if($plan->id == $setting->plan_id)
                        <button class="btn  mb-4 mr-2 btn-lg" style="background:white; color:#4361ee">Active</button>
                        @else
                        <button class="btn btn-primary mb-4 mr-2 btn-lg">Buy Now</button>
                        @endif
                    </div>
                    @endforeach


                </div>
            </section>
        </div>
    </div>

</div>






@endsection