@extends('layouts.master')

@section('title')
    Cast
@endsection

@section('content')
<a href="/cast/create" class="btn btn-sm btn-primary">Add Cast</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Umur</th>
      <th scope="col">Bio</th>
 <th scope="col">Action</th>

    </tr>
  </thead>
  <tbody>
    @forelse ($cast as $key=>$item)
    <tr>
      <th scope="row">{{$key + 1}}</th>
      <td>{{$item->nama}}</td>
      <td>{{$item->umur}}</td>
<td>{{$item->bio}}</td>
        
        <form action="/cast/{{$item->id}}" method="post>
        @csrf
        @method('delete')
        <a href="/cast/{{$item->id}}" class="btn btn-sm btn-info">Detail</a>
        <a href="/cast/{{$item->id}}/edit" class="btn btn-sm btn-info">Update</a>
        <input type="submit" class="btn btn-danger my-1" value="Delete">
        </form>
      </td>
      </tr>
    @empty
    <tr>
        <th>Tidak ada cast</th>
    </tr>
    @endforelse
    </tbody>
</table>
@endsection