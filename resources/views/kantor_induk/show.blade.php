@extends('layouts.app')
@section('title','Detail Kantor Induk')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Detail Kantor Induk</h1>
</div>
<hr>
    <div class="form-group">

            <input value="{{ $kantorinduk->kode_induk }}" name="kode_induk" type="text" class="form-control form-control-user" id="Name">
    </div>
    <div class="form-group">
        <input type="text" value="{{ $kantorinduk->nama_induk }}" name="nama_induk" class="form-control form-control-user" id="exampleInputEmail"
            placeholder="Email Address">
    </div>
    <div class="form-group">
        <input type="text" value="{{ $kantorinduk->telp }}" name="telp" class="form-control form-control-user @error('telp') is-invalid @enderror" id="exampleInputEmail"
            placeholder="No telpon">
    </div>
    <div class="form-group">
        <input type="text" value="{{ $kantorinduk->alamat }}" name="alamat" class="form-control form-control-user @error('nama_induk') is-invalid @enderror" id="exampleInputEmail"
            placeholder="Alamat">
    </div>
@endsection
