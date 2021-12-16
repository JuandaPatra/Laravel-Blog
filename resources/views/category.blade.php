@extends('layouts.main')

@section('container')
<h1>Post Category</h1>

 @foreach($posts as $post)
    <h1>
        <a href='/posts/{{$post->slug}}' >
        {{$post->title}}
        </a>
        
    </h1>
    
    <p>{{$post->excerpt}}</p> 

@endforeach 





@endsection