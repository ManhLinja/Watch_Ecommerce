@extends('admin.layouts.admin')

@section('content')
<style>
    .card .table td, .card .table th {
        white-space: break-spaces;
    }
</style>
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'View'])
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-bordered table-hover table-striped">
                                    <tr>
                                        <td style="width: 40%">Ảnh đại diện</td>
                                        <td>:</td>
                                        <td>
                                            <img src="/contents/admin/assets/images/avatars/{{ $user->photo}}" height="60">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Họ</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->first_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Tên</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->last_name }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Tên người dùng</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->username }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Email</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Quyền người dùng</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->role_id }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">Ngày tạo</td>
                                        <td>:</td>
                                        <td>
                                            {{ $user->created_at }}
                                        </td>
                                    </tr>
                                </table>
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