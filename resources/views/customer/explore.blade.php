@extends('customer.layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container" style="padding-top: 5rem;">
    <div class="row mb-5">
        @foreach($wisatas as $wisata)
        <div class="col-md-4">
            <div class="card">
            <img src="{{ asset('storage/images/' . json_decode($wisata->images)[0]) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3 class="card-title" style="font-size:20px;">{{$wisata->name}}</h3>
                    <p class="card-text" style="font-size: 16px;">Garut ,Jawabarat</p>
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
</div>

</body>
</html>
@endsection
