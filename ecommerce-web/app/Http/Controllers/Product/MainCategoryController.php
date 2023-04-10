<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MainCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = MainCategory::where('status',1)->latest()->paginate(10);
        return view('admin.product.main_category.index', compact('collection'));
    }

    public function get_main_category_json()
    {
        $collection = MainCategory::where('status',1)->latest()->get();
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
        return view('admin.product.main_category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'icon' => ['required']
        ]);
        $main_category = MainCategory::create($request->except('icon'));
        if($request->hasFile('icon')){
            $main_category->icon = Storage::put('uploads/maincategory',$request->file('icon'));
            $main_category->save();
        }

        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id; 
        $main_category->save();

        // return 'success';
        // return redirect()->back()->with('success','data created successfully');
        return response()->json([
            'html' => "<option value='".$main_category->id."'>".$main_category->name."</option>",
            'value' => $main_category->id,
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
    public function edit(MainCategory $main_category)
    {
        
        return view('admin.product.main_category.edit',compact('main_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainCategory $main_category)
    {
        $this->validate($request,[
            'name' => ['required'],
        ]);
        $main_category->update($request->except('icon'));
        if($request->hasFile('icon')){
            $main_category->logo = Storage::put('uploads/maincategory',$request->file('icon'));
            $main_category->save();
        }

        $main_category->slug = Str::slug($main_category->name);
        $main_category->creator = Auth::user()->id; 
        $main_category->save();

        // return redirect()->back()->with('success','data updated successfully');
        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainCategory $main_category)
    {
        $main_category->delete();
        return 'success';
    }
}
