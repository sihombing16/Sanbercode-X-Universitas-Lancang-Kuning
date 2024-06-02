@extends('layouts.master')

@section('title')
    Edit Post
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/cast/{{$cast->id}}" method="post">
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
        @method('put')
            <div class="form-group">
                <label for="title">Nama</label>
                <input type="text" class="form-control" name="Nama" value="{{$cast->nama}}" id="Nama" placeholder="Masukkan Nama">
           </div>
           <div class="form-group">
                <label>Umur</label>
                <input type="text" class="form-control" name="Umur" id="Umur" placeholder="Masukkan Umur">
                <label>Bio</label><br>
                <textarea name="bio" id="" cols="30" rows="10" class="form-control">{{$cast->bio}}</textarea><br>
             </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
@endsection