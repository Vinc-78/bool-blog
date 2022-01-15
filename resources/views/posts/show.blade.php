@extends('layouts.default')

@section('title', "Post - " . $post->title)

@section('main_content')


<div class="card mb-3 pt-5" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img style="height: 100% ;object-fit: contain" src="{{$post['coverImg']}}" class="img-fluid rounded-start" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{$post['title']}} <br> {{$post['subtitle']}} </h5>
          <p class="card-text">{{$post['content']}}</p>
          <p class="card-text"><small class="text-muted">by {{$post->author}}</small></p>
          <p>{{$post['category']}}</p>

          <a href="{{route("posts.edit", $post->id)}}" class="btn btn-secondary mb-3">Modifica post</a>
<div class="d-flex">
    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Cancella Post">
    </form>
</div>
        </div>
      </div>
    </div>
  </div>


    {{-- <h1>{{$post['title']}}</h1>
    <h2>{{$post['subtitle']}}</h2>
    <p>{{$post['content']}}</p>
    <p>{{$post['author']}}</p>
    <img src="{{$post['coverImg']}}" alt="">
    <p>{{$post['category']}}</p>

    <a href="{{route("posts.edit", $post->id)}}" class="btn btn-secondary mb-3">Modifica post</a>

    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Cancella Post">
    </form> --}}

    
    
@endsection