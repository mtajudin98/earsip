@extends('layouts.app')
@section('title','Kantor Induk')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Kantor Induk</h1>
    <a href="{{ route('unitkerja.create')}}" class="btn btn-primary">Add Kantor Induk</a>
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
            <th>Kode Induk</th>
            <th>Nama Induk</th>
            <th>No. Telp</th>
            <th>Alamat</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @if ($unitkerja->count()>0)
            @foreach ($unitkerja as $rs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_induk }}</td>
                    <td class="align-middle">{{ $rs->nama_induk }}</td>
                    <td class="align-middle">{{ $rs->telp }}</td>
                    <td class="align-middle">{{ $rs->alamat }}</td>
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('unitkerja.show', $rs->id)}}" class="btn btn-secondary" type="button">Detail</a>
                            <a href="{{ route('unitkerja.edit', $rs->id)}}" class="btn btn-warning" type="button">Edit</a>
                            <form action="{{ route('unitkerja.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger m-0">Delete</button>
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
@endsection
