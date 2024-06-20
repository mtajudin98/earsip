@extends('layouts.app')
@section('title','Data Arsip')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Tambah Data Arsip</h1>

</div>
<hr>
<form class="user" action="{{ route('detail-arsip.store') }}" method="POST">
    @csrf
    <div class="row">
    <div class="col-lg-6">
    <div class="form-group">
            <label for="" class="form-label">Kode Unit</label>
            <input name="kode_induk" type="text" class="form-control @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Kode Unit">
            @error('kode_induk')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <label for="" class="form-label">Kategori Dokumen</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
            @error('nama_induk')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <label for="" class="form-label">No. Referensi</label>
        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="exampleInputEmail"
            placeholder="No Referensi">
            @error('telp')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
    </div>
    <div class="form-group">
        <label for="" class="form-label">Perihal</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
            @error('alamat')
            <span class="invalid-feedback" role="alert">{{ $message }}</span>
            @enderror
        </div>

            <div class="form-group">
                <label for="" class="form-label">Nama Dokumen</label>
                    <input name="kode_induk" type="text" class="form-control @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Nama Dokumen">
                    @error('kode_induk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Tanggal Rilis</label>
                <input type="date" name="nama_induk" class="form-control form-control-user @error('nama_induk') is-invalid @enderror" id="exampleInputEmail"
                    placeholder="Tanggal Rilis">
                    @error('nama_induk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Tanggal Selesai</label>
                <input type="date" name="telp" class="form-control form-control-user @error('telp') is-invalid @enderror" id="exampleInputEmail"
                    placeholder="Tanggal Selesai">
                    @error('telp')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
        </div>
            <div class="col-lg-6">
            <div class="form-group">
                <label for="" class="form-label">Tingkat Perkembangan</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Media Simpan</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Kondisi</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Status</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
          </select>
                    @error('alamat')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Nomor Box</label>
                    <input name="kode_induk" type="text" class="form-control @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Nama Dokumen">
                    @error('kode_induk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Kode Penyimpanan</label>
                    <input name="kode_induk" type="text" class="form-control @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Nama Dokumen">
                    @error('kode_induk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
            <div class="form-group">
                <label for="" class="form-label">Lokasi Penyimpanan</label>
                    <input name="kode_induk" type="text" class="form-control @error('kode_induk') is-invalid @enderror" id="Name" placeholder="Nama Dokumen">
                    @error('kode_induk')
                    <span class="invalid-feedback" role="alert">{{ $message }}</span>
                    @enderror
            </div>
                </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
    <button type="submit" class="btn btn-secondary btn-user btn-block">
        Cancel
    </button>
        </div>
        <div class="col-lg-6">
    <button type="submit" class="btn btn-primary btn-user btn-block">
        Save
    </button>
        </div>
</div>
@endsection
