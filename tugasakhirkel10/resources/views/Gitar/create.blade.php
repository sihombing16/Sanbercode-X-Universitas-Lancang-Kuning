@extends('layouts.master')

@section('title')
    Add Post
@endsection

@section('content')
<h2>Tambah Data</h2>
        <form action="/gitar" method="post">
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
                <label for="title">Merek_gitar</label>
                <input type="text" class="form-control" name="merek_gitar" id="merek_gitar" placeholder="Masukkan merek_gitar">
           </div>
           <div class="form-group">
                <label>Model_gitar</label>
                <input type="text" class="form-control" name="model_gitar" id="model_gitar" placeholder="Masukkan model_gitar">
                <label>Harga_gitar</label><br>
                <input type="text" class="form-control" name="harga_gitar" id="harga_gitar" placeholder="Masukkan harga_gitar">
                <label>Stok_gitar</label><br>
                <input type="text" class="form-control" name="stok_gitar" id="stok_gitar" placeholder="Masukkan stok_gitar">
             </div>
            <button type="submit" class="btn btn-danger">Submit</button>
        </form>
@endsection