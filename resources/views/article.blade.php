@extends('layouts.blog')

@section('content')
<div class="row">
    <div class="col-md-12">
        <article class="blog-post">
            <h2 class="blog-post-title">{{ $article->title }}</h2>
            <p class="blog-post-meta">{{ $article->created_at->diffForhumans() }} by {{ $user->name }}</p>
            {!! $article->content !!}
        </article>
    </div>
</div>
@endsection