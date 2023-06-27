@extends('layouts.client.auth')

@section('content') 
<div class="form-content">

    <h1 class="">{{ __('Reset Password') }}</h1>
    <!-- <p class="signup-link">New Here? <a href="/register">Create an account</a></p> -->
    <form class="text-left" method="post" action="{{ route('password.email') }}">
        @csrf
        <div class="form">
            <br>
             @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }} 
                        </div>
                    @endif
                    <br><br>

            <div id="username-field" class="field-wrapper input">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                </svg>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>



            <div class="d-sm-flex justify-content-between">
                <div class="field-wrapper">
                    <button type="submit" class="btn btn-primary" value="">{{ __('Send Password Reset Link') }}</button>
                </div>

            </div>

     

        </div>
    </form>
    <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html">CLOUDAPP</a> is a product of Moore Advice Ltd. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>
</div>
@endsection