@extends('layouts.master1')

@section('content')
<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 mb-3 mb-lg-0">
                <h2 class="h5 section-title p-3">Sản phẩm</h2>
                <div class="row text-center p-3">
                    <div class="col-12 d-flex flex-wrap justify-content-center m-3">
                        @foreach ($products as $value)
                        <div class="col-3 d-flex align-items-stretch mb-2">
                            <div class="card m-3" style="width: 18rem;">
                                <img src="{{asset( $value['img']) }}" class="card-img-top" alt="...">

                                <div class="card-body">
                                    <h5 class="card-title">{{ $value['name'] }}</h5>
                                    <span class="badge text-bg-danger">New</span>
                                    <p class="card-text text-danger">Giá: {{ $value['price'] }}</p>
                                    <a href="{{ asset("products/{$value['id']}/detail") }}" class="btn btn-outline-primary">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
