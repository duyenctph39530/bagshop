<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials.head')
</head>

<body>
    {{-- @include('layouts.partials.header') --}}

    <div class="container">
        <div class="row text-black p-2 mt-1">
            <div class="col-2 mt-1">
                <img src="{{ asset('assets/uploads/logo.png') }}" class="w-25">
            </div>
            <div class="col-5 mt-2">
                <ul class="nav text-black">
                    <li class="nav-item"><a class="nav-link active text-black" href="{{ url('') }}">Trang Chủ</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-black" href="products">Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="{{ url('contact') }}">Thông Tin</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="{{ url('contact/store') }}">Liên Hệ</a>
                    </li>
                </ul>
            </div>
            <div class="col-3 mt-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm...." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
            <div class="col-1 mt-2">
                <a href=""><img src="{{ asset('assets/uploads/cart.png') }}" class="w-50" alt=""></a>
            </div>
            <div class="col-1 mt-2">
                @if (isset($_SESSION['user']))
                    @if ($_SESSION['user']['role'] == 1)
                        <a href="{{ url('admin/users') }}">{{ $_SESSION['user']['name'] }}</a>
                        <a href="{{ url('logout') }}">Đăng xuất</a>
                    @else
                        <a href="{{ url('') }}">{{ $_SESSION['user']['name'] }}</a>
                        <a href="{{ url('logout') }}">Đăng xuất</a>
                    @endif
                @else
                    <a href="{{ url('login') }}">
                        <img src="{{ asset('assets/uploads/iconpeople.png') }}" class="w-50" alt="">
                    </a>
                @endif
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            @yield('banner')
        </div>
        <div class="row p-2">
            @yield('content')
        </div>
        <div class="row">
            @yield('sale')
        </div>
    </div>

    {{-- <footer class="row bg-secondary text-center mt-3">
        <p>@Chu Thị Duyên</p>
    </footer> --}}
    @include('layouts.partials.footer')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    @include('layouts.partials.script')

</body>

</html>
