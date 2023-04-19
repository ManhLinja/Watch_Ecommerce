<div class="header-top-right" style="display: flex; align-items:center; justify-content:space-between;">
    <p class="pull-left h2-color mtb-10 d-none d-md-block">Wellcome to PGM Web Shop!</p>
    <div class="account-menu text-right pull-right home3-hover">
        <ul>
            {{-- <li><a href="#">My Account</a></li>
            <li><a href="#">Checkout</a></li>
            <li><a href="#">Shopping Cart</a></li> --}}
            {{-- <li>
                <a href="{{ route('login') }}">
                    Login/Register
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" style="display: flex;"
                onclick="event.preventDefault(); confirm('Sure!') && document.getElementById('logout-form').submit();">
                    <div class="menu-title" style="margin-right:5px">Logout</div>
                    <div class="parent-icon"><i class="fa fa-sign-out"></i></div>
                </a>
            </li> --}}
            @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <img src="{{ asset('contents/admin/assets') }}/images/avatars/{{ Auth::user()->photo }}" alt="" style="border-radius: 50%; width:30px; height:30px; margin-right:10px"> 
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     confirm('Sure!') && document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
        </ul>
    </div>
</div>