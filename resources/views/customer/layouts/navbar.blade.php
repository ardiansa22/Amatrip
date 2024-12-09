<!-- <nav id="navbar1" class="navbar navbar-expand fixed-bottom" style="background-color: white;">
  <ul class="navbar-nav nav-justified w-100">
    <li class="nav-item">
      <a class="nav-link" href="{{route('customer.index')}}">
        <i class="fa-solid fa-house" style="font-size: 26px;"></i>
        <span>Beranda</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('customer.explore')}}">
        <i class="fa-solid fa-globe" style="font-size: 26px;"></i>
        <span>Jelajah</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('customer.riwayat')}}">
        <i class="fa-solid fa-bell" style="font-size: 26px;"></i>
        <span>Pesanan</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('customer.profile')}}">
        <i class="fa-solid fa-user" style="font-size: 26px;"></i>
        <span>Profil</span>
      </a>
    </li>
  </ul>
</nav> -->

<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">AmaTrip</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <form class="d-flex me-auto">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('customer.index')}}">
          <!-- <i class="fa-solid fa-house" style="font-size: 26px;"></i> -->
          <span>Beranda</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('customer.explore')}}">
          <!-- <i class="fa-solid fa-globe" style="font-size: 26px;"></i> -->
          <span>Jelajah</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('customer.riwayat')}}">
          <!-- <i class="fa-solid fa-bell" style="font-size: 26px;"></i> -->
          <span>Pesanan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('customer.profile')}}">
          <!-- <i class="fa-solid fa-user" style="font-size: 26px;"></i> -->
          <span>Profil</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>