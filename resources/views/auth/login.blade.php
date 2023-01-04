@section('title', 'Login')
@extends('layout.layout')
@section('contant')
    {{-- Login form --}}
    <form action="{{ route('login') }}" method="POST" class="form bg-light p-5 border border-1 border-success rounded">
        @csrf
        <div class="form-group mb-3">
            <label for="email" class="mb-2">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password" class="mb-2">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
            @error('password')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-success mt-4"><b>Login</b></button>
    </form>
@endsection