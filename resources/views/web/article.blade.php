@extends('web.layout')

@section('main')

    <div class="container">
        <h1>{{ $article->name }}</h1>
        <div class="row">
            <img class="img-fluid col-4" src="{{ asset('uploads/'.$article->image) }}">
            <p class="col-8">{{ $article->content }}</p>
        </div>
        <span>{{ $article->created_at }}</span>
        <span>{{ $article->creater->name }}</span>
    </div>

@endsection
