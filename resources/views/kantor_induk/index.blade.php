@extends('layouts.app')
@section('title','Kantor Induk')
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">List Kantor Induk</h1>
    <a href="{{ route('kantorinduk.create')}}" class="btn btn-primary">Add Kantor Induk</a>
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
        @if ($kantorinduk->count()>0)
            @foreach ($kantorinduk as $rs)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->kode_induk }}</td>
                    <td class="align-middle">{{ $rs->nama_induk }}</td>
                    <td class="align-middle">{{ $rs->telp }}</td>
                    <td class="align-middle">{{ $rs->alamat }}</td>
                    <td class="align-middle">
                            <a href="{{ route('kantorinduk.show', $rs->id)}}" class="btn btn-info btn-circle" type="button"><i class="fas fa-info-circle"></i></a>
                            <a href="{{ route('kantorinduk.edit', $rs->id)}}" class="btn btn-warning  btn-circle" type="button"><i class="far fa-edit"></i></a>
                            <form action="{{ route('kantorinduk.destroy', $rs->id)}}" method="POST" type="button" class="btn btn-danger btn-circle">
                            @csrf
                            @method('DELETE')
                                <button class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button>
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
