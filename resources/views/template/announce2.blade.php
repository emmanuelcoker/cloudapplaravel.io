@extends('layouts.templates')
@section('css')
<style>
    .form-form {
        width: 50%;
        display: flex;
        flex-direction: column;
        min-height: 100%;
        position: fixed;
        right: 0;
        background: whitesmoke;
    }

    .form-form .form-form-wrap {
        max-width: 700px;
        margin: 0 auto;
        min-width: 311px;
        min-height: 100%;
        height: 100vh;
        align-items: center;
        justify-content: center;
    }



    .form-image {
        position: fixed;
        right: 50%;
        min-height: auto;
        height: 100vh;
        width: 50%;
    }

</style>
@endsection
@section('content')

<body class="form">
    <div class="form-container">

        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">
                        <h1 class="text-center titleHead">
                            <b> {{$announce->title}}</b>
                        </h1>
                        <div class="titleDivider"></div>
                        <br><br><bR>
                        <h5 class="h5Font">
                            {{$announce->text}}
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <!-- //image -->
        <div class="form-image"></div>

    </div>
</body>
@endsection