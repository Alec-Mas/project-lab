@extends('layouts.app')

@section('content')
<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-3">Media and Content Projects</h1>
        <p class="lead">View all of our engagements.</p>
    </header>

        <div class="table table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Project Name</th>
                <th scope="col">Project Brief</th>
                <th scope="col">Links</th>
                </tr>
            </thead>
            <tbody>
            @foreach($projects as $p)
                <tr>
                    <td>{{ $p->post_title }}</td>
                    <td>{{ $p->post_brief }}</td>
                    <td>
                        <a class="btn btn-success mb-1" href="{{ route('show.post', $p->id) }}">
                            <i class="fa fa-link icon-large"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
