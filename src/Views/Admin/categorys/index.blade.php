@extends('layouts.master')
@section('title')
    Danh sách danh mục
@endsection
@section('content')
    <div>
        <a class="btn btn-success" href="{{ url('admin/categorys/create') }}">Thêm mới</a>
    </div>
    <div class="text-end">
        <h5>Tổng số danh mục: <strong style="color: blue"> {{ $countCategory }} </strong></h5>
    </div>
    <div class="mt-3">
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
                            <a class="btn btn-danger" href="{{ url('admin/categorys/' . $item['id'] . '/delete') }}"
                                onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                                Xóa
                            </a>
                            <a class="btn btn-warning" href="{{ url('admin/categorys/' . $item['id'] . '/show') }}">
                                Xem
                            </a>
                            <a class="btn btn-primary" href="{{ url('admin/categorys/' . $item['id']) . '/edit' }}">
                                Sửa
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
