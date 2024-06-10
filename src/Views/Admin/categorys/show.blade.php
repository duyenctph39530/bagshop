@extends('layouts.master')
@section('title')
    Chi tiết danh mục
@endsection
@section('content')
    <form action="">
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">ID:</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $category['id'] }}" disabled>
        </div>
        <div class="mb-3 mt-3">
            <label for="email" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category['name'] }}"disabled>
        </div>
        <div class="mt-3 mb-3 text-center">
            <a class="btn btn-secondary" href="{{ url('admin/categorys/') }}">Quay lại</a>
        </div>
    </form>
@endsection
