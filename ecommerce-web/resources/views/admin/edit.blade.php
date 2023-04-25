@extends('admin.layouts.admin')

@section('content')

<div class="content-wrapper">
    <div class="container-fluid">
        @include('admin.includes.bread_crumb',['title'=>'Product Create'])
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">Sửa sản phẩm</div>
                        <hr />
                        <form action="{{ route('admin_update',$order->id) }}" method="POST" enctype="multipart/form-data" class="update_form" autocomplete="off">
                            @csrf
                            {{-- @method('put') --}}
                            <div class="form-group row">
                                <label for="input-21" class="col-sm-2 col-form-label">Trang thai</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control" id="">
                                        {{-- @foreach (App\Models\UserRole::get() as $item) --}}
                                        @foreach ($status_order as $item)
                                            <option {{ $order->status == $item->serial ? 'selected' : ''}} value="{{ $item->serial }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label"></label>
                                <div class="col-sm-10">
                                    {{-- <button type="button"
                                        onclick="return (
                                                            confirm('hei, Do you sure want to Update.') &&
                                                            $.post('{{route('admin_update')}}',
                                                            new FormData($(this).parents('form')[0]),
                                                            (res)=>{console.log('done')})
                                                        )"
                                        class="btn btn-white px-5"><i class="icon-lock"></i>
                                        Update
                                    </button> --}}
                                    <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Update</button>
                                </div>
                            </div>
                        </form>
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