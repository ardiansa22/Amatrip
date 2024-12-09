@extends('customer.layouts.app')

@section('style')
<style>
    .image-slider img {
        width: 100%;
        border-radius: 8px;
        margin-bottom: 15px;
    }

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
<div class="container" style="padding-top: 5rem;">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-4 col-sm-5">
                    <div class="image-slider">
                        @foreach(json_decode($wisata->images) as $image)
                            <img src="{{ asset('storage/images/' . $image) }}" alt="{{ $wisata->name }}">
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-6 col-sm-7">
                <h4 class="text-dark">{{ $wisata->name }}</h4>
                    <ul class="info mt-2">
                        <li><i class="fa fa-star text-warning"></i> {{ $wisata->rating_text }}</li>
                    </ul>
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                    <li class="nav-item"><a class="nav-link active show" href="#tab-1" data-bs-target=".etab-p1, .etabi-img1" data-bs-toggle="tab" style="color: green;">Detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-2" data-bs-target=".etab-p2, .etabi-img2" data-bs-toggle="tab" style="color: green;">Budaya</a></li>
                    <li class="nav-item"><a class="nav-link" href="#tab-3" data-bs-target=".etab-p3, .etabi-img3" data-bs-toggle="tab" style="color: green;">Info Penting</a></li>
                    </ul>
                    <div class="tab-content">
                    <div class="tab-pane fade show active etab-p1">
                    <p><b>Sejarah</b></p>
                    <p class="mt-3">{{ $wisata->description }}</p>
                    </div>
                    <div class="tab-pane fade etab-p2">
                        <p><b>Fasilitas</b></p>
                        <ul>
                            <li>a</li>
                            <li>a</li>
                            <li>a</li>
                        </ul>
                    </div>
                    <div class="tab-pane fade etab-p3">
                        <p>Content 3.</p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-7">
                    
                    <h4 class="text-dark">Atur Jumlah Pembelian</h4>
                    <div class="d-flex align-items-center mt-4">
                        <button class="btn btn-outline-success px-3 me-2" onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input id="quantity" min="0" name="quantity" value="1" type="number" class="form-control text-center" style="width: 60px;" />
                        <button class="btn btn-outline-success px-3 ms-2" onclick="document.getElementById('quantity').stepUp()">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>

                    <form id="checkout-form" action="{{ route('customer.checkout') }}" method="POST" class="mt-3">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="wisata_id" value="{{ $wisata->id }}">
                        <input type="hidden" name="quantity" id="hiddenQuantity" value="1">
                        <input type="hidden" name="total_price" id="total_price" value="{{ $wisata->price }}">
                        <div class="mb-3">
                            <input type="date" name="visit_date" required id="visit_date" class="form-control">
                            <small class="text-success"><i>*Tanggal wajib diisi</i></small>
                        </div>
                        <button type="submit" class="btn btn-success w-100">Checkout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-5">
        @foreach($wisatas as $wisata)
        <div class="col-md-4">
            <div class="card">
            <img src="{{ asset('storage/images/' . json_decode($wisata->images)[0]) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="font-size:20px;">{{$wisata->name}}</h3>
                    <p class="card-text" style="font-size: 16px;">alamat</p>
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="rating">
                            <span class="badge text-dark" style="font-size: 14px; background-color :#FFCB05;">
                                {{$wisata->rating_text}}
                            </span>
                        </div>
                        <a href="{{ route('customer.show', $wisata) }}" class="btn" style="background-color: green;">Discover</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
   
            
    


    

<script>
    document.getElementById('quantity').addEventListener('change', function() {
        document.getElementById('hiddenQuantity').value = this.value;
        document.getElementById('total_price').value = this.value * {{ $wisata->price }};
    });

    document.getElementById('checkout-form').addEventListener('submit', function() {
        document.getElementById('hiddenQuantity').value = document.getElementById('quantity').value;
        document.getElementById('total_price').value = document.getElementById('quantity').value * {{ $wisata->price }};
    });

    // Set minimum date to today
    const today = new Date().toISOString().split('T')[0];
    document.getElementById('visit_date').setAttribute('min', today);
</script>
<script>
    $('#myTab a[data-bs-toggle="tab"]').on('show.bs.tab', function(e) {
    let target = $(e.target).data('bs-target')
    $(target)
        .addClass('active show')
        .siblings('.tab-pane.active')
        .removeClass('active show')
})
</script>
@endsection
