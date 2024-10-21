@extends('layouts.app')

@section('content')
<div class="container">
    <div class="jumbotron text-center bg-light p-5 rounded-3 mb-5">
        <h1 class="display-4">Selamat Datang di depot air angie </h1>
        <p class="lead">Temukan informasi terbaru seputar depot air dan manfaatnya untuk kesehatan Anda.</p>
        <hr class="my-4">
        <p>Jelajahi artikel kami atau mulai berbagi pengetahuan Anda tentang air minum berkualitas.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('articles.index') }}" role="button">Pesan di sini</a>
    </div>

   

  
@endsection