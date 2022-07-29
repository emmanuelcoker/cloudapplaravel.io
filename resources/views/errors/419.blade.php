@extends('errors.layout')

@section('title')
Page Expired
@endsection

@section('error')
<h1 class="error-number " style="font-size:5em">Page Expired</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">Your session has expired, please login again!</p>
@endsection