@extends('layouts.master')

@section('title')
    Tampil Data
@endsection

@section('content')
    <a href="/profil_karyawan/create" class="btn btn-primary mb-3">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">alamat_pelanggan</th>
                <th scope="col">umur_karyawan</th>
                <th scope="col">tanggal_lahir</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($peprofil_karyawan as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->alamat_pelanggan}}</td>
                        <td>{{$item->umur_karyawan}}</td>
                        <td>{{$item->tanggal_lahir}}</td>
                        <td>
                            <div class="d-flex">
                            <a href="/profil_karyawan/{{$item->id}}" class="btn btn-info btn-sm mr-1">Show</a>
                            <a href="/profil_karyawan/{{$item->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit</a>
                            <form action="/profil_karyawan/{{$item->id}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                            </form>
                        </div>
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>No data cast</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>
@endsection