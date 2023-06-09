@extends('layouts.main')

@section('container')
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <h3 class="mb-3">{{ $post->title }}</h3>
                <p>Author :
                    <a href="/blog?author={{ $post->user->username }}">{{ $post->user->name }}</a>
                    Category : <a href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </p>
                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid">

                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
                <a href="/blog" class="btn btn-primary px-5">Back</a>
            </div>
        </div>
    </div>
@endsection
