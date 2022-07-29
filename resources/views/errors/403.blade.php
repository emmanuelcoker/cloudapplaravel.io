@extends('errors.layout')

@section('title')
Action Forbidden
@endsection

@section('error')
<h1 class="error-number " style="font-size:5em">Action Forbidden</h1>
<p class="mini-text">Ooops!</p>
<p class="error-text">You are not allowed to perform this action!</p>
@endsection