@extends('layouts.main')

@section('container')
<h1>Post Categories</h1>

 @foreach($categories as $post)
    <h1>
        <a href='/categories/{{$post->slug}}' >
        {{$post->name}}
        </a>
        
    </h1>
    
    <p>{{$post->excerpt}}</p> 

@endforeach 





@endsection