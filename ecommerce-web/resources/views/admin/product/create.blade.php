@extends('admin.layouts.admin')

@section('content')
            <div class="content-wrapper">
                <div class="container-fluid">
                    @include('admin.includes.bread_crumb', ['title' => 'THÊM MỚI SẢN PHẨM'])
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title">THÊM SẢN PHẨM</div>
                                    <hr />
                                    <form class="insert_form row" method="POST" action="{{ route('product.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        <div class="preloader"></div>
                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Tên sản phẩm</label>
                                            {{-- <div class="">
                                                <input type="text" name="name" class="form-control" id="" placeholder="Name" />
                                                <span class="text-danger name "></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'product_name',
                                                'type' => 'text'
                                            ])
                                        </div>

                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class=" col-form-label">Thương hiệu</label>
                                            {{-- <div class="">
                                                <select name="brand" id="" class="form-control">
                                                    @foreach ($brands as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger brand"></span>
                                            </div> --}}
                                            @include('admin.product.components.select',[
                                                'name' => 'brand',
                                                'attributes' => '',
                                                'class' => 'multiple-select',
                                                'collection' => $brands,
                                                'action' => route('brand.store'),
                                                'fields' => [
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'icon','type' => 'file'],
                                                ]
                                            ])
                                        </div>

                                        <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Danh mục chính</label>
                                            {{-- <div class="">
                                                <select name="main_category_id" id="" class="form-control">
                                                    @foreach ($maincategories as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger main_category_id"></span>
                                            </div> --}}
                                            @include('admin.product.components.select',[
                                                'name' => 'product_main_category_id',
                                                'attributes' => '',
                                                'class' => 'multiple-select product_main_category',
                                                'collection' => $maincategories,
                                                'action' => route('main_category.store'),
                                                'fields' => [
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'icon','type' => 'file'],
                                                ]
                                            ])
                                        </div>

                                        <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Danh mục</label>
                                            {{-- <div class="">
                                                <select name="category_id" id="" multiple class="form-control multiple-select">
                                                    @foreach ($categories as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger category_id"></span>
                                            </div> --}}
                                            @include('admin.product.components.select',[
                                                'name' => 'product_category_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select product_category',
                                                'collection' => $categories,
                                                'action' => route('category.store'),
                                                'fields' => [
                                                    ['name' => 'main_category_id','type' => 'select','option_route'=>route('get_main_category_json')],
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'icon','type' => 'file'],
                                                ]
                                            ])
                                        </div>

                                        <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Danh mục phụ</label>
                                            {{-- <div class="">
                                                <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                                    @foreach ($sub_categories as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger sub_category_id"></span>
                                            </div> --}}
                                            @include('admin.product.components.select',[
                                                'name' => 'product_sub_category_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select product_sub_category',
                                                'collection' => $sub_categories,
                                                'action' => route('sub_category.store'),
                                                'fields' => [
                                                    [
                                                        'name' => 'main_category_id',
                                                        'type' => 'select',
                                                        'option_route'=>route('get_main_category_json'),
                                                        'class' => 'component_modal_main_category parent_select',
                                                        'this_field_will_contorl' => 'component_modal_category',
                                                        'this_field_control_route' => route('get_all_cateogory_selected_by_main_category',''),
                                                        // 'this_field_control_route' => '',
                                                    ],
                                                    [
                                                        'name' => 'category_id',
                                                        'class' => 'component_modal_category',
                                                        'type' => 'select',
                                                        'option_route'=>''
                                                    ],
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'icon','type' => 'file'],
                                                ]
                                            ])
                                        </div>

                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Người đăng bài</label> --}}
                                            {{-- <div class="">
                                                <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                                    <option value="">Select</option>
                                                    @foreach ($writers as $key=>$item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger sub_category_id"></span>
                                            </div> --}}
                                            {{-- @include('admin.product.components.select',[
                                                'name' => 'writer_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $writers,
                                                'action' => route('writer.store'),
                                                'fields' => [
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'description','type' => 'textarea'],
                                                    ['name' => 'image','type' => 'file'],
                                                ]
                                            ]) --}}
                                        {{-- </div> --}}

                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Nhà sản xuất</label> --}}
                                            {{-- <div class="">
                                                <select name="sub_category_id" id="" multiple class="form-control multiple-select">
                                                    <option value="">Select</option>
                                                    @foreach ($publications as $key=>$item)
                                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger sub_category_id"></span>
                                            </div> --}}
                                            {{-- @include('admin.product.components.select',[
                                                'name' => 'publication_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $publications,
                                                'action' => route('publication.store'),
                                                'fields' => [
                                                    ['name' => 'name','type' => 'text'],
                                                    ['name' => 'image','type' => 'file'],
                                                    ['name' => 'description','type' => 'textarea'],
                                                ]
                                            ])
                                        </div> --}}

                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Màu sắc</label>
                                            <div class="">
                                                <select name="color_id" id="" class="form-control multiple-select" multiple>
                                                    @foreach ($colors as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger color_id"></span>
                                            </div>
                                            @include('admin.product.components.select',[
                                                'name' => 'color_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $colors,
                                                'action' => route('color.store'),
                                                'fields' => [
                                                    ['name' => 'name', 'type' => 'text'],
                                                ]
                                            ])
                                        </div> --}}
                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Size</label>
                                            <div class="">
                                                <select name="size_id" id="" class="form-control multiple-select" multiple>
                                                    @foreach ($sizes as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger size_id"></span>
                                            </div>
                                            @include('admin.product.components.select',[
                                                'name' => 'size_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $sizes,
                                                'action' => route('size.store'),
                                                'fields' => [
                                                    ['name' => 'name', 'type' => 'text'],
                                                ]
                                            ])
                                        </div> --}}
                                        
                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Đơn vị</label> --}}
                                            {{-- <div class="">
                                                <select name="unit_id" id="" class="form-control multiple-select" multiple>
                                                    @foreach ($units as $key=>$item)
                                                        <option {{ $key==0?'selected':'' }} value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger unit_id"></span>
                                            </div> --}}
                                            {{-- @include('admin.product.components.select',[
                                                'name' => 'unit_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $units,
                                                'action' => route('unit.store'),
                                                'fields' => [
                                                    ['name' => 'name', 'type' => 'text'],
                                                ]
                                            ]) --}}
                                        {{-- </div> --}}

                                        {{-- <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Vendor</label> --}}
                                            {{-- @include('admin.product.components.select',[
                                                'name' => 'vendor_id',
                                                'attributes' => 'multiple',
                                                'class' => 'multiple-select',
                                                'collection' => $vendors,
                                                'action' => route('vendor.store'),
                                                'fields' => [
                                                    ['name' => 'name', 'type' => 'text'],
                                                    ['name' => 'email', 'type' => 'email'],
                                                    ['name' => 'mobile_no', 'type' => 'text'],
                                                    ['name' => 'image', 'type' => 'file'],
                                                    ['name' => 'address', 'type' => 'textarea'],
                                                    ['name' => 'description', 'type' => 'textarea'],
                                                ]
                                            ]) --}}
                                        {{-- </div> --}}

                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Giá</label>
                                            {{-- <div class="">
                                                <input type="text" name="price" class="form-control" id="" placeholder="Price" />
                                                <span class="text-danger price" style="font-size: 15px;"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'price',
                                                'type' => 'number',
                                                'attr' => "step='0.01'"
                                            ])
                                        </div>

                                        {{-- <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class=" col-form-label">Thuế</label> --}}
                                            {{-- @include('admin.product.components.input',[
                                                'name' => 'tax',
                                                'type' => 'number'
                                            ]) --}}
                                        {{-- </div> --}}

                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Giảm giá</label>
                                            {{-- <div class="">
                                                <input type="text" class="form-control" name="discount" id="" placeholder="discount" />
                                                <span class="text-danger discount"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'discount',
                                                'type' => 'text'
                                            ])
                                        </div>

                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Hạn giảm giá</label>
                                            {{-- <div class="">
                                                <input type="date" name="expiration_date" class="form-control" id="" placeholder="discount" />
                                                <span class="text-danger expiration_date"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'expiration_date',
                                                'type' => 'date'
                                            ])
                                        </div>

                                        <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Hàng trong kho</label>
                                            {{-- <div class="">
                                                <input type="number" name="stock" class="form-control" id="" placeholder="stock" />
                                                <span class="text-danger stock"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'stock',
                                                'type' => 'number'
                                            ])
                                        </div>

                                        {{-- <div class="form-group col-md-6 col-xl-4">
                                            <label for="" class="col-form-label">Cảnh báo số lượng</label> --}}
                                            {{-- <div class="">
                                                <input type="number" name="alert_quantity" class="form-control" id="" placeholder="Alert" />
                                                <span class="text-danger alert_quantity"></span>
                                            </div> --}}
                                            {{-- @include('admin.product.components.input',[
                                                'name' => 'alert_quantity',
                                                'type' => 'number'
                                            ]) --}}
                                        {{-- </div> --}}

                                        <div class="col-12"></div>

                                        <div class="form-group col-md-6 col-xl-6">
                                            <label for="" class="col-form-label">Mô tả</label>
                                            <div class="">
                                                {{-- <input type="number" class="form-control" id="" placeholder="Alert" /> --}}
                                                <textarea name="description" class="form-control" id="mytextarea1" cols="30" rows="10"></textarea>
                                                <span class="text-danger description"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-xl-6">
                                            <label for="" class="col-form-label">Đặc trưng</label>
                                            <div class="">
                                                {{-- <input type="number" class="form-control" id="" placeholder="Alert" /> --}}
                                                <textarea name="features" class="form-control" id="mytextarea2" cols="30" rows="10"></textarea>
                                                <span class="text-danger features"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6 col-xl-6">
                                            <label for="" class="col-form-label">Ảnh minh họa</label>
                                            {{-- <div class="">
                                                <input type="file" name="thumb_image" class="form-control" id="" placeholder="Alert" />
                                                <span class="text-danger thumb_image"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'thumb_image',
                                                'type' => 'file',
                                                'attr' => ''
                                            ])
                                        </div>

                                        <div class="form-group col-md-6 col-xl-6">
                                            <label for="" class="col-form-label">Hình ảnh liên quan</label>
                                            {{-- <div class="">
                                                <input type="file" multiple name="related_images[]" class="form-control" id="" placeholder="Alert" />
                                                <span class="text-danger related_images"></span>
                                            </div> --}}
                                            @include('admin.product.components.input',[
                                                'name' => 'related_images',
                                                'type' => 'file',
                                                'attr' => 'multiple'
                                            ])
                                        </div>
                                        
                                        <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Trạng thái</label>
                                            {{-- <div class="">
                                                <select name="status" id="" class="form-control">
                                                    <option value="draft">Draft</option>
                                                    <option value="active">Active</option>
                                                </select>
                                                <span class="text-danger status"></span>
                                            </div> --}}
                                            <div class="">
                                                <select name="status"  class="form-control">
                                                    @foreach ($status as $item)
                                                        <option value="{{ $item->serial }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                                <span class="text-danger status"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6  col-xl-4">
                                            <label for="" class="col-form-label">Miễn phí giao hàng</label>
                                            <div class="">
                                                <select name="free_delivery"  class="form-control">
                                                    <option value="0">Off</option>
                                                    <option value="1">On</option>
                                                </select>
                                                <span class="text-danger status"></span>
                                            </div>
                                        </div>

                                        <div class="form-group col-12">
                                            <label class="col-form-label"></label>
                                            <div class="">
                                                <button type="submit" class="btn btn-white px-5"><i class="icon-lock"></i> Thêm mới</button>
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
            @push('ccss')
                <link href="/contents/admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
                <link href="/contents/admin/assets/plugins/select2/css/select2-boostrap4.css" rel="stylesheet" />
                <link rel="stylesheet" href="{{ asset('contents/admin/assets') }}/plugins/summernote/dist/summernote-bs4.css" />
            @endpush

            @push('cjs')
                <script src="/contents/admin/assets/plugins/select2/js/select2.min.js"></script>
                <script src="{{ asset('contents/admin/assets') }}/plugins/summernote/dist/summernote-bs4.min.js"></script>
                <script>
                    $('.multiple-select').select2({
                        // theme: 'bootstrap4',
                        // width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                        placeholder: $(this).data('placeholder'),
                        allowClear: Boolean($(this).data('allow-clear')),
                    });
                    // tinymce.init({
                    //     selector: '#mytextarea1'
                    // });
                    // tinymce.init({
                    //     selector: '#mytextarea2'
                    // });
                    $('#mytextarea1').summernote({
                        height: 400,
                        tabsize: 2
                    });
        
                    $('#mytextarea2').summernote({
                        height: 400,
                        tabsize: 2
                    });
        
                    $('#selectmain_category_id').on('change',function(){
                        let value = $(this).val();
                        $.get("/admin/product/get-all-cateogory-selected-by-main-category/"+value,(res)=>{
                            $('#selectcategory_id').html(res);
                        })
                    })
                </script>
            @endpush
@endsection