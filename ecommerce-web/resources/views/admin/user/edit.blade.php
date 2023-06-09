@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'User Management'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">Cập nhật người dùng</div>
                                    <hr />
                                    <form method="POST" 
                                    action="#" 
                                    {{-- onsubmit="return (confirm('Do you sure want to Update?') && $.post('{{ route('admin_user_update')}}',this,(res)=>{console.log(res)}))" --}}
                                    name="updateForm"
                                    class="updateForm"
                                    enctype="multipart/form-data"
                                    autocomplete="off" >
                                    
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $user->id }}">
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Họ</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="first_name" value="{{ $user->first_name }}" class="form-control" id="input-21" placeholder="First name" />
                                                @error('first_name')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Tên</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="last_name" value="{{ $user->last_name }}" class="form-control" id="input-21" placeholder="Last name" />
                                                @error('last_name')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Tên người dùng</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="username" value="{{ $user->username }}" class="form-control" id="input-21" placeholder="User name" />
                                                @error('username')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-21" class="col-sm-2 col-form-label">Quyền người dùng</label>
                                            <div class="col-sm-10">
                                                {{-- <input type="text" name="role" class="form-control" id="input-21" placeholder="User name" /> --}}
                                                <select name="role_id" class="form-control" id="">
                                                    @foreach ($user_roles as $item)
                                                        <option {{ $user->role_id == $item->serial ? 'selected' : '' }} value="{{ $item->serial }}">{{ $item->name }}</option>
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
                                                <input type="email" name="email" value="{{ $user->email }}" class="form-control" id="input-22" placeholder="Enter Your Email Address" />
                                                @error('email')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        {{-- <div class="form-group row">
                                            <label for="input-23" class="col-sm-2 col-form-label">Mobile Number</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="phone" value="{{ $user->phone }}" class="form-control" id="input-23" placeholder="Phone" />
                                                @error('phone')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div> --}}
                                        <div class="form-group row">
                                            <label for="input-24" class="col-sm-2 col-form-label">Mật khẩu cũ</label>
                                            <div class="col-sm-10">
                                                <input type="password" name="old_password" class="form-control" id="input-24" placeholder="Enter Old Password" />
                                                {{-- @error('old_password')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror --}}
                                                @if (Session::has('old_password'))
                                                <div class="text-warning">{{ Session::get('old_password') }}</div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-24" class="col-sm-2 col-form-label">Mật khẩu mới</label>
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
                                                <input type="password" name="password_confirmation" class="form-control" id="input-25" placeholder="Confirm Password" />
                                                @error('password_confirmation')
                                                    <div class="text-warning">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="input-25" class="col-sm-2 col-form-label">Ảnh đại diện</label>
                                            <div class="col-sm-10">
                                                <img src="/{{ $user->photo }}" style="height: 50px; margin-bottom: 10px;" alt="user image"> <br>
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
                                                <button type="button"
                                                onclick="return (
                                                    confirm('hei, Do you sure want to Update.') &&
                                                    $.post('{{route('admin_user_update')}}',
                                                    new FormData($(this).parents('form')[0]),
                                                    (res)=>{console.log('done')})
                                                )"
                                                {{-- onclick="return (confirm('Do you sure want to Update?') && console.log($(this).parents('form')[0]))" --}}
                                                 class="btn btn-white px-5"><i class="icon-lock"></i> Update</button>
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