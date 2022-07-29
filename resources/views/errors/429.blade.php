@extends('errors.layout')

@section('title')
Too Many Requests
@endsection

@section('error')
<h1 class="error-number " style="font-size:5em">Too Many Requests</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">Server is receiving so many requests!</p>
@endsection