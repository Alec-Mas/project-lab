@extends('layouts.app')

@section('content')
<div class="container"> 
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Hi, {{\Auth::user()->name}}!</h1>
        <p class="lead">Let's start managing the websites content.</p>
    </header>
    <div class="container pl-3 pr-3">
        <div class="row mb-3">
            @if(count($hero) === 0)
            <button type="button" data-toggle="modal" data-target="#createHero" class="btn btn-primary mr-2">Create a new Hero</button>
            @endif
            <button type="button" data-toggle="modal" data-target="#createPost" class="btn btn-success mr-2">Create a new Post</button>
        </div>
        @include('dashboard.partials.hero')
        @include('dashboard.partials.manager')
        @include('dashboard.modals.edit-content')
    </div>

</div>


@endsection


