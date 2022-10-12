@extends('layouts.main')

@section('content')

<div class="blog">
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
@endsection