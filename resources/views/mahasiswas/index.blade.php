@extends('layouts.app')
  
@section('title', 'Home Mahasiswa')
  
@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">List Mahasiswa</h1>
        <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Tambah</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>Jurusan</th>
                <th>E-mail</th>
                <th>Matakuliah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @if($mhs->count() > 0)
                @foreach($mhs as $m)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $m->nim }}</td>
                        <td class="align-middle">{{ $m->name }}</td>
                        <td class="align-middle">{{ $m->jurusan }}</td>
                        <td class="align-middle">{{ $m->email }}</td>  
                        <td class="align-middle">{{ $m->mk }}</td>  
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('mahasiswas.show', $m->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('mahasiswas.edit', $m->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('mahasiswas.destroy', $m->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="7">Data Mahasiswa Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection