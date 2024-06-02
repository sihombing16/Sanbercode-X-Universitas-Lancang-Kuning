@extends('layouts.master')

@section('title')
    Add Post
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/cast" method="post">
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
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama">
           </div>
           <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" name="umur" id="umur" placeholder="Masukkan umur">
                <label>Bio</label><br>
                <textarea name="bio" id="bio" cols="30" rows="10"></textarea><br>
             </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
@endsection