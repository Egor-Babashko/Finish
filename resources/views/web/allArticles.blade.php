@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row row-cols-3">
            @foreach($articles as $article)
                <div class="col-4">
                    <h3>{{ $article->name }}</h3>
                    <p>{{ $article->content }}</p>
                    <form action="{{ route('article.destroy', $article->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete" class="btn btn-danger">
                        <a
                            href="{{ route('article.show', $article->id) }}"
                            class="btn btn-primary"
                        >Show</a>
                    </form>
                </div>
            @endforeach
        </div>
        {{ $articles->links() }}
    </div>
@endsection
