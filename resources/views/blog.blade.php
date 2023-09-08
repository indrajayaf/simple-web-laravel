@extends('layouts.main')
@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/blog">
            <div class="input-group mb-3">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                <input type="text" class="form-control" placeholder="Search.." aria-label="Search" aria-describedby="basic-addon2" name="search" value="{{ request('search') }}">
                <button class="btn btn-primary">Search</button>
              </div>
        </form>
    </div>
</div>

@if ($posts->count())
    <div class="card mb-3">

        @if ($posts[0]->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/'. $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}" class="img-fluid mt-3">
            </div>
        @else
            <img src="https://picsum.photos/1200/200" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        @endif
        <div class="card-body text-center">
            <h3 class="card-title"><a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
            <p>
                <small class="text-muted">
                        By. <a href="/blog?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/blog?category={{ $posts[0]->category->slug }}" class="text-decoration-none" >{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerp }}</p>
            <a href="/post/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more..</a>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $post)
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="position-absolute px-3 py-2" style="background-color:rgba(0, 0, 0, 0.7)"><a class="text-decoration-none text-white" href="/blog?category={{ $post->category->slug }}">{{ $post->category->name }}</a></div>
                    @if ($post->image)
                        <div style="max-height: 300px; overflow:hidden">
                            <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                        </div>
                    @else
                        <img src="https://picsum.photos/300/300" class="card-img-top" alt="{{ $post->category->name }}">
                    @endif
                    
                    <div class="card-body">
                      <h5 class="card-title">{{ $post->title }}</h5>
                      <p><small>By. <a href="/blog?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}</small></p>
                      <p class="card-text">{{ $post->excerp }}</p>
                      <a href="/post/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>
@else
    <p class="text-center fs-4">No posts found.</p>
@endif


<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>


@endsection
