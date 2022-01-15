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
        <div class="container">
            <div class="row-cols-1">
                @foreach ($posts as $post)
                    
                    <div class="col my-4">
                        <div class="card my_card">
                            <div class="my_card_img_cotnainer">
                                <img class="card-img-top" src="{{ $post->coverImg }}" alt="alt {{ $post->title }}">
                            </div>
                            <div class="card-body">
                                <h4 class="card-title">{{ $post->title }}</h4>
                                <h5 class="card-title">{{ $post->subtitle }}</h5>
                                <p class="card-text">{{ $post->content }}</p>
                                <a href="{{ route("posts.show", $post->id) }}" class="btn btn-primary">Vedi il Post</a>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>

        <a href="{{ route("posts.create") }}" class="btn btn-success mt-5">Crea un nuovo post</a>
    </div>
@endsection