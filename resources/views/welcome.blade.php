@extends('layouts.default')

@section('title', "blog-boolean")

@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Welcome to Blog Home!</h1>
            <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p>
        </div>
    </div>
</header>
@endsection

@section('main_content')
    <h2 class="mb-5">Benvenuto sul blog di Boolean</h2>
   
    <a href="{{ route("posts.index") }}" class="btn btn-success">vai alla sezione dei posts</a>
@endsection