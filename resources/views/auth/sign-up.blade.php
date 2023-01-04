@section('title', 'Sign-up')
@extends('layout.layout')
@section('contant')
    <form action="{{ route('sign.up') }}" method="POST" class="form bg-light p-5 border border-1 border-success rounded">
        @csrf
        <div class="form-group mb-3">
            <label class="mb-2">User name</label>
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Name" value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="mb-2">Mobile number</label>
            <input type="number" name="number" class="form-control @error('number') is-invalid @enderror" placeholder="Number" value="{{ old('number') }}">
            @error('number')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="mb-2">Email address</label>
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group mb-3">
            <label class="mb-2">Password</label>
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"">
            @error('password')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success mt-2"><b>Sign-up</b></button>
    </form>
@endsection