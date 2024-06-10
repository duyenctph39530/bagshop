@extends('layouts.master')
@section('title')
<h1>Product </h1>

@endsection
@section('add')
<a href="{{url('admin/products/create')}}" class="btn btn-primary m-3">Thêm</a>
@endsection

<div class="row btn-danger">
    @if (isset($_SESSION['status']) && $_SESSION['status'])
        <div class="alert alert-success">{{$_SESSION['msg']}}</div>
        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);

         @endphp

    @endif
    @if (isset($_SESSION['status']) && !$_SESSION['status'])
        <div class="alert alert-success">{{$_SESSION['msg']}}</div>
        @php
            unset($_SESSION['status']);
            unset($_SESSION['msg']);

         @endphp

    @endif
</div>
@section('content')
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h2 class="m-0">Danh sách</h2>
                    </div>
                </div>
            </div>
            <div class="white_card_body">
                
                <div class="table-responsive">
                <table border="1" class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>IMG</th>
            <th>Categories</th>
            <th>Description</th>
            <th>Creater at</th>
            <th>Update at</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <td>
                    <?= $product['id'] ?>
                </td>
                <td>
                    <?= $product['name'] ?>
                </td>
                <td>
                    <?= $product['price'] ?>
                </td>
                <td>
                    <img src="{{asset($product['img'])}}" width="50px" alt="">
                </td>
                <td>
                    <?= $product['c_name'] ?>
                </td>
                <td>
                    <?= $product['description'] ?>
                </td>
                <td>
                    <?= $product['created_at'] ?>
                </td>
                <td>
                    <?= $product['updated_at'] ?>
                </td>
                <td>
                    <a href="{{ url("admin/products/{$product['id']}/show")}}" class="btn btn-primary">Xem Chi Tiết</a>
                    <a href="{{ url("admin/products/{$product['id']}/edit")}}" class="btn btn-primary">Sửa</a>
                    <a href="{{ url("admin/products/{$product['id']}/delete")}}" class="btn btn-danger"
                        onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xóa</a>


                    <!-- <form action=" {{ url('admin/products/ ' . $product['id'] . '/delete') }}" method="post">
                                                <button onclick="return confirm('Bạn có chắc chắn muốn xóa không?')"
                                                    type="submit">Delete</button>
                                            </form> -->

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection