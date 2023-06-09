@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'User Management'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Tạo người dùng mới</div>
                                    <hr />
                                    <form method="POST" action="{{ route('admin_user_store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Họ</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="first_name" class="form-control" id="input-21" placeholder="First name" />
                                                @error('first_name')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Tên</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="last_name" class="form-control" id="input-21" placeholder="Last name" />
                                                @error('last_name')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Tên người dùng</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" class="form-control" id="input-21" placeholder="User name" />
                                                @error('username')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Quyền</label>
                                            <div class="col-sm-10">
                                                {{-- <input type="text" name="role" class="form-control" id="input-21" placeholder="User name" /> --}}
                                                <select name="role_id" class="form-control" id="">
                                                    @foreach ($user_roles as $item)
                                                        <option value="{{ $item->serial }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                @error('role_id')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-22" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" class="form-control" id="input-22" placeholder="Enter Your Email Address" />
                                                @error('email')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="input-23" class="col-sm-2 col-form-label">Số điện thoại</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" class="form-control" id="input-23" placeholder="Phone" />
                                                @error('phone')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label for="input-24" class="col-sm-2 col-form-label">Mật khẩu</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="password" class="form-control" id="input-24" placeholder="Enter Password" />
                                                @error('password')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-25" class="col-sm-2 col-form-label">Nhập lại mật khẩu</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="password_confirmation" class="form-control" id="input-25" placeholder="Confirm Password" />
                                                @error('password_confirmation')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-25" class="col-sm-2 col-form-label">Ảnh</label>
                                            <div class="col-sm-10">
                                                <input type="file" name="image" class="form-control" id="input-25" />
                                                @error('image')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <div class="icheck-material-white">
                                                    <input type="checkbox" id="user-checkbox5" checked="" />
                                                    <label for="user-checkbox5">Remember me</label>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Đăng ký</button>
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