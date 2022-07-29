@extends('errors.layout')

@section('title')
Server Error
@endsection

@section('error')
<h1 class="error-number " style="font-size:5em">Server Error</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">Server has responded with an error!</p>
@endsection