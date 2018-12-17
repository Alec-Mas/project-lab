@extends('layouts.app')

@section('content')
<div class="container">
    <header class="jumbotron my-4">
        <h1 class="display-3">Contact us</h1>
        <p class="lead">Drop us a line.</p>
    </header>

        <div class="table table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{ $u->name }}</td>
                    <td>{{ $u->email }}</td>
                    <td>
                        <a class="btn btn-primary mb-1" href="mailto:{{ $u->email }}?subject=Website Enquiry&body=Hi, I'm emailing you from the Immersive Media Services website, and would like to know...">
                            <i class="fa fa-envelope icon-large"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$users->links()}}
    </div>
</div>
@endsection
