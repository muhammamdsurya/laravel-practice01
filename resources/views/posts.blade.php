@extends('layouts.main')

@section('container')
    <h1 class="mb-5"> {{ $title }}</h1>
    @if ($posts->count())
        <div class="card mb-3">
            <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                alt="...">
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p>By
                    <a href="/authors/{{ $posts[0]->user->username }}">
                        {{ $posts[0]->user->name }}
                    </a>
                    <small class="text-body-secondary ms-3">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p>Category :
                    <a href="/categories/{{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }}
                    </a>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found 😔</p>
    @endif

    <div class="container">
        <div class="row">

            @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">

                        <div class="position-absolute bg-dark p-3 text-white">
                            <a href="/categories/{{ $post->category->slug }}"
                                class="text-decoration-none text-white">{{ $post->category->name }}</a>
                        </div>
                        <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top"
                            alt="">
                        <div class="card-body">
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p>By
                                <a href="/authors/{{ $post->user->username }}">
                                    {{ $post->user->name }}
                                </a>
                                <small class="text-body-secondary ms-3">{{ $post->created_at->diffForHumans() }}</small>
                            </p>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
