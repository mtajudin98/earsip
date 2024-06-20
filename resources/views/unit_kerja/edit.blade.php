@extends('layouts.app')
@section('title','Create Kantor Induk')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Kantor Induk</h1>
    <a href="" class="btn btn-primary">Add Kantor Induk</a>
</div>
<hr>
<form class="user" action="{{ route('unitkerja.update',$unitkerja->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">

            <input value="{{ $unitkerja->kode_induk }}" name="kode_induk" type="text" class="form-control form-control-user @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Full Name">
            @error('kode_induk')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="text" value="{{ $unitkerja->nama_induk }}" name="nama_induk" class="form-control form-control-user @error('nama_induk') is-invalid @enderror" id="exampleInputEmail"
            placeholder="Email Address">
            @error('nama_induk')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="text" value="{{ $unitkerja->telp }}" name="telp" class="form-control form-control-user @error('telp') is-invalid @enderror" id="exampleInputEmail"
            placeholder="No telpon">
            @error('telp')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <input type="text" value="{{ $unitkerja->alamat }}" name="alamat" class="form-control form-control-user @error('nama_induk') is-invalid @enderror" id="exampleInputEmail"
            placeholder="Alamat">
            @error('alamat')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-user btn-block">
        Register Account
    </button>
@endsection
