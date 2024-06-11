@extends('layouts.master1')
@section('content')
    <div class="container">

        <div class="row text-center m-5 ">
            <h2>REGISTER AN ACCOUNT</h2>
        </div>
        @if (isset($_SESSION['errors']))
            <div class="alert alert-warning">
                <ul>
                    @foreach ($_SESSION['errors'] as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @php
                    unset($_SESSION['error']);
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
        <hr>
        <div>
            <form action="{{ url('/register/store') }}" enctype="multipart/form-data " method="POST">
                <div class="mt-3">
                    <label for="" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Name">
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Avatar:</label>
                    <input type="file" class="form-control" name="avatar">
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Email:</label>
                    <input type="text" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="mt-3">
                    <label for="" class="form-label">Password:</label>
                    <input type="text" class="form-control" name="password" placeholder="Enter Password">
                </div>
                <div class="mt-3">
                    <input type="hidden" name="role" value="2">
                </div>
                <div class="text-center">
                    <button type="submit" style="width: 25%" class="btn btn-primary">REGISTER</button>
                </div>
            </form>
        </div>
    </div>
@endsection
