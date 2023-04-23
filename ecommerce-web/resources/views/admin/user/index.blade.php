@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'User Management'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title">All Users</h5>
                                    <a href="{{ route('admin_user_create') }}" class="btn btn-warning waves-effect waves-light m-1">
                                        <i class="fa fa-plus"></i> <span>Add New</span> 
                                   </a>
                                </div>
                                <div class="card-body">
                                    
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Họ</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col">Tên người dùng</th>
                                                    <th scope="col">email</th>
                                                    <th scope="col">Quyền người dùng</th>
                                                    <th scope="col">Ngày tạo</th>
                                                    <th scope="col">Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($collection as $key=>$item)
                                                    
                                                
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{ $item->first_name }}</td>
                                                    <td>{{ $item->last_name }}</td>
                                                    <td>{{ $item->username }}</td>
                                                    <td>{{ $item->email }}</td>
                                                    {{-- <td>{{ $item->role_id }}</td> --}}
                                                    <td>{{ $item->role_information ? $item->role_information->name : $item->role_id }}</td>
                                                    <td>{{ $item->created_at->format('d M Y h:i:s a') }}</td>
                                                    <td>
                                                        <div>
                                                            <a type="button" href="{{ route('admin_user_view',$item->id) }}" class="btn btn-light waves-effect waves-light m-1">
                                                                 <i class="fa fa-eye"></i> <span>Xem</span> 
                                                            </a>
                                                            <a type="button" href="{{ route('admin_user_edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                                <i class="fa fa-pencil"></i> <span>Sửa</span> 
                                                           </a>
                                                           {{-- <a type="button" href="" data-toggle="modal" data-target="#deleteModal" 
                                                            onclick="return (modal_delete_form.action='{{ route('admin_user_delete') }}', modal_delete_form.id.value='{{ $item->id }}')"
                                                            class="btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>Delete</span> 
                                                            </a> --}}
                                                            <a type="button" href="#" 
                                                            onclick="return (confirm('Do you sure want to delete?') && $.post('{{ route('admin_user_delete',['id'=>$item->id])}}',(res)=>{console.log(res,$(this).parents('tr').remove())}))"
                                                            class="btn btn-danger waves-effect waves-light m-1">
                                                            <i class="fa fa-trash-o"></i> <span>Xóa</span> 
                                                            </a>
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
                    <!--start overlay-->
                    <div class="overlay"></div>
                    <!--end overlay-->
                </div>
                <!-- End container-fluid-->
            </div>
            <!--End content-wrapper-->
@endsection