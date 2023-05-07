@extends('website.ecommerce.layouts.ecommerce')
@section('content')
<div class="main-container shop-bg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="woocommerce-breadcrumb mtb-15">
                    <div class="menu">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li class="active"><a href="shop.html">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-12 col-12">
                <!-- categories-area start -->
                <div class="categories-area box-shadow bg-fff">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Danh mục</h3>
                    </div>
                    {{-- <div class="shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">Accessories</a><span> (7)</span></li>
                            <li>
                                <a href="#">Clothing</a><span> (21)</span><span class="opener-1 fa fa-plus pull-right"></span>
                                <ul class="toggle-1">
                                    <li><a href="#">Hoodies</a><span> (20)</span></li>
                                    <li><a href="#">T-shirts</a><span> (3)</span></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Men's</a><span> (16)</span><span class="opener-2 fa fa-plus pull-right"></span>
                                <ul class="toggle-2">
                                    <li><a href="#">Hats</a><span> (9)</span></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Music</a><span> (11)</span><span class="opener-3 fa fa-plus pull-right"></span>
                                <ul class="toggle-3">
                                    <li><a href="#">Albums</a><span> (1)</span></li>
                                    <li><a href="#">Singles</a><span> (3)</span></li>
                                </ul>
                            </li>
                            <li><a href="#">Posters</a><span> (7)</span></li>
                            <li>
                                <a href="#">Women's</a><span> (14)</span><span class="opener-4 fa fa-plus pull-right"></span>
                                <ul class="toggle-4">
                                    <li><a href="#">Hats</a><span> (10)</span></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                </div>
                <!-- filter-by-price-area start -->
                <div class="filter-by-price-area mtb-30 bg-fff box-shadow">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Lọc theo giá</h3>
                    </div>
                    <div class="filter-by-price p-20-15">
                        <p>Giá: <input type="text" id="amount" /></p>
                        <div id="slider-range" class="ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content">
                            <div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0.4%; width: 99.6%;"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0.4%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span>
                        </div>
                        <div class="filter">
                            <button>Lọc</button>
                        </div>
                    </div>
                </div>
                <!-- size-area start -->
                <div class="size-area bg-fff box-shadow">
                    <div class="product-title home2-bg-1 text-uppercase home2-product-title">
                        <i class="fa fa-bookmark icon bg-4"></i>
                        <h3>Size</h3>
                    </div>
                    <div class="size-menu shop-categories-menu p-20">
                        <ul>
                            <li><a href="#">L</a><span> (1)</span></li>
                            <li><a href="#">M</a><span> (1)</span></li>
                            <li><a href="#">S</a><span> (1)</span></li>
                            <li><a href="#">XS</a><span> (1)</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- product-vew area start -->
            <div class="col-xl-9 col-lg-9 col-md-12 col-12 product-grid">
                <div class="tab-area">
                    <div class="row">
                        <form action="" class="form-inline">
                            <div class="form-group">
                                <input class="form-control ps-5" name="key" placeholder="Tìm kiếm sản phẩm">
                            </div>
                            <button type="submit" class="btn" style="background-color: #97744B; color:#fff; border-color:#97744B"><i class="fa fa-search"></i></button>
                        </form>
                        <div style="margin-left:20px">

                            <select name="sort_product" id="sort_product" class="form-control">
                                <option value="{{Request::url()}}?sort_by=none">Lọc sản phẩm</option>
                                <option value="{{Request::url()}}?sort_by=highest_to_lowest">Giá giảm dần</option>
                                <option value="{{Request::url()}}?sort_by=lowest_to_highest">Giá tăng dần</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" style="margin-top:25px;">
                        @foreach ($collection as $item)
                        <div class="col-md-3" >
                            
                            
                                                        <div class="product-wrapper">
                                                            <div class="product-img">
                                                                <div class="discount_amount" >
                                                                    <span>-{{ $item->discount }}%</span>
                                                                </div>
                                                                <a href="#">
                                                                    <img src="/{{ $item->thumb_image }}" alt="" style="height:190px;">
                                                                </a>
                                                                <div class="product-icon c-fff home3-hover-bg">
                                                                    <ul>
                                                                        <li><a href="#" data-toggle="tooltip" title="" data-original-title="Add to cart"><i class="fa fa-shopping-cart"></i></a></li>
                                                                        <li><a href="#" data-toggle="tooltip" title="" data-original-title="Wishlist"><i class="fa fa-heart-o"></i></a></li>
                                                                        <li><a href="#" data-toggle="tooltip" title="" data-original-title="Compare"><i class="fa fa-comments"></i></a></li>
                                                                        <li><a href="#" data-toggle="tooltip" @click.prevent="showModal(product)"  title="" data-original-title="view product details"><i class="fa fa-search"></i></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="product-content home3-hover">
                                                                <h3><a href="/product-details/{{ $item->id }}">{{ $item->name }}</a></h3>
                                                                <ul>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                    <li><i class="fa fa-star"></i></li>
                                                                </ul>
                                                                <div class="d-flex justify-content-between">
                                                                    <span>
                                                                        <del>${{ $item->price }} </del>
                                                                    </span>
                                                                    <span >${{ $item->discount_price }}</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                    
                                                    </div>
                                                    @endforeach
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
                            <div class="row">
                                {{ $collection->appends(request()->all())->links() }}
                            </div>
                </div>
            </div>
            {{-- <category-product /> --}}

        </div>
    </div>
</div>

    @push('custom_js')
        <script src="{{ asset('contents/website') }}/vue/products_page_vue.js"></script>
        <style>
            .product-wrapper {
                background: white;
                margin-bottom: 30px;
            }
            .toggle_display{
                display: block!important;
            }
        </style>
    @endpush

@endsection