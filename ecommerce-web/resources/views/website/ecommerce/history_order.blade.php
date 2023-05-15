@extends('website.ecommerce.layouts.ecommerce')

@section('content')

<div class="cart-main-container shop-bg">
    <div class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="woocommerce-breadcrumb mtb-15">
                        <div class="menu">
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li class="active"><a href="cart.html">cart</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="account-title mtb-20 text-center">
                        <h1>Lịch sử mua hàng</h1>
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
                                        <th scope="col">Chức năng</th>
                                        <th scope="col">Mã hóa đơn</th>
                                        <th scope="col">Ngày mua</th>
                                        <th scope="col">Trạng thái đơn hàng</th>
                                        <th scope="col">Tổng tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($order as $item)
                                    <tr class="cart-item">
                                        <td class="product-remove" style="width:165px;">
                                            {{-- <a href="#" @click.prevent="remove_product_form_carts(cart)" class="btn btn-danger btn-sm my-1" title="Remove this item">
                                                <i class="fa fa-trash"></i> Hủy đơn hàng
                                            </a> --}}
                                            {{-- @if ($item->status != 2 && $item->status !=1)
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#huydon">
                                                Hủy đơn
                                              </button>
                                              @endif
                                              
                                              <div class="modal fade" id="huydon" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <form action="">
                                                    @csrf
                                                <div class="modal-dialog" role="document">
                                                  <div class="modal-content">
                                                    <div class="modal-header">
                                                      <h5 class="modal-title" id="exampleModalLabel">Bạn muốn hủy đơn hàng?</h5>
                                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                      </button>
                                                    </div>
                                                    <div class="modal-body">
                                                      <p><textarea name="" id="" class="lydohuydon" required placeholder="Lý do hủy đơn hàng...(bắt buộc)" cols="69"></textarea></p>
                                                    </div>
                                                    <div class="modal-footer">
                                                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                      <button type="button" id="{{ $item->invoice_id }}" onclick="Huydonhang(this.id)" class="btn btn-danger">Hủy</button>
                                                      
                                                    </div>
                                                  </div>
                                                </div>
                                            </form>
                                              </div> --}}
                                              @if ($item->status ==3)
                                                        <a href="{{ route('delete_order', $item->id) }}" class="btn btn-danger" onclick="return confirm('Bạn muốn hủy đơn hàng?')">
                                                            Hủy đơn
                                                        </a>
                                                    @endif
                                            <a href="{{ route('xem_chi_tiet', $item->id) }}"  class="btn btn-warning btn-sm my-1">
                                                <i class="fa fa-eye"></i> Xem
                                            </a>
                                        </td>
                                        <td>
                                            {{ $item->invoice_id }}
                                        </td>
                                        <td>
                                            {{ $item->invoice_date}}
                                        </td>
                                        <td >
                                            @if ($item->status == 1)
                                            <span class="badge badge-success">Đã giao hàng</span>
                                            @elseif ($item->status ==2)
                                                <span class="badge badge-danger">Đã hủy</span> 
                                            @elseif ($item->status ==3)
                                            <span class="badge badge-warning">Đang xử lý</span>
                                            @endif
                                        </td>
                                        <td>
                                            ${{ $item->total}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="cart-footer" style="margin-bottom:15px;">
                        {{ $order->appends(request()->all())->links() }}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection