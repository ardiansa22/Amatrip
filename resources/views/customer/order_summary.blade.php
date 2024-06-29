@extends('customer.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../assets/css/summary.css">
</head>

<div class="container mt-5 p-3 rounded cart">
        <div class="row no-gutters">
            <div class="col-md-8">
                <div class="product-details mr-2">
                    <div class="d-flex justify-content-between align-items-center mt-3 p-2 items rounded">
                    <div class="d-flex flex-row">
                        <img class="rounded" src="{{ asset('storage/images/' . json_decode($wisata->images)[0]) }}" alt="{{ $wisata->name }}" style="width: 50px;" width="10px">
                        <div class="ml-2">
                            <span class="font-weight-bold d-block" style="color: black;">{{ $wisata->name }}&nbsp;</span>
                            <span class="spec" style="color: black;">{{ $wisata->kategori }}</span>
                        </div>
                    </div>
                    <div class="d-flex flex-row align-items-center">
                        <span class="d-block" style="color: black;">Quantity  {{$quantity}}</span>
                        <span class="d-block ml-5 font-weight-bold" style="color: black;">Total Price  {{ $quantity * $wisata->price }}</span>
                        <!-- <i class="fa fa-trash-o ml-3 text-white-50"></i> -->
                    </div>
                </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="payment-info">
                    <span class="type d-block mt-3 mb-1">Card type</span><label class="radio"> <input type="radio" name="card" value="payment" checked> <span><img width="30" src="https://img.icons8.com/color/48/000000/mastercard.png"/></span> </label>

                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/visa.png"/></span> </label>

                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/ultraviolet/48/000000/amex.png"/></span> </label>


                    <label class="radio"> <input type="radio" name="card" value="payment"> <span><img width="30" src="https://img.icons8.com/officel/48/000000/paypal.png"/></span> </label>
                    <div><label class="credit-card-label">Name on card</label><input type="text" class="form-control credit-inputs" placeholder="Name"></div>
                    <div><label class="credit-card-label">Card number</label><input type="text" class="form-control credit-inputs" placeholder="0000 0000 0000 0000"></div>
                    <div class="row">
                        <div class="col-md-6"><label class="credit-card-label">Date</label><input type="text" class="form-control credit-inputs" placeholder="12/24"></div>
                        <div class="col-md-6"><label class="credit-card-label">CVV</label><input type="text" class="form-control credit-inputs" placeholder="342"></div>
                    </div>
                    <hr class="line">
                    <div class="d-flex justify-content-between information"><span>Quantity</span><span>{{ $quantity }}</span></div>
                    <div class="d-flex justify-content-between information"><span>Subtotal</span><span>Rp. {{ $quantity * $wisata->price }}</span></div>
                    <div class="d-flex justify-content-between information"><span>Total(Incl. taxes)</span><span>Rp. {{ $quantity * $wisata->price }}</span></div><button class="btn btn-primary btn-block d-flex justify-content-between mt-3" type="button"><span>Rp. {{ $quantity * $wisata->price }}</span><span>Checkout<i class="fa fa-long-arrow-right ml-1"></i></span></button></div>
            </div>
        </div>
    </div>
@endsection

</html>
