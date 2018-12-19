@extends('layouts.app')

@section('content')
<div class="container"> 
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">Hi, {{\Auth::user()->name}}!</h1>
        <p class="lead">Let's start managing the websites content.</p>
    </header>
    <div class="container pl-0 pr-0">
        <div class="card ml-0 mr-0">
            <div class="card-body">
                <div class="row mb-3 pl-3 pt-3">
                    @if(count($hero) === 0)
                    <button type="button" data-toggle="modal" data-target="#createHero" class="btn btn-primary mr-2">Create a new Hero</button>
                    @endif
                    <button type="button" data-toggle="modal" data-target="#createPost" class="btn btn-success mr-2">Create a new Post</button>
                </div>
            </div>
        </div>
        <div class="pl-3 pr-3 pt-4">
            @include('dashboard.partials.hero')
            @include('dashboard.partials.manager')
            @include('dashboard.modals.edit-content')
        </div>
    </div>

</div>


@endsection


