@extends('layouts.main')

@section('content')
<main class="blog" style="background: url({{ asset("assets/images/bg.jpg") }}) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="container" style="background: white;padding: 1em 3em 1em 3em;">
    <div class="container" style="padding-bottom: 15em;">
        <h3 style="">Фотографии</h3>
        <div style="display:flex">
            @foreach ($posts as $post)
                <div style="padding: 2%">
                    <img style="width: 100%" src="{{ asset('storage/' . $post->preview_image) }}" alt="Первый слайд">
                </div>
            @endforeach
        </div>
    </div>
</div>
</main>
@endsection