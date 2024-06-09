@extends('layouts.master')

@section('title')
    Tampil Data
@endsection

@section('content')
    <a href="/pelanggan/create" class="btn btn-primary mb-3">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">nama_pelanggaan</th>
                <th scope="col">alamat_pelanggan</th>
                <th scope="col">nomor_pelanggan</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($pelanggan as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->nama_pelanggaan}}</td>
                        <td>{{$item->alamat_pelanggan}}</td>
                        <td>{{$item->nomor_pelanggan}}</td>
                        <td>
                            <div class="d-flex">
                            <a href="/pelanggan/{{$item->id}}" class="btn btn-info btn-sm mr-1">Show</a>
                            <a href="/pelanggan/{{$item->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit</a>
                            <form action="/pelanggan/{{$item->id}}" method="POST" class="d-inline">
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