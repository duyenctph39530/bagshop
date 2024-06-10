@extends('layouts.master')
@section('title')
Cập nhật người dùng: {{ $user['name'] }}
@endsection
@section('content')
@if (!empty($_SESSION['errors']))
    <div class="alert alert-warning">
        <ul>
            @foreach ($_SESSION['errors'] as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

        @php
            unset($_SESSION['errors']);
        @endphp
    </div>
@endif

@if (isset($_SESSION['status']) && $_SESSION['status'])
    <div class="alert alert-success">
        {{ $_SESSION['msg'] }}
    </div>

    @php
        unset($_SESSION['status']);
        unset($_SESSION['msg']);
    @endphp
@endif
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
                    <form action="{{ url("admin/users/{$user['id']}/update") }}" enctype="multipart/form-data"
                        method="POST">
                        <div class="mb-3 mt-3">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name"
                                value="{{ $user['name'] }}" name="name">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email"
                                value="{{ $user['email'] }}" name="email">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="avatar" class="form-label">Avatar:</label>
                            <input type="file" class="form-control" id="avatar" placeholder="Enter avatar"
                                name="avatar">
                            <img src="{{ asset($user['avatar']) }}" alt="Img người dùng" width="100px">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="text" class="form-control" id="password" placeholder="Enter password"
                                name="password">
                        </div>
                        <div class="text-center">
                            <a class="btn btn-secondary" href="{{ url('admin/users/') }}">Quay lại</a>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection