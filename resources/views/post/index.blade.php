@extends('layouts.main')

@section('content')
<main class="blog">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Новости</h1>
        <section class="featured-posts-section">
            <div class="row mb-4">
                @foreach ($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-up">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{ 'storage/' . $post->preview_image }}" alt="фото">
                    </div>
                    <p class="blog-post-category">{{ $post->category->title }}</p>
                    <a href="{{ route('post.show', $post->id) }}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{ $post->title }}</h6>
                    </a>
                </div>    
                @endforeach
            </div>
            <div class="row">
                <div class="mx-auto" style="margin-top:-47px;padding-bottom: 10em;">
                    {{ $posts->links() }}
                </div>
            </div>
        </section>
        
    </div>

</main>
@endsection