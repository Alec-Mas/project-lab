@extends('layouts.app')

@section('content')
<div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">{{ $post->post_title }}</h1>
    </header>
    <!-- Post Content -->
    <div class="card">
        <div class="card-body">
            <p class="card-text">{{ $post->post_brief }}</p>
            <p class="card-text">{{ $post->post_content }}</p>
        </div>
    </div>
    @if(Auth::check())
    <!-- Documentation -->
    <div class="table table-responsive mt-4">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Document Name</th>
                <th scope="col">Document Created</th>
                <th scope="col">Document Last Updated</th>
                </tr>
            </thead>
            @foreach($post->documents as $d)
            <tbody>
                <tr>
                    <td>{{ $d->document_name }}</td>
                    <td>{{ $d->created_at->diffForHumans() }}</td>
                    <td>{{ $d->updated_at->diffForHumans() }}</td>
                    <td>
                        <a class="btn btn-success mb-1" href="{{ $d->document_link }}">
                            <i class="fa fa-download icon-large"></i>
                        </a>
                        <button href="#" data-toggle="modal" data-id="{{ $post->id }}"data-document="{{ $d->id }}" data-target="#editDocument" class="btn btn-primary mb-1"><i class="fa fa-wrench icon-large"></i></button>
                    </td>
                </tr>
            </tbody>
            @endforeach
        </table>
    </div>
    @endif
    @if(Auth::check())
    <div class="card mt-4">
        <div class="card-body">
            <button  data-toggle="modal" data-id="{{ $post->id }}" data-target="#createDocument" class="btn btn-primary">Attach a Document</button>
        </div>
    </div>
    @endif
</div>

@include('portfolio.modals.edit-post')

@endsection
