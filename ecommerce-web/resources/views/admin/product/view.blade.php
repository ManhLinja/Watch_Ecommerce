@extends('admin.layouts.admin')

@section('content')
    <style>
        .card .table td, .card .table th {
            white-space: break-spaces;
        }
    </style>
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb',['title'=>'Product Details'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered table-hover table-striped">
                                <tr>
                                    <td style="width: 40%">Tên sản phẩm</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->name }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Thương hiệu</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->brand_info?$product->brand_info->name:'' }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">code</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->code }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Thuế</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->tax }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Giá</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->price }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Mã kho</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->sku }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Hàng trong kho</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->stock }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Giảm giá</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->discount }}
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td style="width: 40%">Expiration Date</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->expiration_date }}
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td style="width: 40%">Minimum Amount</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->minimum_amount }}
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td style="width: 40%">Giao hàng miễn phí</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->free_delivery }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Tổng lượt xem</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->total_view }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Mô tả</td>
                                    <td>:</td>
                                    <td>
                                        {!! $product->description !!}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Ảnh minh họa</td>
                                    <td>:</td>
                                    <td>
                                        <img style="height: 50px;" src="/{{ $product->thumb_image }}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Hình ảnh liên quan</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->image as $item)
                                                <li class="mx-2"><img style="height: 50px;" src="/{{ $item->name }}" alt=""></li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Danh mục</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Danh mục phụ</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->sub_category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">danh mục chính</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->main_category as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Màu sắc</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->color as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Nhà sản xuất</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->publication as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Size</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->size as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td style="width: 40%">Unit</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->unit as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr> --}}
                                {{-- <tr>
                                    <td style="width: 40%">Vendor</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->vendor as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr> --}}
                                <tr>
                                    <td style="width: 40%">Người đăng bài</td>
                                    <td>:</td>
                                    <td>
                                        <ul class="d-flex">
                                            @foreach ($product->writer as $item)
                                                <li class="mx-2">{{ $item->name }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Ngày tạo</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->created_at->format('d F Y h:i:s a') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Ngày sửa</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->updated_at->format('d F Y h:i:s a') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width: 40%">Người tạo</td>
                                    <td>:</td>
                                    <td>
                                        {{ $product->creator_info ? $product->creator_info->username : '' }}
                                    </td>
                                </tr>
                            </table>
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



