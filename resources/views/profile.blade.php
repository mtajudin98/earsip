@extends('layouts.app')
@section('title','Profile')
@section('contents')
<form class="user" action="" method="POST">
    <div class="form-group">

            <input name="name" type="text" class="form-control form-control-user @error('name') is-invalid @enderror" id="Name" placeholder="Full Name" value="{{ auth()->user()->name }}">
            @error('name')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="email" disabled name="email" class="form-control form-control-user @error('email') is-invalid @enderror" id="exampleInputEmail"
            placeholder="Email Address" value="{{ auth()->user()->email }}">
            @error('email')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group row">
        <div class="col-sm-6 mb-3 mb-sm-0">
            <input type="password" name="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                id="exampleInputPassword" placeholder="Password">
                @error('password')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-sm-6">
            <input type="password" name="password_confirmation" class="form-control form-control-user @error('password_confirmation') is-invalid @enderror"
                id="exampleRepeatPassword" placeholder="Repeat Password">
                @error('password_confirmation')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Save Profile
    </button>
@endsection
