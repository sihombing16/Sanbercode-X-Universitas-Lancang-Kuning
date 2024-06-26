@extends('layouts.master')

@section('title')
    Tampil Data
@endsection

@section('content')
    <a href="/cast/create" class="btn btn-primary mb-3">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Umur</th>
                <th scope="col">Bio</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->nama}}</td>
                        <td>{{$item->umur}}</td>
                        <td>{{$item->bio}}</td>
                        <td>
                            <div class="d-flex">
                            <a href="/cast/{{$item->id}}" class="btn btn-info btn-sm mr-1">Show</a>
                            <a href="/cast/{{$item->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit</a>
                            <form action="/cast/{{$item->id}}" method="POST" class="d-inline">
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