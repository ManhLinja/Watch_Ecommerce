@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb',['title'=>'All'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-xl-2">
                                            <a href="ecommerce-add-new-products.html" class="btn btn-light mb-3 mb-lg-0"><i class="bx bxs-plus-square"></i>New Product</a>
                                        </div>
                                        <div class="col-lg-9 col-xl-10">
                                            <form class="float-lg-end">
                                                <div class="row row-cols-lg-auto g-2">
                                                    <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
                                                        <div class="position-relative mx-3">
                                                            <input type="text" class="form-control ps-5" placeholder="Search Product..." /> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="button" class="btn btn-light">Sort By</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-chevron-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="button" class="btn btn-light">Collection Type</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bxs-category"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="btn-group mx-3" role="group">
                                                            <button type="button" class="btn btn-light">Price Range</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-slider"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid">
                        @foreach ($collection as $item)
                            {{-- @include('admin.product.components.product_single_body',[
                                'product' => $item
                            ]) --}}
                            <div class="col admin_product_individual_body">
                                <div class="card position-relative">
                                    <img src="/{{ $item->thumb_image }}" class="card-img-top" alt="product image {{ $item->thumb_image }}" />
                                    <div class="">
                                        <div class="product-discount"><span class="">-{{ $item->discount }}%</span></div>
                                    </div>
                                    <div class="card-body">
                                        <h6 class="card-title cursor-pointer d-block">{{ $item->name }}</h6>
                                        <div class="clearfix d-flex justify-content-between">
                                            <p class="mb-0 "><strong>134</strong> Sales</p>
                                            <p class="mb-0  fw-bold">
                                                <span class="me-2 text-decoration-line-through"><del>${{ $item->price }}</del></span>
                                                <span class="text-white">${{ $item->discount_price }}</span>
                                            </p>
                                        </div>
                                        <div class="d-flex align-items-center mt-3 fs-6">
                                            <div class="cursor-pointer">
                                                <i class="fa fa-star text-white"></i>
                                                <i class="fa fa-star text-white"></i>
                                                <i class="fa fa-star text-white"></i>
                                                <i class="fa fa-star text-light-4"></i>
                                                <i class="fa fa-star text-light-4"></i>
                                            </div>
                                            <p class="mb-0 ms-auto">4.2(182)</p>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <ul class="d-flex flex-wrap justify-content-end">
                                            <li><a href="{{ route('product.edit',$item->id) }}" class="btn btn-sm btn-success ml-2">Edit</a></li>
                                            <li><a href="{{ route('product.show',$item->id) }}" class="btn btn-sm btn-warning ml-2">View</a></li>
                                            <li><a href="{{ route('product.destroy',$item->id) }}" data-parent=".admin_product_individual_body" class="btn delete_btn btn-sm btn-danger ml-2">Delete</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        {{-- <div class="col-12">
                            <div aria-label="Page navigation example" class="navigation_body">
                                {{ $collection->links() }}
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
            <!--start overlay-->
            <div class="overlay"></div>
            <!--end overlay-->
        </div>
        <!-- End container-fluid-->
    </div>
    <!--End content-wrapper-->

@endsection



