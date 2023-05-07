<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Category::where('status',1)->latest()->paginate(10);
        return view('admin.product.category.index', compact('collection'));
    }

    public function get_category_json()
    {

        $collection = Category::where('status',1)->latest()->get();
        $options = '';
        foreach ($collection as $key => $value) {
            $options .= "<option ".($key==0?' selected':'')." value='".$value->id."'>".$value->name."</option>";
        }
        return $options;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maincategory = MainCategory::where('status',1)->latest()->get();
        return view('admin.product.category.create',compact('maincategory'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'main_category_id' => ['required'],
            // 'icon' => ['required']
        ]);
        // $category = Category::create($request->except('icon'));
        // if($request->hasFile('icon')){
        //     $category->icon = Storage::put('uploads/category',$request->file('icon'));
        //     $category->save();
        // }
        $category = Category::create($request->all());
        $category->slug = Str::slug($category->name);
        $category->creator = Auth::user()->id; 
        $category->save();

        // return 'success';

        return response()->json([
            'html' => "<option value='".$category->id."'>".$category->name."</option>",
            'value' => $category->id,
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
    public function edit(Category $category)
    {
        $main_category = MainCategory::where('status',1)->latest()->get();
        return view('admin.product.category.edit', compact('category','main_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        $this->validate($request,[
            'name' => ['required'],
            'main_category_id' => ['required']
        ]);
        // $category->update($request->except('icon'));
        // if($request->hasFile('icon')){
        //     $category->icon = Storage::put('uploads/category',$request->file('icon'));
        //     $category->save();
        // }
        $category->update($request->all());
        $category->slug = Str::slug($category->name);
        $category->creator = Auth::user()->id; 
        $category->save();

        return redirect()->back()->with('success','data updated successfully');
        // return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return 'success';
    }

    public function get_category_by_main_category($main_category_id)
    {
        $categories = Category::where('main_category_id',$main_category_id)->get();
        $option = "";
        foreach ($categories as $key => $value) {
            $id = $value->id;
            $name = $value->name;
            $option.= "<option".($key==0?' selected ':'')." value='$id' >$name</option>";
        }
        return $option;
    }

    public function get_sub_category_by_category($category_id)
    {
        $sub_categories = SubCategory::where('category_id',$category_id)->get();
        $option = "";
        foreach ($sub_categories as $key => $value) {
            $id = $value->id;
            $name = $value->name;
            $option.= "<option".($key==0?' selected ':'')." value='$id' >$name</option>";
        }
        return $option;
    }
}
