@extends('web.layout')

@section('main')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @endif
    <div class="container">
        <form
            class="col-md-6 offset-md-3 col-sm-12 mt-4 shadow"
            action="{{ route('article.store') }}"
            method="post"
            enctype="multipart/form-data"
        >
            @csrf

            <label for="name">Title</label>
            <input value="{{ old('name') }}" class="form-control rounded-0" type="text" name="name" id="name">

            <label for="content">Content</label>
            <textarea class="form-control rounded-0" name="content" id="content" cols="30" rows="10">{{ old('content') }}</textarea>

            <label for="image">Upload image</label>
            <input class="form-control rounded-0" type="file" name="image" id="image">

            <input class="btn btn-success w-100 rounded-0" type="submit" value="submit">
        </form>
    </div>
@endsection
