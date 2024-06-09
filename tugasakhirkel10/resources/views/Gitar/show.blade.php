@extends('layouts.master')

@section('title')
    Detail Gitar
@endsection

@section('content')
    <h1>{{$merek_gitar->merek_gitar}}</h1>
    <p>{{$model_gitar->model_gitar}}</p>
    <p>{{$harga_gitar->harga_gitar}}</p>
    <p>{{$stok_gitar->stok_gitar}}</p>

    <a href="/gitar" class="btn btn-sm btn-secondary">Kembali</a>
@endsection