@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $article->title }}</h1>

    @if($article->image)
        <img src="{{ $article->image }}" alt="{{ $article->title }}" class="img-fluid mb-3" style="max-width: 100%;">
    @endif

    <div class="mb-4">
        {!! nl2br(e($article->content)) !!}
    </div>

    <div>
        <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Edit</a>
        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
        </form>
        <a href="{{ route('articles.index') }}" class="btn btn-secondary">Kembali ke Daftar</a>
    </div>
</div>
@endsection