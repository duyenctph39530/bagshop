@extends('layouts.master')

@section('title')
Thêm sản danh mục
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
                    <form action="{{ url('admin/categorys/store') }}" method="post">
                        <label for="">Tên danh mục:</label>
                        <input type="text" name="name" class="form-control">
                        <div class="text-center m-5">
                            <button class="btn btn-outline-primary">Thêm</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection