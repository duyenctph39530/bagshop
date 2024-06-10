@extends('layouts.master')

@section('title')
    Thêm sản danh mục
@endsection

@section('content')
    <form action="{{ url('admin/categorys/store') }}" method="post">
        <label for="">Tên danh mục:</label>
        <input type="text" name="name" class="form-control">
        <div class="text-center m-5">
            <button class="btn btn-outline-primary">Thêm</button>
        </div>
    </form>
@endsection
