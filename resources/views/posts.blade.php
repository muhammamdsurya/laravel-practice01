@extends('layouts.main')

@section('container')
    <h1 class="mb-5 text-center"> {{ $title }}</h1>

    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/blog">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('user'))
                    <input type="hidden" name="user" value="{{ request('user') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow:hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="...">
            @endif
            <div class="card-body text-center">
                <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                    <h3 class="card-title">{{ $posts[0]->title }}</h3>
                </a>
                <p>By
                    <a href="/blog?user={{ $posts[0]->user->username }}">
                        {{ $posts[0]->user->name }}
                    </a>
                    <small class="text-body-secondary ms-3">{{ $posts[0]->created_at->diffForHumans() }}</small>
                </p>
                <p>Category :
                    <a href="/blog?category={{ $posts[0]->category->slug }}">
                        {{ $posts[0]->category->name }}
                    </a>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary">Read More</a>
            </div>
        </div>

        <div class="container">
            <div class="row">

                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">

                            <div class="position-absolute bg-dark p-3 text-white">
                                <a href="/blog?category={{ $post->category->slug }}"
                                    class="text-decoration-none text-white">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3">
                            @else
                                <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                                    class="img-fluid">
                            @endif
                            <img src="https://source.unsplash.com/600x400?{{ $post->category->name }}" class="card-img-top"
                                alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->title }}</h5>
                                <p>By
                                    <a href="/blog?user={{ $post->user->username }}">
                                        {{ $post->user->name }}
                                    </a>
                                    <small
                                        class="text-body-secondary ms-3">{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No Post Found 😔</p>
    @endif

    <div class="pagination d-flex justify-content-center mb-5">
        {{ $posts->links() }}
    </div>

@endsection
