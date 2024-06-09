@extends('layouts.master')

@section('title')
    Detail pelanggan
@endsection

@section('content')
    <h1>{{$nama_pelanggan->nama_pelanggan}}</h1>
    <p>{{$alamat_pelanggan->alamat_pelanggan}}</p>
    <p>{{$nomor_pelanggan->nomor_pelanggan}}</p>
   
    <a href="/pelanggan" class="btn btn-sm btn-secondary">Kembali</a>
@endsection