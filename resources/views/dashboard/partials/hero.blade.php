<!-- Page Features -->
<div class="row text-center">
    <div class="table table-responsive">
        <table class="table">
            <thead>
                <tr>
                <th scope="col">Hero Title</th>
                <th scope="col">Hero Content</th>
                <th scope="col">Date Created</th>
                <th scope="col">Date Modified</th>
                <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
            @foreach($hero as $h)
                <tr>
                    <td>{{ $h->hero_title }}</td>
                    <td>{{ substr($h->hero_content, 0, 50) }}...</td>
                    <td>{{ $h->created_at->diffForHumans() }}</td>
                    <td>{{ $h->updated_at->diffForHumans() }}</td>
                    <td>
                        <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#editHero" data-id="{{ $h->id }}" data-whatever="{{ $h->id }}">
                            <i class="fa fa-wrench icon-large"></i>
                        </button>
                        <button class="btn btn-danger mb-1" data-toggle="modal" data-target="#deleteHero" data-id="{{ $h->id }}">
                            <i class="fa fa-trash icon-large"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$hero->links()}}
    </div>
</div>
<!-- /.row -->