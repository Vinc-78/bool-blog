@extends('layouts.default')

@section('title', 'Modifica post: ' . $post->title)

@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
  <div class="container">
      <div class="text-center my-5">
          <h1 class="fw-bolder">Modifica Post</h1>
          
      </div>
  </div>
</header>
@endsection

@section('main_content')

@if (!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
                <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
                </ul>
                </div>
            @endif


<form action="{{route('posts.update', $post->id)}}" method="post" class="my-3">
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
      <textarea  class="form-control" id="content" name="content" rows="3">{{$post->content}}</textarea >
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

      <input type="submit" class="btn btn-success" value="Modifica">
      <a href="{{route('posts.index')}}" class="btn btn-primary">Torna ai post</a>
      
  </div>
@endsection