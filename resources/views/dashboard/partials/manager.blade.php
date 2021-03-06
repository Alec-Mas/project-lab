<!-- Page Features -->
<div class="row text-center">
    <div class="table table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Post Title</th>
                <th scope="col">Post Brief</th>
                <th scope="col">Post Content</th>
                <th scope="col">Attached Documents</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Modified</th>
                <th scope="col">Last Upload</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            @foreach($posts as $p)
                <tr>
                    <td>{{ $p->post_title }}</td>
                    <td>{{ $p->post_brief }}</td>
                    <td>{{ substr($p->post_content, 0, 50) }}...</td>
                    <td>{{ count($p->documents) }}</td>
                    <td>{{ $p->created_at->diffForHumans() }}</td>
                    <td>{{ $p->updated_at->diffForHumans() }}</td>
                    <td>{{ $p->last_update->diffForHumans() }}</i></p>
                    <td>
                        <a class="btn btn-success mb-1" href="{{ route('show.post', $p->id) }}">
                            <i class="fa fa-eye icon-large"></i>
                        </a>
                        <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#editPost" data-id="{{ $p->id }}" data-whatever="{{ $p->id }}">
                            <i class="fa fa-wrench icon-large"></i>
                        </button>
                        <button class="btn btn-danger mb-1" data-toggle="modal" data-target="#deletePost" data-id="{{ $p->id }}">
                            <i class="fa fa-trash icon-large"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$posts->links()}}
    </div>
</div>
<!-- /.row -->