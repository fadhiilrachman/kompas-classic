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
                <div class="card-header">
                    <div class="float-left">
                        {{ __('Daftar Artikel Yang Terbit') }}
                    </div>
                    <div class="float-right">
                        <a class="btn btn-success btn-sm" href="{{ route('author.create.form') }}">Buat Artikel Baru</a>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Judul Artikel</th>
                                <th width="280px" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($articles) > 0)
                                @foreach ($articles as $article)
                                <tr>
                                    <td>{{ $article->title }}</td>
                                    <td class="text-center">
                                        <form action="{{ route('article.delete', $article->article_id) }}" method="POST">
                                            <a class="btn btn-info btn-sm" href="{{ route('article.view', $article->article_id) }}">View</a>
                                            <a class="btn btn-primary btn-sm" href="{{ route('author.edit.form', $article->article_id) }}">Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Anda yakin ingin menghapus artikel ini?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="2" class="text-center">Penulis belum ada artikel</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
