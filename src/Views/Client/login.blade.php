@extends('layouts.master1')
@section('content')
    <div class="container">
        <div class="text-center mt-5 ">
            <h2>LOGIN</h2>
        </div>
        @if (isset($_SESSION['errors']))
            <div class="alert alert-danger">
                @if (is_array($_SESSION['errors']))
                    <ul>
                        @foreach ($_SESSION['errors'] as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @else
                    <p>{{ $_SESSION['errors'] }}</p>
                @endif
                <?php unset($_SESSION['errors']); // Xóa thông báo lỗi sau khi hiển thị ?>
            </div>
        @endif
        <hr>
        <div>
            <form action="{{ url('/login/store') }}" enctype="multipart/form-data " method="POST">
                <div class="mt-3">
                    <label for="" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Password:</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div>
                    <a href="{{ url('register') }}">Create account free! Here</a>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" style="width: 25%" class="btn btn-primary">LOGIN</button>
                </div>

            </form>
        </div>
    </div>
@endsection
