@extends('layouts.master')

@section('title')
Chi tiết sản phẩm 
@endsection
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
<div class="col-12">
    <form >
        <label for="">Tên sản phẩm:</label>
        <input type="text" name="name" class=" form-control" id="name"  value="{{$product['name']}}" disabled >
        <label for="">Giá:</label>
        <input type="text" name="price" class=" form-control" id="price" disabled value="{{$product['price']}}">
        <label for="">Ảnh:</label>
        <img src="{{ asset($product['img'] )}}" width="50px" alt=""> <br>
        <label for="">Loại:</label>
        <select class="form-control" name="id_categories" id="id_categories">
            @foreach ($categoryPluck as $id => $name)
                <option @if($product['id_categories'] == $id)
                selected
                @endif
                value="{{$id}}" class="form-control" disabled>{{$name}}</option>
            @endforeach

        </select>
        <label for="description">Mô tả:</label>
        <textarea name="description" id="description" class="form-control" placeholder="Mô tả sản phẩm..."disabled>{{$product['name']}}</textarea>
        <div class="text-center m-5">
        <!-- <button type="submit" class="btn btn-outline-primary">Quay lại</button> -->
            <a href="{{url('admin/products')}}" class=" btn btn-outline-primary">Quay lại</a>
        </div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>

@endsection