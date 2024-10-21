@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Artikel Depot Air</h1>
    <a href="{{ route('articles.create') }}" class="btn btn-primary mb-3">Tambah Pesanan Baru</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @foreach($articles as $article)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $article->title }}</h5>
                <p class="card-text">{{ $article->getExcerpt() }}</p>
                <div>
                    <a href="{{ route('articles.show', $article) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('articles.destroy', $article) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus artikel ini?')">Hapus</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach

    {{ $articles->links() }}
</div>
@endsection