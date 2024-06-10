@extends('layouts.master')
@section('title')
    Danh sách User
@endsection
@section('content')
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Avata</th>
                <th>Email</th>
                <th>Password</th>
                <th>Creater at</th>
                <th>Update at</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>
                        <?= $user['id'] ?>
                    </td>
                    <td>
                        <?= $user['name'] ?>
                    </td>
                    <td>
                        <img src="{{ asset($user['avatar']) }}" alt="Ảnh người dùng" width="80px">
                    </td>
                    <td>
                        <?= $user['email'] ?>
                    </td>
                    <td>
                        <?= $user['password'] ?>
                    </td>

                    <td>
                        <?= $user['created_at'] ?>
                    </td>
                    <td>
                        <?= $user['updated_at'] ?>
                    </td>
                    <td>
                        <a class="btn btn-danger" href="{{ url('admin/users/' . $user['id'] . '/delete') }}"
                            onclick="return confirm('Bạn có chắc chắn muốn xóa')">
                            Xóa
                        </a>
                        <a class="btn btn-warning" href="{{ url('admin/users/' . $user['id'] . '/show') }}">
                            Xem
                        </a>
                        <a class="btn btn-primary" href="{{ url('admin/users/' . $user['id']) . '/edit' }}">
                            Sửa
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
