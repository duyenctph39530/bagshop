@extends('layouts.master1')
@section('content')
<section class="section-sm">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12  mb-3 mb-lg-0">
                <h2 class="h5 section-title p-3">Chi Tiết Sản phẩm </h2>
                <div class="row p-3">
                    <div class="col-12 d-flex flex-wrap justify-content-center m-3">

                        <div class="col-7 text-center ">
                            <img src="{{asset($product['img'])}}" class="w-50" alt="">
                        </div>
                        <div class="col-5 text-center ">
                            <div class="">
                                <h3>{{$product['name']}}</h3>
                                <span class="text-danger">{{$product['price']}}₫ </span>
                            </div>
                            <div class="">
                                <h5>Màu sắc: </h5>
                                <input type="radio" name="" id="">Đen
                                <input type="radio" name="" id="">Hồng
                                <input type="radio" name="" id="">Xanh

                                <div class=" text-center m-5">
                                    <a href="{{asset('products/cart')}}" class=" btn btn-outline-success">Thêm vào rỏ
                                        hàng</a>
                                    <a href="{{asset('products/oder')}}" class=" btn btn-outline-danger">Mua</a>
                                </div>
                                <div class="">
                                    <h3>Mô tả sản phẩm: </h3>
                                    <p>{{$product['description']}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <h3 class="">Chính sách đổi trả: </h3>
                    <br>

                    <p> DYN hiện đang áp dụng chính sách Đổi/Trả cho các sản phẩm như sau:</p>
                    <p>- Trong vòng 30 ngày kể từ ngày nhận sản phẩm Túi, Ví, Giày (Hàng Nguyên Giá)</p>
                    <p>- Trong vòng 7 ngày đối với sản phẩm Khuyến mãi</p>
                    <p>- Phụ kiện (chỉ áp dụng với mắt kính, trang sức) và túi canvas được đổi/trả trong 7 ngày
                        trong
                        trường hợp có lỗi sản xuất</p>
                    <p>- Không áp dụng đổi trả Online với đơn hàng tại hệ thống Cửa hàng Đại lý và Cửa hàng Juno tại
                        TTTM
                        Sense City Phạm Văn Đồng</p>
                </div>
            </div>



        </div>
    </div>


    </div>

    </div>


</section>

@endsection