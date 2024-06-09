@extends('layouts.master')

@section('title')
Thêm sản phẩm mới
@endsection
@section('content')
<form action="{{url("admin/product/store")}}" method="post" enctype="multipart/form-data">
    <label for="">ID:</label>
    <input type="text" name="id" class=" form-control" id="">
    <label for="">Tên sản phẩm:</label>
    <input type="text" name="name" class=" form-control" id="">
    <label for="">Giá:</label>
    <input type="text" name="price" class=" form-control" id="">
    <label for="">Ảnh:</label>
    <input type="file" name="img" class=" form-control" id="">
    <select name="id_categories" id="">
        @foreach ($categoryPluck as $id => $name)
            <option value="{{$id}}">{{$name}}</option>
        @endforeach

    </select>
    <label for="description">Mô tả:</label>
    <input type="text" name="" class=" form-control" id="">
    <div class="text-center m-5">
        <button class=" btn btn-outline-primary">Thêm</button>
    </div>
</form>
@endsection