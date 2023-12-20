@extends('layouts.app')
  
@section('title', 'Tambah Mahasiswa')
  
@section('contents')
    <h1 class="mb-0">Tambah Mahasiswa</h1>
    <hr />
    <form action="{{ route('mahasiswas.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="nim" class="form-control" placeholder="NIM">
            </div>
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan">
            </div>
            <div class="col">
                <input type="text" name="email" class="form-control" placeholder="E-mail">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="mk" placeholder="Mata Kuliah"></textarea>
            </div>
        </div>
 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection