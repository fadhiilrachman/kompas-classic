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
                <div class="card-header">{{ __('Buat Artikel Baru') }}</div>
                <div class="card-body">
                    <form action="{{ route('article.create') }} " method="post">
                        @csrf
                        <input type="hidden" name="author_id" value="{{ Auth::id() }}">
                        <div class="form-group">
                            <label for="title">Judul</label>
                            <input type="text" class="form-control" name="title" id="title" placeholder="Masukkan judul artikel">
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <input type="text" class="form-control" name="category" id="category" placeholder="Masukkan kategori artikel">
                        </div>
                        <div class="form-group">
                            <label for="content">Konten</label>
                            <textarea class="form-control" name="content" id="content" placeholder="Isi konten artikel disini" cols="30" rows="5"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Terbitkan Artikel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
