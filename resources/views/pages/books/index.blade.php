@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row gap-2">
            <div class="d-flex justify-content-between">
                <h1>{{__('books.title')}}</h1>
                <a href="{{route('books.create')}}"><button type="button" class="btn btn-primary">{{__('books.create')}}</button></a>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">{{__('books.title_placeholder')}}</th>
                            <th scope="col">{{__('books.author_placeholder')}}</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($books as $book)
                        <tr>
                            <th scope="row">{{$book->id}}</th>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>
                                <div class="d-flex gap-1">
                                    <a href="{{route('books.edit', $book)}}"><button type="button" class="btn btn-primary">{{__('books.edit')}}</button></a>
                                    <form method="POST" action="{{ route('books.destroy', $book) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">{{__('books.destroy')}}</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$books->links()}}
            </div>
        </div>
    </div>
@endsection
