<!-- Page Features -->
<div class="row text-center">
    @foreach($posts as $p)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="{{asset('storage/'.$p->post_thumbnail)}}" alt="">
            <div class="card-body">
            <h4 class="card-title">{{ $p->post_title }}</h4>
            <p class="card-text">{{ $p->post_brief }}</p>
            </div>
            <div class="card-footer">
            <a href="{{ route('show.post', $p->id) }}" id="{{ $p->id }}" class="btn btn-primary">{{ $p->post_call_to_action }}</a>
            <p class="mt-2 mb-0"><i>Last updated {{ $p->updated_at->diffForHumans() }}</i></p>
            </div>
        </div>
    </div>
    @endforeach
</div>

<!-- /.row -->