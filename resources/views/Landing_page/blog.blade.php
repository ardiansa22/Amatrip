@extends('Landing_page.layout.app')
@section('content')

    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('images/wae-rebo-village.jpg')"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-9 ftco-animate text-center"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <p
              class="breadcrumbs"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              <span class="mr-2"><a href="index.html">Home</a></span>
                        <span>Blog</span>
                        </p>
                        <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
                            Tips &amp; Articles
                        </h1>
            </div>
        </div>
        </div>
        </div>

        <section class="ftco-section bg-light">
          <div class="container">
            <div class="row justify-content-start mb-5 pb-3">
              <div class="col-md-7 heading-section ftco-animate">
                <span class="subheading">Recent Blog</span>
                <h2><strong>Tips</strong> &amp; Articles</h2>
              </div>
            </div>
            <div class="row d-flex">
            @foreach($blogs as $blog)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
              <a href="#">
                    @if ($blog->image)
                    <img src="{{ asset('storage/'.$blog->image) }}" alt="post" class="card-img-top">
                    @else
                    <img src="{{ asset('images/default-placeholder.png') }}" alt="default image" class="card-img-top">
                    @endif
                    </a>
                </a>
                <div class="text p-4 d-block">
                  <span class="tag">{{$blog->published_date}}</span>
                  <span class="tag">,</span>
                  <span class="tag">{{$blog->tags}}</span>
                  <h3 class="heading mt-3">
                    <a href="waerebo.html">{{$blog->title}}</a>
                  </h3>
                  {{ Str::limit(strip_tags($blog->content), 100) }}
                </div>
              </div>
            </div>
            @endforeach
            </div>
          </div>
          <div class="row mt-5">
            <div class="col text-center">
              <div class="block-27">
                <ul>
                  <li><a href="#">&lt;</a></li>
                                                          <li class="active"><span>1</span></li>
                                                          <li><a href="#">2</a></li>
                                                          <li><a href="#">3</a></li>
                                                          <li><a href="#">4</a></li>
                                                          <li><a href="#">5</a></li>
                                                          <li><a href="#">&gt;</a></li>
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                          </div>
        </section>
        
        @endsection