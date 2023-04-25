@extends('admin.layouts.admin')

@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        @include('admin.includes.bread_crumb', ['title' => 'BẢNG ĐIỀU KHIỂN'])
        <div class="row mt-4">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Bảng thống kê hóa đơn</h5>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Mã hóa đơn</th>
                                        <th scope="col">Người mua</th>
                                        <th scope="col">Tổng tiền</th>
                                        <th scope="col">Ngày xuất hóa đơn</th>
                                        <th scope="col">Tình trạng</th>
                                        <th class="text-right" scope="col">Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($collection as $item)
                                        
                                    
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->invoice_id }}</td>
                                        <td>{{ $item->cus->username}}</td>
                                        <td>${{ $item->total }}</td>
                                        <td>{{ $item->invoice_date }}</td>
                                        <td>
                                            {{-- {{ $item->status_information ? $item->status_information->name : $item->status }} --}}
                                            @if ($item->status == 1)
                                            <a href="{{ route('change_status', $item->id) }}" onclick="return confirm('Thay đổi trạng thái thành đang xử lý?')" class="text text-success">Đã giao hàng</a>
                                            @elseif ($item->status ==2)
                                                <a class="text text-danger">Đã hủy</a> 
                                            @elseif ($item->status ==3)
                                            <a href="{{ route('change_status', $item->id) }}" onclick="return confirm('Thay đổi trạng thái thành đã giao hàng?')" class="text text-warning">Đang xử lý</a>
                                            @endif
                                            {{-- <select name="status" id="" class="form-control select-status" data-action="{{ route('admin.orders.update_status', $item->id) }}">
                                                @foreach (config('order.status') as $status)
                                                    <option value="{{ $status }}"
                                                        {{ $status == $item->status ? 'selected' : ''  }}>{{ $status }}
                                                    </option>
                                                @endforeach
                                            </select> --}}
                                        </td>
                                        <td>
                                            <div class="text-right">
                                                <a type="button" href="{{ route('admin_view',$item->id) }}" class="btn btn-light waves-effect waves-light m-1">
                                                    <i class="fa fa-eye"></i> <span>Xem chi tiết</span> 
                                               </a>
                                               {{-- <a type="button" href="{{ route('admin_edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                <i class="fa fa-pencil"></i> <span>Sửa</span>  --}}
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#giaohang">
                                                    Giao hang
                                                </button>
                                                <div class="modal fade" id="giaohang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <form action="">
                                                        @csrf
                                                    <div class="modal-dialog" role="document">
                                                      <div class="modal-content">
                                                        <div class="modal-header">
                                                          <h5 class="modal-title" id="exampleModalLabel">Giao hang</h5>
                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                          </button>
                                                        </div>
                                                        <div class="modal-body">
                                                          xac nhan giao hang
                                                        </div>
                                                        <div class="modal-footer">
                                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                                                          <button type="button" id="{{ $item->invoice_id }}" onclick="Giaohang(this.id)" class="btn btn-primary">Giao hang</button>
                                                        </div>
                                                      </div>
                                                    </div>
                                                </form>
                                                  </div>
                                           </a>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="cart-footer">
                        {{ $collection->appends(request()->all())->links() }}
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @section('script')
<script >
    $(function(){
        $(document).on('change', ".select-status", function(e){
            e.preventDefault();
            let url = $(this).data("action");
            let data = {
                status: $(this).val()
            };
            $post(url, data, res => {
                alert('Thanh cong');
            })
        });

    });
</script>
@endsection --}}