@extends('errors.layout')

@section('title')
Unauthorized
@endsection

@section('error')
<h1 class="error-number " style="font-size:5em">Unauthorized</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">You don't have the authorization to perform this action!</p>
@endsection