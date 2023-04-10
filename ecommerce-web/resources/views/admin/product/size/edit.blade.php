@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'Edit'])
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Edit Size</div>
                                    <hr />
                                    <form method="POST" class="update_form" action="{{ route('size.update',$size->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="preloader"></div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="name" value="{{ $size->name }}" class="form-control" id="input-21" placeholder="Name" />
                                                <span class="text-danger name"></span>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i>Update</button>
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