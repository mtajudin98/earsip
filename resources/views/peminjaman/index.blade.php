@extends('layouts.app')
@section('title','Peminjaman')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Peminjaman Arsip</h1>
    <a href="{{ route('peminjaman.create')}}" class="btn btn-primary">Tambah Peminjaman</a>
</div>
<hr>
@if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success')}}
    </div>
@endif
<div class="table-responsive">
<table class="table table-bordered">
    <thead class="table-info">
        <tr>
            <th>#</th>
            <th>Kode Pelaksana</th>
            <th>Member</th>
            <th>Arsip ID</th>
            <th>Tanggal Peminjaman</th>
            <th>Tanggal Pengembalian</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($peminjaman->count()>0)
            @foreach ($peminjaman as $rs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_pelaksana }}</td>
                    <td class="align-middle">{{ $rs->member_kode }}</td>
                    <td class="align-middle">{{ $rs->arsip_id }}</td>
                    <td class="align-middle">{{ $rs->tanggal_pinjam }}</td>
                    <td class="align-middle">{{ $rs->tanggal_kembali }}</td>
                    <td class="align-middle">
                        <a href="{{ route('peminjaman.show', $rs->id)}}" class="btn btn-primary btn-circle" type="button"><i class="fas fa-info"></i></a>
                            <a href="{{ route('peminjaman.edit', $rs->id)}}" class="btn btn-warning btn-circle" type="button"><i class="fas fa-info"></i></a>
                            <form action="{{ route('peminjaman.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger btn-circle">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger m-0 btn-circle"><i class="fas fa-trash"></i></button>
                        </form>
                        </div>
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
</div>
@endsection
