@section('title', 'Home')
@extends('layout.layout')
@section('contant')
    <div class="taskApp">
        <h1 class="text-info">WelCome to Task app</h1>
    </div>
    <div class="taskAppBtn">
        <a class="btn btn-success me-5" href="{{ route('login') }}"><b>Login</b></a>
        <a class="btn btn-danger ml-5" href="{{ route('sign.up') }}"><b>Sign-up</b></a>
    </div>
@endsection