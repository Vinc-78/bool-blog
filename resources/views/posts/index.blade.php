@extends('layouts.default')

@section('title', 'posts')

@section('main_content')
    <div class="container py-4">
        <h1 class="py-4">questa è la pagina principale dei posts</h1>

        <a href="{{ route("posts.create") }}" class="btn btn-success">crea un nuovo post</a>
    </div>
@endsection