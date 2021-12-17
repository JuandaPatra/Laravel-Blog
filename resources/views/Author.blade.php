@extends('layouts.main')

@section('container')
<h1 >{{$title}}</h1>

 @foreach($posts as $post)
    <h1 class="align-text-top">
        <a href="/posts/{{$post->slug}}">

            {{$post->title}}
        </a>
        
    </h1>
    <h3>By :<a href="/author/{{$post->user->username}}">{{$post->user->name}}</a>  in <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a></h3>
    
    <p>{{$post->excerpt}}</p> 

@endforeach 





@endsection