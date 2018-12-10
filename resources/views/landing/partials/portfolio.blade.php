<!-- Page Features -->
<div class="row text-center">
    @foreach($posts as $p)
    <div class="col-lg-3 col-md-6 mb-4">
        <div class="card">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
            <h4 class="card-title">{{ $p->post_title }}</h4>
            <p class="card-text">{{ $p->post_content }}</p>
            </div>
            <div class="card-footer">
            <a href="#" class="btn btn-primary">{{ $p->post_call_to_action }}</a>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- /.row -->