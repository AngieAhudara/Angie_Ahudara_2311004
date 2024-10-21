@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Artikel Baru</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Jumlah</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">merek</label>
            <textarea class="form-control" id="content" name="content" rows="3" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Artikel</button>
    </form>
</div>
@endsection