@extends('layouts.client.auth')

@section('content')
<div class="form-content">

    <h1 class="">Get started with a <br /> free account</h1>
    <p class="signup-link">Already have an account? <a href="/login">Log in</a></p>
    <form class="text-left" action="{{route('move_to_setup')}}" method="post">
        @csrf
        <br> <br>
        <div id="username-field" class="field-wrapper input">
           
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-cast">
                <path d="M2 16.1A5 5 0 0 1 5.9 20M2 12.05A9 9 0 0 1 9.95 20M2 8V6a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2h-6"></path>
                <line x1="2" y1="20" x2="2.01" y2="20"></line>
            </svg>
            <input id="username" name="name" type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Company Name" autofocus autocomplete="name">
            @error('name')
            <span class="text-danger" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <bR> <br>
        </div>


        <div class="form-group mb-4">
            <label for="exampleFormControlSelect1">Select Location</label>
            <select class="form-control" name="location" id="exampleFormControlSelect1" required>
                <option value="">Select your country</option>
                @foreach($countries as $country)
                <option value="{{$country->id}}">{{$country->name}}</option>
                @endforeach
            </select>
            <bR><BR>
        </div>

        <div class="d-sm-flex justify-content-between">
            <div class="field-wrapper" style="display: block; margin: auto;">
                <button type="submit" class="btn btn-primary" style="display: block; margin: auto;" value="">Get Started!</button>
            </div>
        </div>

    </form>
    <p class="terms-conditions">© 2020 All Rights Reserved. <a href="index.html">{{env('APP_NAME')}}</a> is a product of Moore Advice Ltd. <a href="javascript:void(0);">Cookie Preferences</a>, <a href="javascript:void(0);">Privacy</a>, and <a href="javascript:void(0);">Terms</a>.</p>

</div>
@endsection