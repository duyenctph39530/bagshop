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
                <img src="{{ asset('assets/uploads/banner1.jpg') }}" class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/uploades/banner1.jpg') }}" class="d-block w-100" alt="">
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
<div class="card mb-4">
          <div class="card-body d-flex">
            <img src="{{asset('assets/uploads/banner1.jpg')}}" class="card-img-top" alt="post-thumb">

            <div class="ml-3">
              <h4><a href="post-details.html" class="post-title">The Design Files - Homes Minimalist</a></h4>
              <ul class="card-meta list-inline mb-0">
                <li class="list-inline-item mb-0">
                  <i class="ti-calendar"></i>14 jan, 2020
                </li>
                <li class="list-inline-item mb-0">
                  <i class="ti-timer"></i>2 Min To Read
                </li>
              </ul>
            </div>
          </div>
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
                    <img src="{{ $value['img'] }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $value['name'] }}</h5> <span class="badge text-bg-danger ">New</span>
                        <p class="card-text text-danger">Giá: {{ $value['price'] }}</p>
                        <a href="?act=detail-product" class="btn btn-outline-primary">Xem thêm</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row  d-flex flex-wrap justify-content-center m-5">

        <div class="col-3 ">
            <a href="{{ asset('products') }}" class="btn btn-link ">Xem Thêm</a>
        </div>
        
    </div>
@endsection

@section('sale')
    <h3 class="text-center m-3">FASHSALE SALE SẬP SÀN</h3>
    <hr>
    <div class="col-4">
        <img src="{{ asset('assets/uploads/sale1.jpg') }}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{ asset('assets/uploads/sale2.jpg') }}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{ asset('assets/uploads/sale3.jpg') }}" class="w-100" alt="">
    </div>
@endsection

<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12  mb-3 mb-lg-0">
                <h2 class="h5 section-title p-3">Top sản phẩm mới nhất</h2>
                <div class="row text-center p-3">
                    <div class="col-12 d-flex flex-wrap justify-content-center m-3">
                        @foreach ($products as $value)
                            <div class="col-3 d-flex align-items-stretch mb-2">
                                <div class="card m-3" style="width: 18rem;">
                                    <img src="{{ $value['img']}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $value['name']}}</h5> <span
                                            class="badge text-bg-danger ">New</span>
                                        <p class="card-text text-danger">Giá: {{ $value['price']}}</p>
                                        <!-- <a href="" class="btn btn-outline-danger">Mua ngay</a> -->

                                        <a href="{{asset("products/{$value['id']}/detail")}}" class="btn btn-outline-primary">Xem thêm</a>
                                    </div>
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
                <ul class="pagination justify-content-center">
                    <li class="page-item page-item active ">
                        <a href="#!" class="page-link">1</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">2</a>
                    </li>
                    <li class="page-item">
                        <a href="#!" class="page-link">&raquo;</a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</section>


@endsection

@section('sale')
<h3 class="text-center m-3">FASHSALE SALE SẬP SÀN</h3>
<hr>
<div class="row">
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale1.jpg')}}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale2.jpg')}}" class="w-100" alt="">
    </div>
    <div class="col-4">
        <img src="{{asset('assets/uploads/sale3.jpg')}}" class="w-100" alt="">
    </div>
</div>

@endsection
