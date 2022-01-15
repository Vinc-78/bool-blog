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
                @if ($posts->isEmpty())
                    <h2 class="text-secondary">Nessun post disponibile.</h2>
                
                @else
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
                                <p class="card-text"><small class="text-muted">by {{$post->author}}</small></p>
                                
                                <div class="d-flex style-btn pt-2">
                                    <a style="text-decoration: none" href="{{ route("posts.show", $post->id) }}" class="btn-primary">Vedi il Post</a>
                                    <a style="text-decoration: none" href="{{route("posts.edit", $post->id)}}">Modifica</a>
                                    <form class="form-find delete-form"  action="{{ route('posts.destroy', $post->id)}}" method="POST">
                                        @csrf
                                        @method("delete")
                                        
                                        <button  class="btn-form-style" type="submit"><span>Elimina</span></button>
                                    </form>
                                </div>
                            </div>                             
                        </div>
                    </div>

                @endforeach
                @endif
            </div>
            
        <script src="{{asset('js/app.js')}}"></script>
        </div>

        <a href="{{ route("posts.create") }}" class="btn btn-success mt-5">Crea un nuovo post</a>
    </div>
@endsection