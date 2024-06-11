<header class="navigation fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-white">
            <a class="navbar-brand order-1" href="index.html">
                <img class="img-fluid" width="50px" src="{{ asset('assets/uploads/logo.png') }}" alt="Reader | Hugo Personal Blog Template">
            </a>
            <div class="collapse navbar-collapse text-center order-lg-2 order-3" id="navigation">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ asset('') }}" > Trang Chủ</a>
                           
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ asset('products') }}"  >
                            Sản phẩm <i class="ti-angle-down ml-1"></i>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{ asset('products/small') }}">Túi cỡ nhỏ</a>
                            <a class="dropdown-item" href="{{ asset('products/medium') }}">Túi cỡ trung</a>
                            <a class="dropdown-item" href="{{ asset('products/big') }}">Túi cỡ lớn</a>
                            <a class="dropdown-item" href="{{ asset('products/wallet') }}">Ví</a>
                            <a class="dropdown-item" href="{{ asset('products/backpack') }}">Balo</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('products/contact') }}">Liên hệ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ asset('products/about') }}">Giới thiệu</a>
                    </li>
                </ul>
            </div>

            <div class="order-2 order-lg-3 d-flex align-items-center">
                <!-- search -->
                <form class="search-bar">
                    <input id="search-query" name="s" type="search" placeholder="Tìm kiếm ...">
                </form>

                <button class="navbar-toggler border-0 order-1" type="button" data-toggle="collapse" data-target="#navigation">
                    <i class="ti-menu"></i>
                </button>
                <div class="d-flex align-items-center ml-3">
                    <a href="" class="mr-3"><img src="{{ asset('assets/uploads/cart.png') }}" width="30px" alt=""></a>
                    <a href=""><img src="{{ asset('assets/uploads/icon.png') }}" width="30px" alt=""></a>
                </div>
            </div>
        </nav>
    </div>
</header>
