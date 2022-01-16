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
          <div class="d-flex style-btn pt-2">
            <a style="text-decoration: none" href="{{route("posts.edit", $post->id)}}">Modifica</a>

            <form class="form-find delete-form"  action="{{ route('posts.destroy', $post->id)}}" method="POST">
              @csrf
              @method("delete")


              <button  class="btn-form-style" type="submit"><span>Elimina</span></button>
            </form>
        </div>
          
{{-- <div class="d-flex">

  <a href="{{route("posts.edit", $post->id)}}" class="btn btn-secondary mb-3">Modifica post</a>

    <form action="{{ route('posts.destroy', $post->id)}}" method="post" class="delete-form">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Cancella Post">
    </form>
</div> --}}
        </div>
      </div>
    </div>
  </div>
  <a href="{{route('posts.index')}}" class="btn btn-primary mb-3">Torna ai post</a>


  <script src="{{asset('js/app.js')}}"></script>

    
@endsection