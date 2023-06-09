@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'Sửa'])
                    <div class="row">
                        <div class="col-lg-10">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Sửa danh mục</div>
                                    <hr />
                                    <form method="POST" class="update_form" action="{{ route('category.update',$category->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="preloader"></div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Chọn danh mục chính</label>
                                            <div class="col-sm-10">
                                                {{-- <input type="text" name="name" class="form-control" id="input-21" placeholder="Name" /> --}}
                                                <select name="main_category_id" class="form-control" id="">
                                                    <option value="">Danh mục chính</option>
                                                    @foreach ($main_category as $item)
                                                        <option {{$category->main_category_id == $item->id ? 'selected' : ''}} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger name"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Tên</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="input-21" placeholder="Name" />
                                                <span class="text-danger name"></span>
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Icon</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="icon" class="form-control" id="input-21"/>
                                                <img src="/{{ $category->icon }}" style="height: 40px;" alt="">
                                                <span class="text-danger icon"></span>
                                            </div>
                                        </div> --}}
        
        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Cập nhật</button>
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