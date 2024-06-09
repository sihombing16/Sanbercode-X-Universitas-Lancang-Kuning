@extends('layouts.master')

@section('title')
    Detail profil_karyawan
@endsection

@section('content')
    <h1>{{$alamat_karyawan->alamat_karyawan}}</h1>
    <p>{{$umur_karyawan->umur_karyawan}}</p>
    <p>{{$tanggal_lahir->tanggal_lahir}}</p>
   
    <a href="/profil_karyawan" class="btn btn-sm btn-secondary">Kembali</a>
@endsection