@extends('layouts.main')

@section('container')
@if (\Session::has('success'))
<div class="alert alert-success">
    <ul>
        <li>{!! \Session::get('success') !!}</li>
    </ul>
</div>
@endif
<h1 class="text-center">Edit Article</h1>
<form method="POST" action="/edit/{{$post->slug}}">
    @csrf
    <label for="basic-url" class="form-label">Title</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" value="{{old('title',  $post->title)}}" name="title">
    </div>

    <label for="basic-url" class="form-label">Slug</label>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2" value="{{old('slug',$post->slug)}}" name="slug">
    </div>


    <label for="basic-url" class="form-label">Body</label>
    <div>
        <input id="body" type="hidden" name="body" value="{{old('slug',$post->body)}}">
        <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-success">Edit Data</button>
</form>
@endsection