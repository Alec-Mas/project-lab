<!-- Jumbotron Header -->
<header class="jumbotron my-4">
    @foreach($hero as $h)
    <h1 class="display-3">{{ $h->hero_title }}</h1>
    <p class="lead">{{ $h->hero_content }}</p>
    <a href="#" class="btn btn-primary btn-lg">{{ $h->hero_call_to_action }}</a>
    @endforeach
</header>