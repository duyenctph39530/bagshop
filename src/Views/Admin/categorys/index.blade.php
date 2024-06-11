@extends('layouts.master')
@section('title')
Danh sách danh mục
@endsection
@section('add')
<a href="{{asset('admin/categorys/create')}}" class="white_btn3">Thêm mới</a>

@endsection
@section('content')

<!-- <div class="text-end">
    <h5>Tổng số danh mục: <strong style="color: blue"> {{ $countCategory }} </strong></h5>
</div> -->
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
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($category as $item)
                                <tr>
                                    <td>
                                        <?= $item['id'] ?>
                                    </td>
                                    <td>
                                        <?= $item['name'] ?>
                                    </td>
                                    <td style="width: 195px;">
                                        <a class="btn btn-danger"
                                            href="{{ url('admin/categorys/' . $item['id'] . '/delete') }}"
                                            onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                            Xóa
                                        </a>
                                        <a class="btn btn-warning"
                                            href="{{ url('admin/categorys/' . $item['id'] . '/show') }}">
                                            Xem
                                        </a>
                                        <a class="btn btn-primary"
                                            href="{{ url('admin/categorys/' . $item['id']) . '/edit' }}">
                                            Sửa
                                        </a>
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