@extends('layouts.app')
@section('title','Data Arsip')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Data Arsip</h1>
    <a href="{{ route('detail-arsip.create')}}" class="btn btn-primary">Tambah Data Arsip</a>
</div>
<hr>
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success')}}
    </div>
@endif
<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th>#</th>
            <th>Kode Pelaksana</th>
            <th>Kode Unit</th>
            <th>Kode Dokumen</th>
            <th>No. Referensi</th>
            <th>Perihal</th>
            <th>Nama Dokumen</th>
            <th>Tanggal Rilis</th>
            <th>Tanggal Selesai</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($detailarsip->count()>0)
            @foreach ($detailarsip as $rs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_pelaksana }}</td>
                    <td class="align-middle">{{ $rs->kode_unit }}</td>
                    <td class="align-middle">{{ $rs->kode_dokumen }}</td>
                    <td class="align-middle">{{ $rs->no_referensi }}</td>
                    <td class="align-middle">{{ $rs->perihal }}</td>
                    <td class="align-middle">{{ $rs->nama_dokumen }}</td>
                    <td class="align-middle">{{ $rs->tanggal_rilis }}</td>
                    <td class="align-middle">{{ $rs->tanggal_selesai }}</td>
                    <td class="align-middle">
                            <a href="{{ route('detail-arsip.show', $rs->id)}}" class="btn btn-primary btn-circle" type="button"><i class="fas fa-info"></i></a>
                            <a href="{{ route('detail-arsip.edit', $rs->id)}}" class="btn btn-warning btn-circle" type="button"><i class="fas fa-info"></i></a>
                            <form action="{{ route('detail-arsip.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger btn-circle">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger m-0 btn-circle"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
            @else
            <tr>
                <td class="text-center" colspan="4">Kantor induk tidak ada</td>
            </tr>

        @endif
    </tbody>
</table>
@endsection
