@extends('layouts.main')

@section('content')
<div class="container">
    <h1 class="edica-page-title aos-init aos-animate" data-aos="fade-up">{{ $post->title}}</h1>
    <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="featured image" class="w-100">
    </section>
    <section class="post-content">
        <div class="row pt-4">
            <div class="col-lg-9 mx-auto aos-init aos-animate" data-aos="fade-up">
                {!! $post->content !!}
            </div>
        </div>
    </section>
</div>
@endsection