@extends('layouts.master')

@section('title')
    Add Post
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/profil_karyawan" method="post">
         {{-- validation --}}
   @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        {{-- form input --}}
        @csrf
            <div class="form-group">
                <label for="title">alamat_karyawan</label>
                <input type="text" class="form-control" name="alamat_karyawan" id="alamat_karyawan" placeholder="Masukkan alamat_karyawan">
           </div>
           <div class="form-group">
                <label>umur_karyawan</label>
                <input type="text" class="form-control" name="umur_karyawan" id="umur_karyawan" placeholder="Masukkan umur_karyawan">
                <label>tanggal_lahir</label><br>
                <input type="text" class="form-control" name="tanggal_karyawan" id="tanggal_karyawan" placeholder="Masukkan tanggal_karyawan">
             </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
@endsection