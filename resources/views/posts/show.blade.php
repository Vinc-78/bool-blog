@extends('layouts.default')

@section('title', 'show')

@section('main_content')
    <h1>{{$post['title']}}</h1>
    <h2>{{$post['subtitle']}}</h2>
    <p>{{$post['content']}}</p>
    <p>{{$post['author']}}</p>
    <img src="{{$post['coverimg']}}" alt="">
    <p>{{$post['category']}}</p>

    <form action="{{ route('post.destroy', ['id' => $post->id])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" value="Cancella Post">
    </form>

    
    
@endsection