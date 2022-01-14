@extends('layouts.default')

@section('title', 'posts')

@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Posts</h1>
            
        </div>
    </div>
</header>
@endsection

@section('main_content')
    <div class="container py-4">
        <h1 class="py-4">questa è la pagina principale dei posts</h1>

        <div class="container">
            <div class="row">
                @foreach ($posts as $post)
                    
                    <div class="col">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{ $post->coverImg }}" alt="alt {{ $post->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <h4 class="card-title">{{ $post->subtitle }}</h4>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{ route("posts.show", $post->id) }}" class="btn btn-primary">Vedi il Post</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        <a href="{{ route("posts.create") }}" class="btn btn-success mt-5">crea un nuovo post</a>
    </div>
@endsection