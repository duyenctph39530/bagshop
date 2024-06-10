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
    <form action="{{ url("admin/categorys/{$category['id']}/update") }}" enctype="multipart/form-data" method="POST">
        <div class="mb-3 mt-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter name" value="{{ $category['name'] }}"
                name="name">
        </div>
        <div class="text-center mb-4">
            <a class="btn btn-secondary" href="{{ url('admin/categorys/') }}">Quay lại</a>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
