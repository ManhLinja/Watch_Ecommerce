<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <!-- Mirrored from demo.hasthemes.com/oneclick-preview/oneclick/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 10:49:54 GMT -->
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <title>Ecommerce</title>
        <meta name="description" content="" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('contents/website') }}/img/favicon.png" />

        <!-- All css files are included here. -->
        <!-- animate css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/animate.min.css" />
        <!-- Bootstrap fremwork main css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/bootstrap.min.css" />
        <!-- font-awesome css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/font-awesome.min.css" />
        <!-- nivo-slider css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/nivo-slider.css" />
        <!-- owl carousel css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/owl.carousel.min.css" />
        <!-- icofont css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/icofont.css" />
        <!-- meanmenu css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/meanmenu.css" />
        <!-- jquery-ui css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/jquery-ui.min.css" />
        <!-- magnific-popup css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/magnific-popup.css" />
        <!-- percircle css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/percircle.css" />
        <!-- Theme main style -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/style.css" />
        <!-- Responsive css -->
        <link rel="stylesheet" href="{{ asset('contents/website') }}/css/responsive.css" />

        <!-- Modernizr JS -->
        <script src="{{ asset('contents/website') }}/js/vendor/modernizr-2.8.3.min.js"></script>
        
        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header start -->
        <div id="app">
            {{-- @include('include.flash') --}}
        <div class="main-wrapper box-shadow">
            <header class="clearfix">
                <div class="header-top-area bb hidden-xs">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-12">
                                @include('website.ecommerce.layouts.header_language')
                            </div>
                            <div class="col-xl-9 col-lg-9 col-md-9 col-12">
                                @include('website.ecommerce.layouts.header_right_links')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-middle-area ptb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                                @include('website.ecommerce.layouts.logo')
                            </div>
                            <div class="col-xl-9 col-lg-9 d-none d-lg-block">
                                <div class="home3-mainmenu mainmenu mt-12 home3-hover dropdown text-right">
                                    @include('website.ecommerce.layouts.navbar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-bottom home3-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 d-none d-lg-block show-menu">
                                @include('website.ecommerce.layouts.menu_sidebar')
                            </div>

                            <div class="col-xl-7 col-lg-6 col-md-8 col-12">
                                @include('website.ecommerce.layouts.search')
                            </div>

                            <div class="col-xl-2 col-lg-2 col-md-4 col-12">
                                @include('website.ecommerce.layouts.header_cart')
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobail-menu-area home3-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-12 col-md-6 d-block d-lg-none">
                                <div class="mobail-menu-active">
                                    @include('website.ecommerce.layouts.navbar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            @yield('content')

            <!-- order-area start -->
            <div class="order-area box-shadow ptb-30 bb bg-fff">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-order c-fff home3-bg p-20">
                                <div class="order-icon">
                                    <span class="fa fa-plane"></span>
                                </div>
                                <div class="order-content">
                                    <h5>Giao hàng quốc tế</h5>
                                    <span>với đơn hàng trên $100</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-order c-fff home3-bg p-20">
                                <div class="order-icon">
                                    <span class="fa fa-refresh"></span>
                                </div>
                                <div class="order-content">
                                    <h5>30 Ngày hoàn trả</h5>
                                    <span>Đảm bảo hoàn tiền</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-order c-fff home3-bg p-20 mrg-top-md">
                                <div class="order-icon">
                                    <span class="fa fa-umbrella"></span>
                                </div>
                                <div class="order-content">
                                    <h5>Hỗ trợ 24/7</h5>
                                    <span>Liên hệ: ( +84 ) 456 789</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="single-order c-fff home3-bg p-20 mrg-top-md">
                                <div class="order-icon">
                                    <span class="fa fa-user"></span>
                                </div>
                                <div class="order-content">
                                    <h5>Giảm giá thành viên</h5>
                                    <span>10% với đơn trên $200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- order-area end -->
            <!-- footer-area start -->
            <footer class="bg-fff bt">
                <div class="footer-top-area ptb-35 bb">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <div class="footer-logo mb-25">
                                        <img src="{{ asset('contents/website') }}/img/logo/9.png" alt="" style="margin-left: 50px;"/>
                                    </div>
                                    <div class="footer-content">
                                        <p>PGM Web Shop là sàn thương mại điện tử lớn nhất và uy tín nhất về các mặt hàng đồng hồ. Đem đến cho khách hàng những sản phẩm chính hãng với chất lượng cao nhất.</p>
                                        <ul>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Facebook"><i class="fa fa-facebook"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Twetter"><i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Instagram"><i class="fa fa-instagram"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Google-Plus"><i class="fa fa-google-plus"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-title bb mb-20 pb-15">Về chúng tôi</h3>
                                    <ul>
                                        <li>
                                            <div class="contuct-content">
                                                <div class="contuct-icon">
                                                    <i class="fa fa-map-marker"></i>
                                                </div>
                                                <div class="contuct-info">
                                                    <span>Bac Tu Liem, Ha Noi, Viet Nam</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contuct-content">
                                                <div class="contuct-icon">
                                                    <i class="fa fa-fax"></i>
                                                </div>
                                                <div class="contuct-info">
                                                    <span>01.234 56789 - 10.987 65432</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="contuct-content">
                                                <div class="contuct-icon">
                                                    <i class="fa fa-envelope"></i>
                                                </div>
                                                <div class="contuct-info">
                                                    <span>PGM@gmail.com</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-title bb mb-20 pb-15">Thông tin</h3>
                                    <div class="footer-menu home3-hover">
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="shop.html">Về cửa hàng</a></li>
                                            <li><a href="#">Mua sắm an toàn</a></li>
                                            <li><a href="#">Chính sách bảo mật</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-title bb mb-20 pb-15">Tài khoản</h3>
                                    <div class="footer-menu home3-hover">
                                        <ul>
                                            <li><a href="account.html">Tài khoản</a></li>
                                            <li><a href="checkout.html">Thanh toán</a></li>
                                            <li><a href="cart.html">Giỏ hàng</a></li>
                                            <li><a href="wishlist.html">Yêu thích</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-2 col-lg-2 col-md-2 col-sm-4 col-12">
                                <div class="footer-widget">
                                    <h3 class="footer-title bb mb-20 pb-15">Dịch vụ</h3>
                                    <div class="footer-menu">
                                        <ul>
                                            <li><a href="#">Giao hàng và hoàn trả</a></li>
                                            <li><a href="#">Mua sắm an toàn</a></li>
                                            <li><a href="#">Giao hàng quốc tế</a></li>
                                            <li><a href="#">Chi nhánh</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="footer-bottom ptb-20">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="copyright">
                                    <span>Copyright &copy; 2016 <a href="#">HasTech</a> All Rights Reserved.</span>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-12">
                                <div class="mayment text-right">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/p14.png" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </footer>
            <!-- footer-area end -->
            
        </div>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        @vite(['resources/js/app.js'])
        <!-- Placed js at the end of the document so the pages load faster -->
        
        <!-- jquery latest version -->
        <script src="{{ asset('contents/website') }}/js/vendor/jquery-1.12.4.min.js"></script>
        <!-- Popper js -->
        <script src="{{ asset('contents/website') }}/js/popper.js"></script>
        <!-- Bootstrap framework js -->
        <script src="{{ asset('contents/website') }}/js/bootstrap.min.js"></script>
        <!-- magnific popup js -->
        <script src="{{ asset('contents/website') }}/js/jquery.magnific-popup.min.js"></script>
        <!-- mixitup js -->
        <script src="{{ asset('contents/website') }}/js/jquery.mixitup.min.js"></script>
        <!-- jquery-ui price-->
        <script src="{{ asset('contents/website') }}/js/jquery-ui.min.js"></script>
        <!-- ScrollUp Js -->
        <script src="{{ asset('contents/website') }}/js/jquery.scrollUp.min.js"></script>
        <!-- countDown Js -->
        <script src="{{ asset('contents/website') }}/js/jquery.countdown.min.js"></script>
        <!-- nivo slider js -->
        <script src="{{ asset('contents/website') }}/js/jquery.nivo.slider.pack.js"></script>
        <!-- mobail menu js -->
        <script src="{{ asset('contents/website') }}/js/jquery.meanmenu.js"></script>
        <!-- owl carousel js -->
        <script src="{{ asset('contents/website') }}/js/owl.carousel.min.js"></script>
        <!-- All js plugins included in this file. -->
        <script src="{{ asset('contents/website') }}/js/plugins.js"></script>
        <!-- Main js file that contents all jQuery plugins activation. -->
        <script src="{{ asset('contents/website') }}/js/main.js"></script>
        <script type="text/javascript">
            function Huydonhang(id){
                var invoice_id = id;
                var lydo = $('.lydohuydon').val();
                // var status = 3;
                var _token = $('input[name="_token"]').val();
                
                $.ajax({
                    url: '{{ url('/huy-don-hang')}}',
                    method:"POST",
                    data:{invoice_id:invoice_id, lydo:lydo, _token:_token},
                    success:function(data){
                        alert('Thanh cong');
                        location.reload();
                    }
                });
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#sort_product').on('change', function(){
                    var url = $(this).val();
                    // alert(url);
                    if(url){
                        window.location = url;
                    }
                    return false;
                });
            });
        
          </script>
        
        @stack('custom_js')
        
    </body>
    

    <!-- Mirrored from demo.hasthemes.com/oneclick-preview/oneclick/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 01 Mar 2021 10:49:54 GMT -->
</html>