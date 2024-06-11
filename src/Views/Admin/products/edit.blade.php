@extends('layouts.master')

@section('title')
Sửa sản phẩm mới
@endsection
@section('content') 
@if(!empty($_SESSION['errors']))
    <div class="alert alert-warning">
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{$error}}</li>
            @endforeach

        </ul>
    </div>
    @php
        unset($_SESSION['errors']);
    @endphp
@endif
@if (isset($_SESSION['status']) && $_SESSION['status'])
    <div class="alert alert-success">{{$_SESSION['msg']}}</div>
    @php
        unset($_SESSION['status']);
        unset($_SESSION['msg']);

     @endphp

@endif
<div class="row justify-content-center">
    <div class="col-lg-12">
        <div class="white_card card_height_100 mb_30">
            <div class="white_card_header">
                <div class="box_header m-0">
                    <div class="main-title">
                        <h2 class="m-0">Thêm sản phẩm</h2>
                    </div>
                </div>
            </div>
            <div class="white_card_body">

                <div class="table-responsive">

                <div class="col-12">
    <form action="{{ url("admin/products/{$product['id'] }/update") }}" method="POST" enctype="multipart/form-data">
        <label for="">Tên sản phẩm:</label>
        <input type="text" name="name" class=" form-control" id="name" value="{{$product['name']}}">
        <label for="">Giá:</label>
        <input type="text" name="price" class=" form-control" id="price" value="{{$product['price']}}">
        <label for="">Ảnh:</label>
        <input type="file" name="img" class=" form-control" id="img" >
        <img src="{{ asset($product['img'] )}}" alt="" width="50px"> <br>
        <label for="">Loại:</label>
        <select class="form-control" name="id_categories" id="id_categories">
            @foreach ($categoryPluck as $id => $name)
                <option @if($product['id_categories'] == $id)
                selected
                @endif
                value="{{$id}}" class="form-control">{{$name}}</option>
            @endforeach

        </select>
        <label for="description">Mô tả:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Mô tả sản phẩm...">{{$product['name']}}</textarea>
        <div class="text-center m-5">
        <button type="submit" class="btn btn-outline-primary">Cấp nhật</button>
            <!-- <a href="{{url('admin/products/store')}}" class=" btn btn-outline-primary">Thêm</a> -->
        </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>

</form>
@endsection