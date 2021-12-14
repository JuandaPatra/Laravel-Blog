@extends('layouts.main')

@section('container')

<h1>{{$post["title"]}}</h1>
<h3>By : {{$post["author"]}}</h3>
<p>{{$post["body"]}}</p>

@endsection