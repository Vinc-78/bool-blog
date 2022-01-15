@extends('layouts.default')

@section('title', 'Creazione nuovo post')
 

@section('page_header')
<header class="py-5 bg-light border-bottom mb-4">
    <div class="container">
        <div class="text-center my-5">
            <h1 class="fw-bolder">Creazione Nuovo Post</h1>
            
        </div>
    </div>
</header>
@endsection


@section('main_content')

<form action="{{route('posts.store')}}" method="post">
    @csrf

    @if (!empty($errors->all()))
            <div class="alert alert-danger" role="alert">
                <ul>
                @foreach ($errors->all() as $item)
                    <li>{{$item}}</li>
                @endforeach
                </ul>
                </div>
            @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control {{$errors->has("title") ? 'is-invalid' : ''}}" 
        id="title" name="title" value="{{old("title")}}">
        
        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("title")[0]}}
            </div>
        @endif
    
    </div>

    <div class="mb-3">
        <label for="subtitle" class="form-label">Subtitolo</label>
        <input type="text" class="form-control {{$errors->has("subtitle") ? 'is-invalid' : ''}}" 
        id="subtitle" name="subtitle" value="{{old("subtitle")}}">

        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("subtitle")[0]}}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="content" class="form-label">Contenuto</label>
        <textarea  class="form-control {{$errors->has("content") ? 'is-invalid' : ''}}" 
            id="content" name="content" rows="3" value="{{old("content")}}">
        </textarea >

        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("content")[0]}}
            </div>
        @endif
    </div>


    <div class="mb-3">
        <label for="coverImg" class="form-label">Immagine Principale</label>
        <input type="text" class="form-control {{$errors->has("coverImg") ? 'is-invalid' : ''}}" 
        id="coverImg" name="coverImg" value="{{old("coverImg")}}">

        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("coverImg")[0]}}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="author" class="form-label">Autore</label>
        <input type="text" class="form-control {{$errors->has("author") ? 'is-invalid' : ''}}" 
        id="author" name="author" value="{{old("author")}}">

        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("author")[0]}}
            </div>
        @endif
    </div>

    <div class="mb-3">
        <label for="category" class="form-label">Categoria</label>
        <input type="text" class="form-control {{$errors->has("category") ? 'is-invalid' : ''}}" 
        id="category" name="category" value="{{old("category")}}">

        @if ($errors->has("title"))
            <div class="invalid-feeback">
                {{ $errors->get("category")[0]}}
            </div>
        @endif
    </div>

    <div class="text-center">

        <button type="submit" class="btn btn-success"> Crea </button>
        <button type="reset" class="btn btn-secondary"> Reset</button>
        
    </div>

</form>
    
<script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>

@endsection