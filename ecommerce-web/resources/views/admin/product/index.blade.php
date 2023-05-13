@extends('admin.layouts.admin')

@section('content')

    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb',['title'=>'TẤT CẢ SẢN PHẨM'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-lg-3 col-xl-2">
                                            <a href="{{ route('product.create') }}" class="btn btn-light mb-3 mb-lg-0"><i class="bx bxs-plus-square"></i>Thêm sản phẩm</a>
                                        </div>
                                        <div class="col-lg-9 col-xl-10">
                                            <form action="" class="float-lg-end">
                                                @csrf

                                                <div class="row row-cols-lg-auto g-2">
                                                    <div class="col-12 d-flex flex-wrap justify-content-end align-items-center">
                                                        <div class="position-relative mx-3">
                                                            {{-- <input type="text" class="form-control ps-5" placeholder="Search Product..." /> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span> --}}
                                                            {{-- <form action="" class="form-inline" > --}}
                                                                {{-- <div class="form-group ps-5" > --}}
                                                                    <input class="form-control ps-5" name="key" placeholder="Tìm kiếm sản phẩm">
                                                                {{-- </div> --}}
                                                                {{-- <button type="submit" class="btn btn-light">
                                                                    Search
                                                                </button> --}}

                                                            {{-- </form> --}}
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            <button type="submit" class="btn btn-light"><i class="fa fa-search"></i></button>
                                                            {{-- <button type="button" class="btn btn-light">Sort By</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-chevron-down"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div> --}}
                                                            {{-- <label for="amount">Sort by</label> --}}
                                                            {{-- <form action=""> --}}
                                                                
                                                            {{-- </form> --}}
                                                        </div>
                                                        <div class="btn-group mx-3" role="group" aria-label="Button group with nested dropdown">
                                                            {{-- <button type="button" class="btn btn-light">Collection Type</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bxs-category"></i>
                                                                </button>
                                                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div> --}}
                                                            <select name="sort" id="sort" class="form-control">
                                                                <option value="{{Request::url()}}?sort_by=none">Lọc theo giá</option>
                                                                <option value="{{Request::url()}}?sort_by=lowest_to_highest">Tăng dần</option>
                                                                <option value="{{Request::url()}}?sort_by=highest_to_lowest">Giảm dần</option>
                                                                {{-- <option value="{{Request::url()}}?sort_by=a_z">a-z</option> --}}

                                                            </select>
                                                        </div>

                                                        <div class="btn-group mx-3" role="group">
                                                            {{-- <button type="button" class="btn btn-light">Price Range</button>
                                                            <div class="btn-group" role="group">
                                                                <button id="btnGroupDrop1" type="button" class="btn btn-light dropdown-toggle dropdown-toggle-nocaret px-1" data-bs-toggle="dropdown" aria-expanded="false">
                                                                    <i class="bx bx-slider"></i>
                                                                </button>
                                                                <ul class="dropdown-menu dropdown-menu-start" aria-labelledby="btnGroupDrop1">
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                    <li><a class="dropdown-item" href="#">Dropdown link</a></li>
                                                                </ul>
                                                            </div> --}}
                                                            <select name="status" id="status" class="form-control">
                                                                <option value="{{Request::url()}}?sort_by=none">Lọc theo trạng thái</option>
                                                                <option value="{{Request::url()}}?sort_by=hoat_dong">Hoạt động</option>
                                                                <option value="{{Request::url()}}?sort_by=bao_duong">Bảo dưỡng</option>
                                                                <option value="{{Request::url()}}?sort_by=ngung_cung_cap">Ngừng cung cấp</option>
                                                                {{-- <option value="{{Request::url()}}?sort_by=a_z">a-z</option> --}}

                                                            </select>
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

                    {{-- <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 row-cols-xl-4 row-cols-xxl-5 product-grid"> --}}
                        
                            {{-- @include('admin.product.components.product_single_body',[
                                'product' => $item
                            ]) --}}
                            {{-- <div class="col admin_product_individual_body" >
                                <div class="card position-relative">
                                    <img src="/{{ $item->thumb_image }}" class="card-img-top" alt="product image {{ $item->thumb_image }}" width="240px" height="280px" />
                                    <div class="">
                                        <div class="product-discount"><span class="">-{{ $item->discount }}%</span></div>
                                    </div>
                                    <div class="card-body" style="box-sizing: border-box;">
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
                            </div> --}}
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <h5 class="card-title">Bảng sản phẩm</h5>
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">#</th>
                                                            <th scope="col">Tên sản phẩm</th>
                                                            <th scope="col">Ảnh minh họa</th>
                                                            {{-- <th scope="col">Code</th> --}}
                                                            {{-- <th scope="col">Sku</th> --}}
                                                            <th scope="col">Hàng trong kho</th>
                                                            <th scope="col">Giá</th>
                                                            <th scope="col">giảm giá</th>
                                                            <th scope="col">Trạng thái</th>
                                                            <th scope="col" class="text-right">Chức năng</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($collection as $key=>$item)
                                                        <tr class="admin_product_individual_body">
                                                            <th scope="row">{{{$key+1}}}</th>
                                                            <td>{{ $item->name }}</td>
                                                            <td>
                                                                <img src="/{{ $item->thumb_image }}" width="50px" height="50px">
                                                            </td>
                                                            {{-- <td>{{ $item->code }}</td> --}}
                                                            {{-- <td>{{ $item->sku }}</td> --}}
                                                            <td>{{ $item->stock }}</td>
                                                            <td>{{ $item->price }}</td>
                                                            <td>{{ $item->discount }}%</td>
                                                            <td>
                                                                @if ($item->status == 1)
                                                                <span class="badge badge-success">Hoạt động</span>
                                                                @elseif ($item->status == 2)
                                                                <span class="badge badge-warning">Bảo dưỡng</span>
                                                                @elseif ($item->status == 3)
                                                                <span class="badge badge-danger">Ngừng cung cấp</span>
                                                                @endif
                                                            </td>
                                                            <td>
                                                                <div class="text-right">
                                                                    <a href="{{ route('product.show',$item->id) }}" class="btn btn-sm btn-warning ml-2">Xem chi tiết</a>
                                                                    <a href="{{ route('product.edit',$item->id) }}" class="btn btn-sm btn-success ml-2">Sửa</a>
                                                                    <a href="{{ route('product.destroy',$item->id) }}" data-parent=".admin_product_individual_body" class="btn delete_btn btn-sm btn-danger ml-2">Xóa</a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        
                    {{-- </div> --}}
                    <div class="row">
                        {{-- <div class="col-12">
                            <div aria-label="Page navigation example" class="navigation_body">
                                {{ $collection->links() }}
                            </div>
                        </div> --}}
                        <div class="cart-footer">
                            {{ $collection->appends(request()->all())->links() }}
                        </div>
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



