@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row lg-5">
        <div class="col-md-8">
            <h1 class="my-3">{{ $post->title }}</h1>
            <a href="/dashboard/posts" class="btn btn-success"><i class="bi bi-arrow-left-square"></i> Back to all my posts</a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><i class="bi bi-pencil"></i> Edit</a>
            
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Are you sure?')">
                    <i class="bi bi-pencil"></i> Delete
                </button>
            </form>
            @if ($post->image)
                <div style="max-height: 350px; overflow:hidden">
                    <img src="{{ asset('storage/'. $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
                </div>
            @else
                <img src="https://picsum.photos/1200/400" alt="{{ $post->category->name }}" class="img-fluid mt-3">
            @endif
            <article class="my-3">
                {!! $post->body !!}
            </article>
        </div>
    </div>
</div>
@endsection