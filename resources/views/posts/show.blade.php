@extends('layouts.default')

@section('title', 'show')

@section('main_content')
    <h1>{{$post['title']}}</h1>
    <h2>{{$post['subtitle']}}</h2>
    <p>{{$post['content']}}</p>
    <p>{{$post['author']}}</p>
    <img src="{{$post['coverimg']}}" alt="">
    <p>{{$post['category']}}</p>

    <a href="{{route("posts.edit", $post->id)}}" class="btn btn-secondary mb-3">Modifica post</a>

    <form action="{{ route('posts.destroy', $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <input class="btn btn-danger" type="submit" value="Cancella Post">
    </form>

    
    
@endsection