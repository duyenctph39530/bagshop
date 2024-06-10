@extends('layouts.master')

@section('title')
Product
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
                        <form action="{{url('admin/products/store')}}" method="POST" enctype="multipart/form-data">
                            <label for="">Tên sản phẩm:</label>
                            <input type="text" name="name" class=" form-control" id="name">
                            <label for="">Giá:</label>
                            <input type="text" name="price" class=" form-control" id="price">
                            <label for="">Ảnh:</label>
                            <input type="file" name="img" class=" form-control" id="img">
                            <label for="">Loại:</label>
                            <select class="form-control" name="id_categories" id="id_categories">
                                @foreach ($categoryPluck as $id => $name)
                                    <option value="{{$id}}" class="form-control">{{$name}}</option>
                                @endforeach

                            </select>
                            <label for="description">Mô tả:</label>
                            <textarea name="description" id="description" class="form-control"
                                placeholder="Mô tả sản phẩm..."></textarea>
                            <div class="text-center m-5">
                                <button type="submit" class="btn btn-outline-primary">Thêm</button>
                                <!-- <a href="{{url('admin/products/store')}}" class=" btn btn-outline-primary">Thêm</a> -->
                            </div>
                        </form>
                    </div>
                    @endsection