@extends('layouts.app')
  
@section('title', 'Detail Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Detail Mahasiswa</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NIM</label>
            <input type="text" name="nim" class="form-control" placeholder="NIM" value="{{ $mhs->nim }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="name" class="form-control" placeholder="Nama" value="{{ $mhs->name }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Jurusan</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $mhs->jurusan }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" name="email" class="form-control" placeholder="Email" value="{{ $mhs->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Mata Kuliah</label>
            <textarea class="form-control" name="mk" placeholder="Mata Kuliah" readonly>{{ $mhs->mk }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Dibuat Pada</label>
            <input type="text" name="created_at" class="form-control" placeholder="Dibuat Pada" value="{{ $mhs->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Diupdate Pada</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Diupdate Pada" value="{{ $mhs->updated_at }}" readonly>
        </div>
    </div>
@endsection