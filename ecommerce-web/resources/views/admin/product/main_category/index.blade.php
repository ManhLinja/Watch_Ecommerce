@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'Danh mục chính']);
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between">
                                    <h5 class="card-title">Danh mục chính</h5>
                                    <a href="{{ route('main_category.create') }}" class="btn btn-warning"><i class="fa fa-plus"></i>Thêm mới</a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col"></th>
                                                    <th class="text-right" scope="col">Chức năng</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($collection as $key=>$item)
                                                    <tr class="admin_main_category_individual_body">
                                                        <td scope="row">{{ $key+1 }}</td>
                                                        <td scope="row">{{ $item->name }}</td>
                                                        <td scope="row"></td>
                                                        <td scope="row">
                                                            <div class="text-right">
                                                                {{-- <a type="button" href="" class="btn btn-light waves-effect waves-light m-1">
                                                                     <i class="fa fa-eye"></i> <span>View</span> 
                                                                </a> --}}
                                                                <a type="button" href="{{ route('main_category.edit',$item->id) }}" class="btn btn-warning waves-effect waves-light m-1">
                                                                    <i class="fa fa-pencil"></i> <span>Sửa</span> 
                                                               </a>
                                                               <a type="button" href="{{ route('main_category.destroy',$item->id) }}" data-parent=".admin_main_category_individual_body"
                                                                class="delete_btn btn btn-danger waves-effect waves-light m-1">
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