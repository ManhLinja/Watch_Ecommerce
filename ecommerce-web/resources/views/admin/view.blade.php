@extends('admin.layouts.admin')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            @include('admin.includes.bread_crumb', ['title' => 'View'])
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <h5 class="card-title">Hóa đơn của {{ $username->cus->username }}</h5>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">#{{ $username->invoice_id }}</h5>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Tên sản phẩm</th>
                                            <th scope="col">Số lượng</th>
                                            <th scope="col">Màu sắc</th>
                                            <th scope="col">Size</th>
                                            <th scope="col">Giá/1 sản phẩm</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($collection as $key=>$item)
                                        <tr>
                                            <th scope="row">{{ $key+1 }}</th>
                                            <td>{{$item->product_name}}</td>
                                            <td>{{$item->qty}}</td>
                                            <td>
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
                                            </td>
                                            <td>${{$item->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="cart-footer">
                            
                        </div>
                    </div>
                </div>  
        </div>
        {{-- <div class="row col-12 col-md-6 col-lg-3 col-xl-3">
            <form class="update_form product_insert_form row" method="POST" action="{{route('admin_update',$order->id)}}" enctype="multipart/form-data">
                <div class="form-inline">Trạng thái:</div>
                <select name="status" class="form-control" id="" style="margin-left: 15px;">
                    @foreach ($status as $item)
                        <option {{ $username->status == $item->serial ? 'selected' : '' }} value="{{ $item->serial }}">{{ $item->name }}</option>
                    @endforeach
                </select>

                <div class="form-group col-12">
                    <label class="col-form-label"></label>
                    <div class="">
                        <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Cập nhật</button>
                    </div>
                </div>
            </form>
            
        </div> --}}
    </div>
@endsection