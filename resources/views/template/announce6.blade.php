@extends('layouts.templates')
@section('css')
<style>
    .form-form {
        width: 100vw;
        height: 70vh;
        display: flex;
        position: fixed;
        bottom: 0px;
        background: whitesmoke;
        justify-content: center;
        text-align: center;
        align-items: center;

    }


    .form-image {
        position: fixed;
        top: 0%;
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
            <div class="col-md-4" class="text-center">
                <h1 class="text-center titleHead">
                    <b> {{$announce->title}}</b>
                </h1>
                <div class="titleDivider"></div>
            </div>
            <div class="col-md-8" style="padding: 0px 80px">
                <h5 class="h5Font">
                    {{$announce->text}}
                </h5>
            </div>
        </div>

        <!-- //image -->
        <div class="form-image"></div>
    </div>
</body>
@endsection