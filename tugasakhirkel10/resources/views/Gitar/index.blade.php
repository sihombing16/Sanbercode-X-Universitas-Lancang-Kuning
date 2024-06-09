@extends('layouts.master')

@section('title')
    Tampil Data
@endsection

@section('content')
    <a href="/gitar/create" class="btn btn-primary mb-3">Tambah</a>
    @if(session('success'))
    <div class="alert alert-success">{{session('success')}}</div>
    @endif
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Merek_gitar</th>
                <th scope="col">Model_gitar</th>
                <th scope="col">Harga_gitar</th>
                <th scope="col">Stok_gitar</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($gitar as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->merek_gitar}}</td>
                        <td>{{$item->Model_gitar}}</td>
                        <td>{{$item->harga_gitar}}</td>
                        <td>{{$item->stok_gitar}}</td>
                        <td>
                            <div class="d-flex">
                            <a href="/gitar/{{$item->id}}" class="btn btn-info btn-sm mr-1">Show</a>
                            <a href="/gitar/{{$item->id}}/edit" class="btn btn-primary btn-sm mr-1">Edit</a>
                            <form action="/gitar/{{$item->id}}" method="POST" class="d-inline">
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