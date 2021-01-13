@extends('layouts.blog')

@section('content')
<div class="row mb-2">
    @foreach ($articles as $article)
    <div class="col-md-6">
        <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">{{ $article->category }}</strong>
                <h3 class="mb-0">{{ $article->title }}</h3>
                <div class="mb-1 text-muted">{{ $article->created_at }}</div>
                <a href="{{ route('article.view', $article->article_id) }}" class="stretched-link">Continue reading</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection