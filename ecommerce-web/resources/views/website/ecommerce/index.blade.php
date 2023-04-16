@extends('website.ecommerce.layouts.ecommerce')
@section('content')
	

            <!-- slider area start -->
            @include('website.ecommerce.home_include.slider')

            
            <div class="all-product-area mtb-45">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                            @include("website.ecommerce.home_include.lastest_deal")
                            <!-- featured-area start -->
                            @include('website.ecommerce.home_include.featured')
                            <!-- featured-area end -->
                            <!-- testimonils-area start -->
                            {{-- @include('website.ecommerce.home_include.testimonial') --}}
                            <!-- testimonils-area end -->
                            <!-- blog-area start -->
                            @include('website.ecommerce.home_include.blog')
                            <!-- blog-area end -->
                            <!-- newsletter-area start -->
                            {{-- @include('website.ecommerce.home_include.newsletter') --}}
                            <!-- newsletter-area start -->
                        </div>
                        <!-- product-area start -->
                        <div class="col-xl-9 col-lg-9 col-md-12 col-12">
                            <div class="product box-shadow bg-fff">
                                <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-paper-plane-o icon home3-bg2"></i>
                                    <h3>New Products</h3>
                                </div>
                                <div class="left left-right-angle">
                                    {{-- <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div>
                                    <div class="product-wrapper bl">
                                        <div class="product-img">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/product/15.jpg" alt="" class="primary" />
                                                <img src="{{ asset('contents/website') }}/img/product/16.jpg" alt="" class="secondary" />
                                            </a>
                                            <div class="product-icon c-fff home3-hover-bg">
                                                <ul>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                    </li>
                                                    <li>
                                                        <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <span class="sale">Sale</span>
                                        </div>
                                        <div class="product-content home3-hover">
                                            <h3><a href="#">Adipiscing cursus eu</a></h3>
                                            <ul>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                                <li><i class="fa fa-star"></i></li>
                                            </ul>
                                            <span>&300.00</span>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row">
                                        @for ($i = 0; $i < 4; $i++)
                                            <div class="col-md-3">
                                                @include('website.ecommerce.product.home_product_body')
                                            </div>
                                        @endfor
                                    </div> --}}
                                </div>
                            </div>
                            <!-- banner-area start -->
                            <div class="banner-area mtb-35">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/1.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/2.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- banner-area end -->
                            <!-- tab-area start -->
                            <div class="tab-area box-shadow bg-fff">
                                <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-check-square-o icon home3-bg2"></i>
                                    <h3>Recent Product</h3>
                                    <div class="tab-menu home3-tab-menu floatright hidden-xs">
                                        {{-- <ul class="nav">
                                            <li><a href="#" class="active">Electronics</a></li>
                                            <li><a href="#">Smartphone</a></li>
                                            <li><a href="#">Tablets</a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                                <div class="tab-content">
                                    {{-- <div role="tabpanel" class="tab-pane active" id="electronics">
                                        <div class="tab-active left home2 left-right-angle">
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/10.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/13.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/14.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/15.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/16.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="smartphone">
                                        <div class="tab-active left home2 left-right-angle">
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/16.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/15.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/14.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/13.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/10.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/3.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="tablets">
                                        <div class="tab-active left home2 left-right-angle">
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/4.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/8.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/2.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/11.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/14.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/5.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/7.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/13.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/14.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/9.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/16.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-items">
                                                <div class="product-wrapper bb bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/10.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/1.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <span class="sale">Sale</span>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                                <div class="product-wrapper bl">
                                                    <div class="product-img">
                                                        <a href="#">
                                                            <img src="{{ asset('contents/website') }}/img/product/12.jpg" alt="" class="primary" />
                                                            <img src="{{ asset('contents/website') }}/img/product/6.jpg" alt="" class="secondary" />
                                                        </a>
                                                        <div class="product-icon c-fff home3-hover-bg">
                                                            <ul>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Add to cart"><i class="fa fa-shopping-cart"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Wishlist"><i class="fa fa-heart-o"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-comments"></i></a>
                                                                </li>
                                                                <li>
                                                                    <a href="#" data-toggle="tooltip" title="Accumsan eli"><i class="fa fa-search"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="product-content home3-hover">
                                                        <h3><a href="#">Adipiscing cursus eu</a></h3>
                                                        <ul>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                            <li><i class="fa fa-star"></i></li>
                                                        </ul>
                                                        <span>&300.00</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    {{-- <div class="row">
                                        @for ($i = 0; $i < 12; $i++)
                                            <div class="col-md-3">
                                                @include('website.ecommerce.product.home_product_body')
                                            </div>
                                        @endfor
                                    </div> --}}
                                
                                        <product-single-body/>
                                
                                    
                                </div>

                            </div>
                            <!-- tab-area end -->
                            <!-- banner-area start -->
                            <div class="banner-area mtb-35">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/4.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="single-banner">
                                            <a href="#">
                                                <img src="{{ asset('contents/website') }}/img/banner/5.jpg" alt="" />
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- banner-area end -->
                            <!-- mostviewed-area start -->
                            <div class="mostviewed-area mt-35 box-shadow bg-fff">
                                {{-- <div class="product-title home3-bg text-uppercase">
                                    <i class="fa fa-check-square-o icon home3-bg2"></i>
                                    <h3>Products category</h3>
                                </div> --}}
                                {{-- <div class="row">
                                    @for ($i = 0; $i < 12; $i++)
                                        <div class="col-md-3">
                                            @include('website.ecommerce.product.home_product_body')
                                        </div>
                                    @endfor
                                </div> --}}
                            </div>
                            <!-- mostviewed-area end -->
                        </div>
                        <!-- product-area end -->
                        <div class="modal fade"  id="productViewModal" style="z-index: 999;" tabindex="-1" aria-labelledby="productViewModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-xl">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="productViewModalLabel">Details</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                                    </div>
                                    <div class="modal-body">
                                        <product-details></product-details>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- brand-area start -->
            <div class="brand-area mb-35">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <div class="brand-active box-shadow p-15 bg-fff">
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/2.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/3.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/1.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/4.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/5.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/6.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/7.jpg" alt="" />
                                    </a>
                                </div>
                                <div class="single-brand">
                                    <a href="#">
                                        <img src="{{ asset('contents/website') }}/img/brand/8.jpg" alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area end -->
            
@endsection
