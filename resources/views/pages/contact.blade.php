@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1>{{__('contact.title')}}</h1>
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.store') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">{{__('contact.email_placeholder')}}</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email">
                        @error('email')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">{{__('contact.message_placeholder')}}</label>
                        <textarea class="form-control @error('message') is-invalid @enderror"" id="message" name="message"></textarea>
                        @error('message')
                            <small style="color: red;">{{ $message }}</small>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">{{__('contact.send')}}</button>
                </form>
            </div>
        </div>
    </div>
@endsection
