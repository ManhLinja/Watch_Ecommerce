<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = SubCategory::where('status',1)->latest()->paginate(10);
        return view('admin.product.sub_category.index', compact('collection'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maincategory = MainCategory::where('status',1)->latest()->get();
        $category = Category::where('status',1)->where('main_category_id',MainCategory::where('status',1)->latest()->first()->id)->latest()->get();
        return view('admin.product.sub_category.create',compact('maincategory','category'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'main_category_id' => ['required'],
            'category_id' => ['required'],
            'icon' => ['required']
        ]);
        $sub_category = SubCategory::create($request->except('icon'));
        if($request->hasFile('icon')){
            $sub_category->icon = Storage::put('uploads/category',$request->file('icon'));
            $sub_category->save();
        }

        $sub_category->slug = Str::slug($sub_category->name);
        $sub_category->creator = Auth::user()->id; 
        $sub_category->save();

        // return 'success';
        return response()->json([
            'html' => "<option value='".$sub_category->id."'>".$sub_category->name."</option>",
            'value' => $sub_category->id,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubCategory $sub_category)
    {
        $main_category = MainCategory::where('status',1)->where('id',$sub_category->main_category_id)->latest()->get();
        $category = Category::where('status',1)->where('main_category_id',$sub_category->main_category_id)->latest()->get();
        return view('admin.product.sub_category.edit',compact('main_category','category','sub_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubCategory $sub_category)
    {
        $this->validate($request,[
            'name' => ['required'],
            'main_category_id' => ['required'],
            'category_id' => ['required'],
        ]);
        $sub_category->update($request->except('icon'));
        if($request->hasFile('icon')){
            $sub_category->icon = Storage::put('uploads/category',$request->file('icon'));
            $sub_category->save();
        }

        $sub_category->slug = Str::slug($sub_category->name);
        $sub_category->creator = Auth::user()->id; 
        $sub_category->save();

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubCategory $sub_category)
    {
        $sub_category->delete();
        return 'success';
    }
}
