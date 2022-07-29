@extends('layouts.templates')
@section('css')
<style>
    .form-form {
        width: 100vw;
        height: 100vh;
        display: flex;
        position: fixed;
        top: 0px;
        background: whitesmoke;
        justify-content: center;
        text-align: center;
        align-items: center;
    }

    .titleHead {
        display: inline-block;
        text-align: center;
        vertical-align: middle;
        line-height: 300px;

    }

    .form-image {
        position: fixed;
        bottom: 0%;
        min-height: auto;
        height: 30vh;
        width: 100%;
    }
</style>
@endsection
@section('content')


<body class="form">
    <div class="form-container">
        <div class="form-form">
            <div class="row">
                <div class="col-md-12" class="text-center" style="margin-bottom: 80px; margin-top: -50px;">

                    <div class="col-md-6">
                        <h1 class="text-center titleHead">
                            <b> {{$announce->title}}</b>
                        </h1>
                        <div class="titleDivider" style="margin-top:-115px"></div>
                    </div>
                    <div class="col-md-6">
                        <img src="announce/announce.png" alt="" srcset="" style="max-width: 350px;">
                    </div>

                </div>
                <div class="col-md-12" style="padding: 0px 80px">
                    <h5 class="h5Font">
                        {{$announce->text}}
                    </h5>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection