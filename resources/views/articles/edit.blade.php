@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Artikel</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">jumlah</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">merek</label>
            <textarea class="form-control" id="content" name="content" rows="3" required>{{ $article->content }}</textarea>
        </div>
      
        <button type="submit" class="btn btn-primary">Update Artikel</button>
    </form>
</div>
@endsection