@extends('Landing_page.layout.app')
@section('style')
<style>

    .blog-card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        transition: transform 0.3s ease;
    }

    .blog-card:hover {
        transform: scale(1.02);
    }

    .blog-card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .blog-card-body {
        padding: 15px;
    }

    .blog-card-title {
        font-size: 18px;
        font-weight: bold;
        color: #0046BF;
    }

    .blog-card-text {
        color: #555;
        font-size: 14px;
        margin-top: 10px;
    }
</style>
@endsection
@section('content')
<div class="hero-wrap js-fullheight" style="background-image: url({{ asset('storage/'.$blog->image) }});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
                <div class="col-md-9 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
                    <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                        <span class="mr-2"><a href="index.html">Home</a></span>
                        <span class="mr-2"><a href="blog.html">Blog</a></span>
                        <span>Blog Single</span>
                    </p>
                    <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$blog->title}}</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-degree-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-8 ftco-animate mx-auto">
                    <h2 class="mb-3 text-center">{{$blog->title}}</h2>
                    {!! $blog->content !!}
                                <!-- Link menuju halaman detail wisata terkait -->
                    @if ($blog->wisata)
                        <a href="{{ route('customer.show', $blog->wisata->id) }}">
                            Lihat Wisata Terkait: {{ $blog->wisata->name }}
                        </a>
                    @else
                        <p>Wisata terkait tidak tersedia.</p>
        @endif
    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- .section -->
     <!-- Blog Row -->
        <div class="container">
            <div class="row mt-5">
            @foreach($blogs as $blog)
            <div class="col-md-4">
                <a href="{{route('showblog',$blog)}}" class="text-decoration-none">
                    <div class="blog-card">
                        @if ($blog->image)
                            <img src="{{ asset('storage/'.$blog->image) }}" alt="post" class="card-img-top">
                        @else
                            <img src="{{ asset('images/default-placeholder.png') }}" alt="default image" class="card-img-top">
                        @endif
                        <div class="blog-card-body">
                            <h5 class="blog-card-title" style="color: green;">{{$blog->title}}</h5>
                            <p class="blog-card-text">{{ Str::limit(strip_tags($blog->content), 100) }}</p>
                        </div>
                    </div>
                </a>
            </div>
                @endforeach
            </div>
        </div>
        </div>

  
     @endsection