@extends('layouts.main')

@section('container')

<h1>{{$post->title}}</h1>
<h3>By :{{$post->user->name}} in <a href="/categories/{{$post->category->slug}}" class="text-decoration-none">{{$post->category->name}}</a></h3>
<!-- <h3>By :  {{$post->author}}</h3> -->
{!! $post->body !!}

@endsection