@extends('website.ecommerce.layouts.ecommerce')

@section('content')

<div class="cart-main-container shop-bg">
    <div class="cart-area">
        <div class="row">
            <div class="col-12">
                <div class="account-title mtb-20 text-center">
                    <h1><span class="text text-danger">Hóa đơn</span> #{{ $username->invoice_id }}</h1>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                <div class="cart-table mb-50 bg-fff">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Ảnh minh họa</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Giá/1 sản phẩm</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($collection as $key=>$item)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td>{{$item->product_name}}</td>
                                    <td>
                                        <img src="/{{ $item->product->thumb_image }}" style="width:50px;">
                                    </td>
                                    <td>{{$item->qty}}</td>
                                    {{-- <td>
                                        @if ($item->color == 1)
                                            <span>Red</span>
                                        @elseif ($item->color == 2)
                                            <span>Gold</span>
                                        @elseif ($item->color == 3)
                                            <span>Pink</span>
                                        @elseif ($item->color == 4)
                                            <span>Green</span>
                                        @elseif ($item->color == 5)
                                            <span>Skyblue</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($item->size == 1)
                                            <span>Mini</span>           
                                        @elseif ($item->size == 2)
                                            <span>Regular</span>
                                        @elseif ($item->size == 3)
                                            <span>Unisex</span>
                                        @elseif ($item->size == 4)
                                            <span>Sport</span>
                                        @elseif ($item->size == 5)
                                            <span>XL</span>                                         
                                        @endif
                                    </td> --}}
                                    <td>${{$item->price}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12 col-12">
                <div class="table-content table-responsive mb-30">
                    <table>
                        <tbody>
                            <tr>
                                <td><strong>Giá trị đơn hàng</strong></td>
                                <td><b>$ {{ $username->total }}</b></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection