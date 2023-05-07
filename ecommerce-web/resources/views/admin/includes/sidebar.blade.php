<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Bảng điều khiển</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i> Trang chủ</a>
            </li>
            <li>
                <a href="{{ route('admin.orders.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Quản lý đơn hàng</a>
            </li>
            
        </ul>
    </li>

    @if (Auth::user()->role_id == 1)
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="fa fa-user-o"></i></div>
                <div class="menu-title">Quản lý người dùng</div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Người dùng</a>
                </li>
                {{-- <li>
                    <a href="{{ route('admin_user_role_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Quyền người dùng</a>
                </li> --}}
            </ul>
        </li>
    @endif
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="fa fa-shopping-cart"></i></div>
            <div class="menu-title">Quản lý sản phẩm</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('product.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Sản phẩm</a>
            </li>     
            {{-- <li>
                <a href="{{ route('product.create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Thêm sản phẩm</a>
            </li>      --}}
            <li>
                <a href="{{ route('brand.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Thương hiệu</a>
            </li>   
            <li>
                <a href="{{ route('main_category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Danh mục chính</a>
            </li>   
            <li>
                <a href="{{ route('category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Danh mục</a>
            </li>   
            <li>
                <a href="{{ route('sub_category.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Danh mục phụ</a>
            </li>   
            {{-- <li>
                <a href="{{ route('color.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Color</a>
            </li>   
            <li>
                <a href="{{ route('size.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Size</a>
            </li>   
            <li>
                <a href="{{ route('unit.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Unit</a>
            </li>   
            <li>
                <a href="{{ route('writer.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Writer</a>
            </li>   
            <li>
                <a href="{{ route('publication.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Publication</a>
            </li>   
            <li>
                <a href="{{ route('status.index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Status</a>
            </li>   --}}
        </ul>
    </li>

    {{-- <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Blank Pages</div>
        </a>
        <ul class="">
            <li>
                <a href="{{ route('admin_blade_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Index</a>
            </li>
            <li>
                <a href="{{ route('admin_blade_create') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Create</a>
            </li>
            <li>
                <a href="{{ route('admin_blade_view') }}"><i class="zmdi zmdi-dot-circle-alt"></i>view</a>
            </li>
            
        </ul>
    </li> --}}


    <li class="menu-label">Extra</li>
    <li>
        <a href="/" target="_blank">
            <div class="parent-icon"><i class="fa fa-globe"></i></div>
            <div class="menu-title">Website</div>
        </a>
    </li>
    <li>
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault(); confirm('Sure!') && document.getElementById('logout-form').submit();">
            <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
            <div class="menu-title">Đăng xuất</div>
        </a>
    </li>

</ul>