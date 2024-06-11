@extends('layouts.master')
@section('title')
Chi tiết danh mục
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
                    <form action="">
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">ID:</label>
                            <input type="text" class="form-control" id="id" name="id" value="{{ $category['id'] }}"
                                disabled>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="{{ $category['name'] }}" disabled>
                        </div>
                        <div class="mt-3 mb-3 text-center">
                            <a class="btn btn-secondary" href="{{ url('admin/categorys/') }}">Quay lại</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection