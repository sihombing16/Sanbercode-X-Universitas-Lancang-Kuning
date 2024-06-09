@extends('layouts.master')

@section('title')
    Add Post
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/pelanggan" method="post">
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
                <label for="title">nama_pelanggaan</label>
                <input type="text" class="form-control" name="nama_pelanggan" id="nama_pelanggan" placeholder="Masukkan nama_pelanggan">
           </div>
           <div class="form-group">
                <label>alamat_pelanggan</label>
                <input type="text" class="form-control" name="alamat_pelanggan" id="alamat_pelanggan" placeholder="Masukkan alamat_pelanggan">
                <label>nomor_telpon</label><br>
                <input type="text" class="form-control" name="nomor_pelanggan" id="nomor_pelanggan" placeholder="Masukkan nomor_pelanggan">
             </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
@endsection