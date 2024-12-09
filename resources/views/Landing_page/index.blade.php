@extends('Landing_page.layout.app')
@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('images/bg_1.jpg')"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-start"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-9 ftco-animate"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <h1
              class="mb-4"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              <strong>Explore <br /></strong> EcoTourism Destinations
            </h1>
            <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">
              Find eco-friendly places to stay, dine, and explore while
              preserving our planet
            </p>
            <div class="block-17 my-4">
              <form action="" method="post" class="d-block d-flex">
                <div class="fields d-block d-flex">
                  <div class="textfield-search one-third">
                    <input
                      type="text"
                      class="form-control"
                      placeholder="Ex: food, service, hotel"
                    />
                  </div>
                  
                </div>
                <input
                  type="submit"
                  class="search-submit btn btn-primary"
                  value="Search"
                />
              </form>
            </div>
            <div class=" my-4">
            <p>Or browse the highlights</p>
            <p class="browse d-md-flex">
              <span
                class="d-flex justify-content-md-center align-items-md-center"
                ><a href="#">Biotic</a></span
              >
              <span
                class="d-flex justify-content-md-center align-items-md-center"
                ><a href="#top-tour-packages">
                 Abiotic</a
                ></span
              >
              <span
                class="d-flex justify-content-md-center align-items-md- center"
                ><a href="#"
                  >Cultural</a
                ></span
              >
            </p>
            </div>

          </div>
        </div>
      </div>
    </div>
    
    <section class="ftco-section services-section bg-light">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="images/eco.png"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Eco-Friendly Guarantee</h3>
                <p>
                  Explore our sustainable tourism practices that support local
                  ecosystems.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="images/community.png"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Nature Lovers Unite</h3>
                <p>
                  Join our community of eco-conscious travelers making a
                  positive impact.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="images/18438921.png"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Sustainable Tourism Practices</h3>
                <p>
                  Learn about our eco-friendly initiatives and how you can
                  contribute.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-3 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services d-block text-center">
              <div class="d-flex justify-content-center">
                <div class="icon">
                  <img
                    src="images/18439060.png"
                    alt="Eco-Friendly Icon"
                    style="width: 50px; height: auto"
                  />
                </div>
              </div>
              <div class="media-body p-2 mt-2">
                <h3 class="heading mb-3">Conservation Efforts</h3>
                <p>
                  Discover how our app supports conservation projects around the
                  world.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">FAQS</span>
            <h2 class="mb-4"><strong>Frequently</strong> Ask Question</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 ftco-animate">
            <div id="accordion">
              <div class="row">
                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menuone"
                        aria-expanded="true"
                        aria-controls="menuone"
                        >What is Ecotourism?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menuone" class="collapse show">
                      <div class="card-body">
                        <p>
                          Ecotourism is responsible travel to natural areas that
                          conserves the environment, sustains the well-being of
                          local people, and involves interpretation and
                          education. It promotes sustainability by minimizing
                          negative impacts on the environment and local culture
                          while maximizing benefits for local communities.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menutwo"
                        aria-expanded="false"
                        aria-controls="menutwo"
                        >Why should I choose eco-friendly travel?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menutwo" class="collapse">
                      <div class="card-body">
                        <p>
                          Choosing eco-friendly travel helps reduce your carbon
                          footprint, conserves natural resources, and supports
                          local communities. By traveling sustainably, you are
                          contributing to the preservation of the planet and
                          ensuring that future generations can experience the
                          same natural wonders you enjoy.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu3"
                        aria-expanded="false"
                        aria-controls="menu3"
                      >
                        How do I know if some places is eco-friendly?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu3" class="collapse">
                      <div class="card-body">
                        <p>
                          Eco-friendly places are certified by reputable
                          sustainability organizations and follow practices such
                          as using renewable energy, reducing water and waste
                          consumption, sourcing local and organic food, and
                          supporting conservation efforts. Look for green
                          certifications like Green Key or EarthCheck.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu4"
                        aria-expanded="false"
                        aria-controls="menu4"
                        >Are the destinations listed on AmaTrip truly
                        sustainable?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu4" class="collapse">
                      <div class="card-body">
                        <p>
                          Yes, all destinations on AmaTrip are carefully
                          selected based on their commitment to sustainable
                          tourism practices. We work with local partners who
                          prioritize environmental conservation, cultural
                          preservation, and community empowerment to ensure that
                          tourism benefits both travelers and the planet.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu5"
                        aria-expanded="false"
                        aria-controls="menu5"
                        >How can I minimize my environmental impact while
                        traveling?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu5" class="collapse">
                      <div class="card-body">
                        <p>
                          To minimize your environmental impact, you can choose
                          eco-friendly accommodations, reduce waste by avoiding
                          single-use plastics, opt for public transport or
                          eco-friendly modes of travel like biking, and support
                          local businesses that promote sustainable practices.
                          Additionally, always respect local cultures and
                          wildlife.
                        </p>
                      </div>
                    </div>
                  </div>

                  <div class="card">
                    <div class="card-header">
                      <a
                        class="card-link"
                        data-toggle="collapse"
                        href="#menu6"
                        aria-expanded="false"
                        aria-controls="menu6"
                        >Can I participate in conservation efforts during my
                        trip?
                        <span class="collapsed"
                          ><i class="icon-plus-circle"></i></span
                        ><span class="expanded"
                          ><i class="icon-minus-circle"></i></span
                      ></a>
                    </div>
                    <div id="menu6" class="collapse">
                      <div class="card-body">
                        <p>
                          Yes! Many of our featured destinations offer
                          opportunities to get involved in conservation efforts,
                          such as volunteering with local environmental
                          projects, participating in wildlife monitoring, or
                          supporting conservation organizations through
                          donations or eco-friendly activities. Check with our
                          travel partners for specific programs available at
                          your destination.
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
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
          <a href="{{route('showblog',$blog)}}">
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
                <a href="{{route('showblog',$blog)}}">{{$blog->title}}</a>
              </h3>
              {{ Str::limit(strip_tags($blog->content), 100) }}
            </div>
          </div>
        </div>
        @endforeach
        </div>
      </div>
    </section>
   
    <section class="ftco-section" id="top-tour-packages">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Top</strong> Tour Packages</h2>
          </div>
        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
        @foreach($wisatas as $wisata) 
          <div class="col-sm col-md-6 col-lg ftco-animate">
            <div class="destination">
            @php
                $images = json_decode($wisata->images, true);
              @endphp

              <a href="{{ route('customer.show', $wisata) }}" class="img img-2 d-flex justify-content-center align-items-center" 
                style="background-image: url({{ isset($images[0]) ? asset('storage/images/' . $images[0]) : '' }})">
                <div class="icon d-flex justify-content-center align-items-center">
                    <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <div class="d-flex">
                  <div class="one">
                    <h3><a href="#">{{$wisata->name}}</a></h3>
                    <p class="rate">
                      
                      <span>⭐ {{$wisata->rating_text}}</span>
                    </p>
                  </div>
                  <div class="two">
                    <span class="price">$30</span>
                  </div>
                </div>
                <p>
                {{ Str::limit(strip_tags($wisata->description), 100) }}
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Nusa Tenggara Timur</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section>

  

    <section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-start">
          <div class="col-md-5 heading-section ftco-animate">
            <span class="subheading">Best EcoTourism Website</span>
            <h2 class="mb-4 pb-3"><strong>Why</strong> Choose Us?</h2>
            <p>
              We are committed to sustainability and offer eco-friendly travel
              experiences that connect you with nature and local cultures. By
              choosing us, you support responsible tourism that benefits the
              environment and empowers local communities. Our carefully curated
              destinations and partners ensure that every trip minimizes
              environmental impact, while providing authentic and meaningful
              adventures. Travel with us and make a positive difference for the
              planet, while enjoying unique, eco-conscious journeys.
            </p>

            <p>
              <a
                href="#"
                class="btn btn-primary btn-outline-primary mt-4 px-4 py-3"
                >Read more</a
              >
            </p>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-6 heading-section ftco-animate">
            <span class="subheading">Testimony</span>
            <h2 class="mb-4 pb-3"><strong>Our</strong> Guests Says</h2>
            <div class="row ftco-animate">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                        style="background-image: url(images/person_1.jpg)"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from italy</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                        style="background-image: url(images/person_2.jpg)"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from London</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div
                        class="user-img mb-5"
                        style="background-image: url(images/person_3.jpg)"
                      >
                        <span
                          class="quote d-flex align-items-center justify-content-center"
                        >
                          <i class="icon-quote-left"></i>
                        </span>
                      </div>
                      <div class="text ml-md-4">
                        <p class="mb-5">
                          Far far away, behind the word mountains, far from the
                          countries Vokalia and Consonantia, there live the
                          blind texts.
                        </p>
                        <p class="name">Dennis Green</p>
                        <span class="position">Guest from Philippines</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-start mb-5 pb-3">
          <div class="col-md-7 heading-section ftco-animate">
            <span class="subheading">Special Offers</span>
            <h2 class="mb-4"><strong>Popular</strong> Local Foods</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="#"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/jagungtiti.jpg)"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Jagung Titi</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Makanan khas dari Flores yang terbuat dari jagung yang
                  dipipihkan dan dibakar, sering disajikan dengan kelapa parut
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span
                    ><i class="icon-map-o"></i> Flores, Nusa Tenggara
                    Timur</span
                  >
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="#"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/papeda.jpg)"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Papeda</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Bubur sagu khas Papua yang biasanya dimakan dengan ikan kuah
                  kunir
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Papua</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="#"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/satelilit.jpg)"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Sate Lilit Ayam</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Makanan khas Bali yang terbuat dari daging cincang yang
                  dicampur parutan kelapa, santan, jeruk nipis, bawang merah,
                  dan merica, lalu direkatkan ke tusuk bambu atau sereh
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Klungkung, Bali</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="destination">
              <a
                href="#"
                class="img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url(images/saksang.jpg)"
              >
                <div
                  class="icon d-flex justify-content-center align-items-center"
                >
                  <span class="icon-search2"></span>
                </div>
              </a>
              <div class="text p-3">
                <h3><a href="#">Saksang Babi</a></h3>
                <p class="rate">
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star"></i>
                  <i class="icon-star-o"></i>
                  <span>8 Rating</span>
                </p>
                <p>
                  Hidangan khas Batak yang terbuat dari daging babi atau ayam
                  yang dimasak dengan rempah-rempah dan darah untuk memberi
                  warna merah gelap
                </p>
                <hr />
                <p class="bottom-area d-flex">
                  <span><i class="icon-map-o"></i> Sumatera Utara</span>
                  <span class="ml-auto"><a href="#">Discover</a></span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection