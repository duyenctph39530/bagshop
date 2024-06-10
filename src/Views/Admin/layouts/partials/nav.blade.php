
    <nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
        <div class="logo d-flex justify-content-between">
            <a href="index-2.html"><img src="{{asset('assets/admin/img/logo.png')}}" alt></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li class="mm-active">
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('assets/admin/img/menu-icon/dashboard.svg')}}" alt>
                    </div>
                    <span>Dashboard</span>
                </a>
                <ul>
                    <li><a class="" href="products">Product</a></li>
                    <li><a href="users">User</a></li>
                    <li><a href="catogories">Category</a></li>
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/2.svg')}}" alt>
                    </div>
                    <span>User</span>
                </a>
                <ul>
                    <li><a href="{{asset('admin/users')}}">Danh sách</a></li>
                    <!-- <li><a href="{{asset('admin/users')}}">Xem chi tiết</a></li> -->
                    
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/3.svg')}}" alt>
                    </div>
                    <span>Product</span>
                </a>
                <ul>
                    <li><a href="{{asset('admin/products')}}">Danh sách</a></li>
                    <li><a href="{{asset('admin/products/create')}}">Thêm</a></li>
                    <!-- <li><a href="buttons.html">Xem Chi Tiết</a></li> -->
                </ul>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/4.svg')}}" alt>
                    </div>
                    <span>Category</span>
                </a>
                <ul>
                    <li><a href="{{asset('admin/categories/create')}}">Danh sách</a></li>
                    <li><a href="{{asset('admin/categories/create')}}">Thêm</a></li>
                    <!-- <li><a href="Max_Length.html">Max Length</a></li>
                    <li><a href="Layouts.html">Layouts</a></li> -->
                </ul>
            </li>
            <!-- <li class>
                <a href="Board.html" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/5.svg')}}" alt>
                    </div>
                    <span>Board</span>
                </a>
            </li>
            <li class>
                <a href="invoice.html" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/6.svg')}}" alt>
                    </div>
                    <span>Invoice</span>
                </a>
            </li>
            <li class>
                <a href="calender.html" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/7.svg')}}" alt>
                    </div>
                    <span>Calander</span>
                </a>
            </li>
            <li class>
                <a class="has-arrow" href="#" aria-expanded="false">
                    <div class="icon_menu">
                        <img src="{{asset('admin/img/menu-icon/8.svg')}}" alt>
                    </div>
                    <span>Products</span>
                </a>
                <ul>
                    <li><a href="Products.html">Products</a></li>
                    <li><a href="Product_Details.html">Product Details</a></li>
                    <li><a href="Cart.html">Cart</a></li>
                    <li><a href="Checkout.html">Checkout</a></li>
                </ul>
            </li> -->
        
        </ul>
    </nav>