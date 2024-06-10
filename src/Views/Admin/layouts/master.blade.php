<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from demo.dashboardpack.com/sales-html/Board.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:15 GMT -->

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Sales</title>
    @include('layouts.partials.css')
</head>
<body class="crm_body_bg">

    @include('layouts.partials.nav')
    <section class="main_content dashboard_part large_header_bg">

        @include('layouts.partials.header')

        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">

                <div class="row">
                    <div class="col-12">
                        <div class="page_title_box d-flex align-items-center justify-content-between">
                            <div class="page_title_left">
                                <h3 class="f_s_30 f_w_700 text_white">@yield('title')</h3>
                            </div>
                            <a href="#" class="white_btn3">Create Report</a>
                        </div>
                    </div>
                </div>
                @yield('content')

=======
<body>
    <div class="container">
        <div class="row text-black   mt-1">
            <div class="col-2 mt-1">
                <img src="../../uploads/logo trường cd fpt polytechnic.jpg" class="w-25">
            </div>
            <div class="col-5 mt-2">
                <ul class="nav text-black  ">
                    <li class=" nav-item "><a class="nav-link active text-black "
                            href="{{ url('admin') }}">Dasboard</a>
                    </li>
                    <li class=" nav-item "> <a class="nav-link text-black " href="{{ url('admin/products') }}">Quản lý
                            sản
                            phẩm</a></li>
                    <li class=" nav-item "> <a class="nav-link text-black " href="{{ url('admin/categorys') }}">Quản lý
                            Danh Mục</a></li>
                    <li class=" nav-item "> <a class="nav-link text-black" href="{{ url('admin/users') }}">Quản lý người
                            dùng</a></li>
                </ul>
            </div>
            <div class="col-3 mt-2">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Tìm kiếm...." aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Tìm</button>
                </form>
            </div>
            <div class="col-2 mt-2">
                <a href="{{ url('') }}" class=" btn btn-danger ">Quay lại client</a>
            </div>
        </div>


        @include('layouts.partials.footer')
    </section>


    <div id="back-top" style="display: none;">
        <a title="Go to Top" href="#">
            <i class="ti-angle-up"></i>
        </a>
    </div>

    @include('layouts.partials.js')
</body>

<!-- Mirrored from demo.dashboardpack.com/sales-html/Board.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 May 2024 07:24:15 GMT -->

</html>