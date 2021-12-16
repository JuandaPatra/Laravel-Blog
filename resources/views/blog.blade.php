@extends('layouts.main')

@section('container')

@foreach($posts as $post)
    <h1>
        <a href='/posts/{{$post->slug}}' >
        {{$post->title}}
        </a>
        
    </h1>
    <h3>By : {{$post->user->name}} in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h3>
    <p>{{$post->excerpt}}</p>

@endforeach





@endsection