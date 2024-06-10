<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/admin/css/style1.css')}}">
</head>
<body>
    <h1>Xin chào</h1>
    {{$name}}
</body>
</html> -->
@extends('layouts.master1')
@section('banner')
<div id="carouselExampleIndicators" class="carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
            aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
            aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
            aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="{{asset('assets/uploads/banner1.jpg')}}" class="d-block w-100" alt="">
        </div>
        <div class="carousel-item">
            <img src="{{asset('assets/uploads/banner2.jpg')}}" class="d-block w-100" alt="">
        </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
@endsection
@section('content')

<div class="row text-center m-5 ">
    <h2>Top sản phẩm mới nhất</h2>
    <hr>
</div>
<div class="row text-center p-3">
    <div class="col-12 d-flex flex-wrap justify-content-center m-3">
        @foreach ($products as $value)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ $value['img']}}"  class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $value['name']}}</h5> <span class="badge text-bg-danger ">New</span>
                    <p class="card-text text-danger">Giá: {{ $value['price']}}</p>
                    <a href="?act=detail-product" class="btn btn-outline-primary">Xem thêm</a>
                </div>
            </div>
        @endforeach
    </div>

</div>
<div class="row  d-flex flex-wrap justify-content-center m-5">
 
    <div class="col-3 ">
        <a href="{{asset('products')}}" class="btn btn-link ">Xem Thêm</a>
    </div>
</div>

@endsection

@section('sale')
<h3 class="text-center m-3">FASHSALE SALE SẬP SÀN</h3><hr>
<div class="col-4">
    <img src="{{asset('assets/uploads/sale1.jpg')}}" class="w-100" alt="">
</div>
<div class="col-4">
    <img src="{{asset('assets/uploads/sale2.jpg')}}" class="w-100" alt="">
</div>
<div class="col-4">
    <img src="{{asset('assets/uploads/sale3.jpg')}}" class="w-100" alt="">
</div>

@endsection