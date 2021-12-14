@extends('layouts.main')

@section('container')

@foreach($posts as $post)
    <h1>
        <a href='/posts/{{$post["slug"]}}' >
        {{$post["title"]}}
        </a>
        
    </h1>
    <h3>By : {{$post["author"]}}</h3>
    <p>{{$post["body"]}}</p>

@endforeach





@endsection