@extends('layouts.app')
  
@section('title', 'Edit Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Edit Data Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswas.update', $mhs->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $mhs->nim }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $mhs->name }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Jurusan</label>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $mhs->jurusan }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">E-mail</label>
                <input type="text" name="email" class="form-control" placeholder="E-mail" value="{{ $mhs->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Mata Kuliah</label>
                <textarea class="form-control" name="mk" placeholder="Mata Kuliah" >{{ $mhs->mk }}</textarea>
            </div>    
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection