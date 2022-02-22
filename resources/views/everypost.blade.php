@extends('layouts.main')

@section('container')

<div>
    <a class="btn btn-primary" href="/add">Add </a>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Title</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach($post as $item)
        <tr>
            <th scope="row">{{$loop->iteration}}</th>
            <td>{{$item->title}}</td>
            <td><a href="/posts/edit/{{$item->slug}}" class="btn btn-warning">Edit</a></td>
            <td><a type="button" class="btn btn-danger">Delete</a></td>
        </tr>
        @endforeach
        
    </tbody>
</table>

@endsection