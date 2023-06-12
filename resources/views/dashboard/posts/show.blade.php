@extends('dashboard.layouts.main')

@section('container')
    <div class="container">
        <div class="row my-3">
            <div class="col-lg-8">
                <h3 class="mb-3">{{ $post->title }}</h3>
                <a href="/dashboard/posts" class="btn btn-success">Back</a>
                <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger" onclick="return confirm('Are You Sure?')">Delete</button>
                </form>
                @if ($post->image)
                    <div style="max-height: 350px; overflow:hidden">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid mt-3">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3">
                @endif
                <article class="my-3 fs-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    </div>
@endsection
