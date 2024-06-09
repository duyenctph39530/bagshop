@extends('layouts.master')
@section('title')
Danh sách Sản Phẩm
@endsection
@section('content')
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
                    <img src="{{asset($product['img'])}}" width="100px" alt="">
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
                    <a href="{{ url("admin/products/{$product['id']}/delete")}}" class="btn btn-primary"
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
@endsection