@extends('layouts.main')

@section('content')
<style>
    img{
        height: auto;
        max-width: 100%;
        width: auto;
    }
</style>
<main class="blog" style="background: url({{ asset("assets/images/bg.jpg") }}) no-repeat center center fixed;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
    <div class="container" style="background: white;padding: 1em 3em 1em 3em;">
    <h1 class="edica-page-title aos-init aos-animate" style="font-size: 40px;" data-aos="fade-up">{{ $post->title}}</h1>
    <section class="blog-post-featured-img aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
        <img src="{{ asset('storage/' . $post->preview_image) }}" alt="featured image" class="w-100">
    </section>
    <section class="post-content">
        <div class="row pt-4" style="padding-bottom:10em">
            <div class="col-lg-9 mx-auto aos-init aos-animate" data-aos="fade-up">
                {!! $post->content !!}
            </div>
        </div>
    </section>
    </div>
</div>
</main>
@endsection