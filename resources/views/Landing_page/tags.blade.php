@extends('Landing_page.layout.app')
@section('content')

    

    <section class="ftco-section bg-light">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Recent Blog</span>
            <h2><strong>{{$tag}}</strong> &amp; Articles</h2>
          </div>
        </div>
        <div class="row d-flex">
          @foreach($articles as $blog)
          <div class="col-md-4 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch">
              <a href="{{ route('showblog', $blog->id) }}">
                @if ($blog->image)
                <img src="{{ asset('storage/'.$blog->image) }}" alt="post" class="card-img-top">
                @else
                <img src="{{ asset('images/default-placeholder.png') }}" alt="default image" class="card-img-top">
                @endif
              </a>
              <div class="text p-4 d-block">
                <span class="tag">{{ $blog->published_date }}</span>
               
                <h3 class="heading mt-3">
                  <a href="{{ route('showblog', $blog->id) }}">{{ $blog->title }}</a>
                </h3>
                {{ Str::limit(strip_tags($blog->content), 100) }}
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

@endsection
