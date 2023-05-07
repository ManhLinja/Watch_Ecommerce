<?php

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\UserRoleController;
use App\Http\Controllers\Admin\FileManagerController;
use App\Http\Controllers\Admin\OrderManagementController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CheckOutController;
use App\Http\Controllers\Ordercontroller;
use App\Http\Controllers\Product\ProductController;
use App\Http\Controllers\Product\BrandController;
use App\Http\Controllers\Product\MainCategoryController;
use App\Http\Controllers\Product\CategoryController;
use App\Http\Controllers\Product\SubCategoryController;
use App\Http\Controllers\Product\ColorController;
use App\Http\Controllers\Product\SizeController;
use App\Http\Controllers\Product\UnitController;
use App\Http\Controllers\Product\StatusController;
use App\Http\Controllers\Product\WriterController;
use App\Http\Controllers\Product\PublicationController;
use App\Http\Controllers\Product\VendorController;
use App\Http\Controllers\Product\ImageController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', [WebsiteController::class, 'index'])->name('website_index');

Route::get('/products', [WebsiteController::class, 'products'])->name('website_products');

Route::get('/products/category/{main_category}', [WebsiteController::class, 'main_category_products'])->name('website_main_category_products');
Route::get('/products/category/{main_category}/all-product-json', [WebsiteController::class, 'main_category_products_json'])->name('website_main_category_products_json');

Route::get('/products/category/{main_category}/{category}', [WebsiteController::class, 'category_products'])->name('website_category_products');
Route::get('/products/category/{main_category}/{category}/all-product-json', [WebsiteController::class, 'category_products_json'])->name('website_category_products_json');

Route::get('/products/category/{main_category}/{category}/{sub_category}', [WebsiteController::class, '@sub_category_products'])->name('website_sub_category_products');
Route::get('/products/category/{main_category}/{category}/{sub_category}/all-product-json', [WebsiteController::class, 'sub_category_products_json'])->name('website_sub_category_products_json');

Route::get('/product-details/{product}', [WebsiteController::class, 'details'])->name('website_product_details');
Route::get('/cart', [WebsiteController::class, 'cart'])->name('website_cart');
Route::get('/checkout', [WebsiteController::class, 'checkout'])->name('website_checkout')->middleware('auth');
Route::get('/checkout_success',[WebsiteController::class, 'checkout_success'])->name('checkout_success')->middleware('auth');
Route::post('/save_checkout_information',[CheckOutController::class, 'save_checkout_information'])->name('save_checkout_information')->middleware('auth');
Route::get('/get_latest_checkout_information',[CheckOutController::class, 'get_latest_checkout_information'])->name('get_latest_checkout_information')->middleware('auth');
Route::get('/wishlist', [WebsiteController::class, 'wishlist'])->name('website_wishlist');
Route::get('/contact', [WebsiteController::class, 'contact'])->name('website_contact');

Route::get('/history', [Ordercontroller::class, 'history'])->middleware('auth');
Route::post('/huy-don-hang', [Ordercontroller::class, 'huy_don_hang']);
Route::get('/xem-chi-tiet/{id}',[OrderController::class, 'xem_chi_tiet'])->name('xem_chi_tiet');

Route::group([
    'prefix' => 'json',
], function () {

    Route::get('/get-min-max-price', [WebsiteController::class, 'get_min_max_price_json'])->name('product_get_min_max_price_json');
    Route::get('/get-all-category', [WebsiteController::class, 'get_all_category_json'])->name('product_get_all_category_json');

    // Route::get('/products/category/{main_category}/all-product-json', 'WebsiteController@main_category_products_json')->name('website_main_category_products_json');
    // Route::get('/category-products-json/{main_category_id}/{category_id}', 'WebsiteController@category_product_json')->name('product_category_product_json');


    Route::get('/latest-products-json', [WebsiteController::class, 'latest_product_json'])->name('product_latest_product_json');
    Route::get('/show-product-json/{product}', [WebsiteController::class, 'show_product_json'])->name('product_show_product_json');
    Route::get('/get-product-related-info-json/{product}', [WebsiteController::class, 'get_product_related_info_json'])->name('product_get_product_related_info_json');

});




// Route::get('/admin', [AdminController::class, 'index'])->name('admin_index')->middleware('auth');
// Route::group([
//     'prefix'=>'', 
//     'middleware'=>['auth','check_user_is_active','user'],
//     'namespace'=>''
//     ], function(){
//         // Route::get('/', [AdminController::class, 'index'])->name('admin_index');
//         Route::get('/', [WebsiteController::class, 'index'])->name('website_index');

// });

Route::group([
    'prefix'=>'admin', 
    'middleware'=>['auth','check_user_is_active','super_admin'],
    'namespace'=>'Admin',
    ], function(){
        Route::get('/', [AdminController::class, 'index'])->name('admin_index');
        Route::get('/view/{id}', [AdminController::class, 'view'])->name('admin_view');
        // Route::get('/edit/{id}',[AdminController::class, 'edit'])->name('admin_edit');
        // Route::post('/update', [AdminController::class, 'update'])->name('admin_update');
        // Route::resource('admin',AdminController::class);
        // Route::post('/giao-hang', [AdminController::class, 'giao_hang']);
        Route::get('/orders', [OrderManagementController::class, 'index'])->name('admin.orders.index');
        Route::get('/orders/view/{id}', [OrderManagementController::class, 'view'])->name('admin.orders.view');
        // Route::post('/update-status/{id}', [OrderManagementController::class, 'updateStatus'])->name('admin.orders.update_status');
        Route::get('/change-status/{id}', [OrderManagementController::class, 'changeStatus'])->name('change_status');
        Route::get('/update-status/{id}', [AdminController::class, 'updateStatus'])->name('update_status');
        

});
// Route::post('/giao-hang', [AdminController::class, 'giao_hang'])->middleware('auth');
// Route::post('/giaohang', [OrderManagementController::class, 'GiaoHang']);
// Route::post('/change-status/{id}', [OrderManagementController::class, 'changeStatus']);

// Route::post('/filter-by-date', [AdminController::class, 'filter_by_date'])->name('filter_by_date');
//User management
Route::group([
    'prefix'=>'user', 
    'middleware'=>['auth'], 
    'namespace'=>'Admin'
    ], function(){

        Route::get('/index', [UserController::class, 'index'])->name('admin_user_index');
        Route::get('/view/{id}', [UserController::class, 'view'])->name('admin_user_view');
        Route::get('/create', [UserController::class, 'create'])->name('admin_user_create');
        Route::post('/store', [UserController::class, 'store'])->name('admin_user_store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('admin_user_edit');
        Route::post('/update', [UserController::class, 'update'])->name('admin_user_update');
        Route::post('/delete', [UserController::class, 'delete'])->name('admin_user_delete');
});

Route::group([
    'prefix'=>'user-role', 
    'middleware'=>['auth','check_user_is_active','super_admin'], 
    'namespace'=>'Admin'
    ], function(){

        Route::get('/index', [UserRoleController::class, 'index'])->name('admin_user_role_index');
        Route::get('/view/{id}', [UserRoleController::class, 'view'])->name('admin_user_role_view');
        Route::get('/create', [UserRoleController::class, 'create'])->name('admin_user_role_create');
        Route::post('/store', [UserRoleController::class, 'store'])->name('admin_user_role_store');
        Route::get('/edit', [UserRoleController::class, 'edit'])->name('admin_user_role_edit');
        Route::post('/update', [UserRoleController::class, 'update'])->name('admin_user_role_update');
        Route::post('/delete', [UserRoleController::class, 'delete'])->name('admin_user_role_delete');
});


Route::group([
    'prefix'=>'admin/product', 
    'middleware'=>['auth'], 
    'namespace'=>''
    ], function(){
        // Route::get('/', [AdminController::class, 'index'])->name('admin_index');

        //basic page
        Route::resource('product',ProductController::class);
        // Route::get('/index', [ProductController::class, 'index'])->name('admin_product_index');
        // Route::get('/create', [ProductController::class, 'create'])->name('admin_product_create');
        // Route::get('/show', [ProductController::class, 'show'])->name('admin_product_view');

        // Route::get('/brand', [BrandController::class, 'index'])->name('brand.index');
        // Route::get('/brand/get/{id}', [BrandController::class, 'get'])->name('brand.get');
        // Route::get('/brand/create', [BrandController::class, 'create'])->name('brand.create');
        // Route::get('/brand/show/{id}', [BrandController::class, 'show'])->name('brand.show');
        // Route::get('/brand/edit/{id}', [BrandController::class, 'edit'])->name('brand.edit');
        // Route::post('/brand', [BrandController::class, 'store'])->name('brand.store');
        // Route::put('/brand/{id}', [BrandController::class, 'update'])->name('brand.update');
        // Route::delete('/brand/{id}', [BrandController::class, 'destroy'])->name('brand.destroy');


        Route::resource('brand',BrandController::class);
        Route::resource('main_category',MainCategoryController::class);
        Route::resource('category',CategoryController::class);
        Route::resource('sub_category',SubCategoryController::class);
        Route::resource('color',ColorController::class);
        Route::resource('size',SizeController::class);
        Route::resource('unit',UnitController::class);
        Route::resource('status',StatusController::class);
        Route::resource('writer',WriterController::class);
        Route::resource('publication',PublicationController::class);
        Route::resource('vendor', VendorController::class);
        Route::resource('image', ImageController::class);
        

        Route::get('/get-all-cateogory-selected-by-main-category/{main_category_id}', [CategoryController::class, 'get_category_by_main_category'])->name('get_all_cateogory_selected_by_main_category');
        Route::get('/get-all-sub-cateogory-selected-by-category/{category_id}', [CategoryController::class, 'get_sub_category_by_category'])->name('get_all_sub_category_by_category');
        Route::get('/get-all-main-category-josn', [MainCategoryController::class, 'get_main_category_json'])->name('get_main_category_json');
        Route::get('/get-all-category-josn', [CategoryController::class, 'get_category_json'])->name('get_category_json');
});

Route::group([
    'prefix' => 'file-manager',
    'middleware' => ['auth'],
    'namespace' => 'Admin'
], function () {

    Route::post('/store-file', [FileManagerController::class, 'store_file'])->name('admin_fm_store_file');
    Route::get('/get-files', [FileManagerController::class, 'get_files'])->name('admin_fm_get_files');
    Route::delete('/delete-file/{image}', [FileManagerController::class, 'delete_file'])->name('admin_fm_delete_file');
});


Route::group([
    'prefix'=>'blank', 
    'middleware'=>['auth'], 
    'namespace'=>'Admin'
    ], function(){
        // Route::get('/', [AdminController::class, 'index'])->name('admin_index');

        //basic page
        Route::get('/index', [AdminController::class, 'blade_index'])->name('admin_blade_index');
        Route::get('/create', [AdminController::class, 'blade_create'])->name('admin_blade_create');
        Route::get('/view', [AdminController::class, 'blade_view'])->name('admin_blade_view');
});


