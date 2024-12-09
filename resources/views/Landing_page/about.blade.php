
@extends('Landing_page.layout.app')
@section('content')
    <div
      class="hero-wrap js-fullheight"
      style="background-image: url('images/rajaampat3.jpg')"
    >
      <div class="overlay"></div>
      <div class="container">
        <div
          class="row no-gutters slider-text js-fullheight align-items-center justify-content-center"
          data-scrollax-parent="true"
        >
          <div
            class="col-md-9 text-center ftco-animate"
            data-scrollax=" properties: { translateY: '70%' }"
          >
            <p
              class="breadcrumbs"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              <span class="mr-2"><a href="index.html">Home</a></span>
              <span>About</span>
            </p>
            <h1
              class="mb-3 bread"
              data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"
            >
              About Us
            </h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
      <div class="container">
        <div class="row d-md-flex">
          <div
            class="col-md-6 ftco-animate img about-image"
            style="background-image: url(images/LogoAmatrip.png)"
          ></div>
          <div class="col-md-6 ftco-animate p-md-5">
            <div class="row">
              <div class="col-md-12 nav-link-wrap mb-5">
                <div
                  class="nav ftco-animate nav-pills"
                  id="v-pills-tab"
                  role="tablist"
                  aria-orientation="vertical"
                >
                  <a
                    class="nav-link active"
                    id="v-pills-whatwedo-tab"
                    data-toggle="pill"
                    href="#v-pills-whatwedo"
                    role="tab"
                    aria-controls="v-pills-whatwedo"
                    aria-selected="true"
                    >What we do</a
                  >

                  <a
                    class="nav-link"
                    id="v-pills-mission-tab"
                    data-toggle="pill"
                    href="#v-pills-mission"
                    role="tab"
                    aria-controls="v-pills-mission"
                    aria-selected="false"
                    >Our mission</a
                  >

                  <a
                    class="nav-link"
                    id="v-pills-goal-tab"
                    data-toggle="pill"
                    href="#v-pills-goal"
                    role="tab"
                    aria-controls="v-pills-goal"
                    aria-selected="false"
                    >Our goal</a
                  >
                </div>
              </div>
              <div class="col-md-12 d-flex align-items-center">
                <div class="tab-content ftco-animate" id="v-pills-tabContent">
                  <div
                    class="tab-pane fade show active"
                    id="v-pills-whatwedo"
                    role="tabpanel"
                    aria-labelledby="v-pills-whatwedo-tab"
                  >
                    <div>
                      <h2 class="mb-4">
                        Connecting travelers to nature, one sustainable journey
                        at a time
                      </h2>
                      <p>
                        We connect travelers with eco-friendly destinations that
                        offer authentic experiences while supporting nature
                        conservation and empowering local communities. AmaTrip
                        is committed to providing memorable and sustainable
                        travel opportunities by promoting ecotourism, green
                        accommodations, and community-based activities.
                      </p>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade"
                    id="v-pills-mission"
                    role="tabpanel"
                    aria-labelledby="v-pills-mission-tab"
                  >
                    <div>
                      <h2 class="mb-4">
                        Empowering eco-conscious travel to preserve the world
                        for tomorrow
                      </h2>
                      <p>
                        We believe that tourism can be a force for good. Our
                        mission is to support environmental preservation and
                        empower local communities through responsible tourism
                        practices.
                      </p>
                    </div>
                  </div>

                  <div
                    class="tab-pane fade"
                    id="v-pills-goal"
                    role="tabpanel"
                    aria-labelledby="v-pills-goal-tab"
                  >
                    <div>
                      <h2 class="mb-4">
                        Inspiring change through sustainable choices for a
                        better planet
                      </h2>
                      <p>
                        Our goal is to inspire and enable travelers to make
                        eco-conscious choices that benefit the planet and local
                        communities. We aim to promote responsible tourism that
                        minimizes environmental impact, supports conservation
                        efforts, and fosters cultural exchange. Through
                        education, partnerships, and sustainable travel options,
                        we strive to make a positive and lasting impact on the
                        world.
                      </p>
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
    @endsection
