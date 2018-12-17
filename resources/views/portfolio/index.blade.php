@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">{{ $post->post_title }}</h1>
    </header>
    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $post->post_brief }}</p>
            <p class="card-text">{{ $post->post_content }}</p>
            <a href="{{route('home')}}" class="btn btn-primary">Home</a>
        </div>
    </div>
</div>
@endsection
