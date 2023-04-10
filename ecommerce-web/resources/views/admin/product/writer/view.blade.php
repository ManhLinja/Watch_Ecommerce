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
                                        <td style="width: 40%">title</td>
                                        <td>:</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi voluptatum nostrum officiis mollitia delectus accusantium possimus quas, 
                                            culpa exercitationem iusto at fuga nulla consequuntur ab quidem voluptates illo assumenda velit!</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">title</td>
                                        <td>:</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi voluptatum nostrum officiis mollitia delectus accusantium possimus quas, 
                                            culpa exercitationem iusto at fuga nulla consequuntur ab quidem voluptates illo assumenda velit!</td>
                                    </tr>
                                    <tr>
                                        <td style="width: 40%">title</td>
                                        <td>:</td>
                                        <td>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi voluptatum nostrum officiis mollitia delectus accusantium possimus quas, 
                                            culpa exercitationem iusto at fuga nulla consequuntur ab quidem voluptates illo assumenda velit!</td>
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