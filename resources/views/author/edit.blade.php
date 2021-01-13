@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Ubah Artikel') }}</div>
                <div class="card-body">
                    <form action="{{ route('article.edit', $article->article_id) }}" method="post">
                        @if ($errors->any())
                            <div class="alert alert-danger" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" value="{{ $article->title }}" name="title" id="title" placeholder="Masukkan judul artikel">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <input type="text" class="form-control" value="{{ $article->category }}" name="category" id="category" placeholder="Masukkan kategori artikel">
                        </div>
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" name="content" id="content" cols="30" rows="10">{{ $article->content }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Ubah Artikel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
