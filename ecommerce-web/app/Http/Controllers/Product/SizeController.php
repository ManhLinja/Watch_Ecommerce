<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Size;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SizeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Size::where('status',1)->latest()->paginate(10);
        return view('admin.product.size.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.size.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required']
        ]);
        $size = Size::create($request->all());

        $size->slug = Str::slug($size->name);
        $size->creator = Auth::user()->id; 
        $size->save();

        // return redirect()->back()->with('success','data created successfully');
        return 'success';
    }

    /**
     * Display the specified resource.
     */
    public function show(Size $size)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Size $size)
    {
        return view('admin.product.size.edit',compact('size'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Size $size)
    {
        $this->validate($request, [
            'name' => ['required']
        ]);
        $size->update($request->all());

        $size->slug = Str::slug($size->name);
        $size->creator = Auth::user()->id; 
        $size->save();

        return 'success';
        // return redirect()->back()->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Size $size)
    {
        $size->delete();
        return 'success';
    }
}
