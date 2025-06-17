@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gap-2">
            <h1>{{__('books.editTitle')}}</h1>
            <div class="col-md-6">
                <form method="POST" action="{{ route('books.update', $book) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="title" class="form-label">{{__('books.title_placeholder')}}</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{$book->title}}" value="{{old('title', $book->title)}}" aria-describedby="titleHelp">
                        <div id="titleHelp" class="form-text">{{__('books.helpTitle_placeholder')}}</div>
                        @error('title')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="author" class="form-label">{{__('books.author_placeholder')}}</label>
                        <input type="text" class="form-control" id="author" name="author" value="{{$book->author}}" value="{{old('author', $book->author)}}" aria-describedby="authorHelp">
                        <div id="authorHelp" class="form-text">{{__('books.helpAuthor_placeholder')}}</div>
                        @error('author')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar libro</button>
                </form>
            </div>
        </div>
    </div>
@endsection
