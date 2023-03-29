<ul class="metismenu" id="menu">
    <li>
        <a class="has-arrow" href="javascript:void();">
            <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
            <div class="menu-title">Dashboard</div>
        </a>
        <ul class="">
            <li>
                <a href="#"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a>
            </li>
            
        </ul>
    </li>

    @if (Auth::user()->role_id == 1)
        <li>
            <a class="has-arrow" href="javascript:void();">
                <div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
                <div class="menu-title">User management</div>
            </a>
            <ul class="">
                <li>
                    <a href="{{ route('admin_user_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>Index</a>
                </li>
                <li>
                    <a href="{{ route('admin_user_role_index') }}"><i class="zmdi zmdi-dot-circle-alt"></i>User Role</a>
                </li>
            </ul>
        </li>
    @endif
    <li>
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
    </li>


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
            <div class="menu-title">Logout</div>
        </a>
    </li>

</ul>