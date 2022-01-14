@extends('layouts.default')

@section('title', 'Modifica post')

@section('main_content')
<form action="{{route('posts.update')}}" method="post">
  @csrf
  @method("PATCH")

  <div class="mb-3">
      <label for="title" class="form-label">Titolo</label>
      <input type="text" class="form-control" id="title" name="title" value="{{$post->title}}">
  </div>

  <div class="mb-3">
      <label for="subtitle" class="form-label">Subtitolo</label>
      <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$post->subtitle}}">
  </div>

  <div class="mb-3">
      <label for="content" class="form-label">Contenuto</label>
      <textarea  class="form-control" id="content" name="content" rows="3" value="{{$post->content}}">
      </textarea >
  </div>


  <div class="mb-3">
      <label for="coverImg" class="form-label">Immagine Principale</label>
      <input type="text" class="form-control" id="coverImg" name="coverImg" value="{{$post->coverImg}}">
  </div>

  <div class="mb-3">
      <label for="author" class="form-label">Autore</label>
      <input type="text" class="form-control" id="author" name="author" value="{{$post->author}}">
  </div>

  <div class="mb-3">
      <label for="category" class="form-label">Categoria</label>
      <input type="text" class="form-control" id="category" name="category" value="{{$post->category}}">
  </div>

  <div class="text-center">

      <button type="submit" class="btn btn-success"> Modifica </button>
      
  </div>
@endsection