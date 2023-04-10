<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Color;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Color::where('status',1)->latest()->paginate(10);
        return view('admin.product.color.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.color.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
        ]);

        $color = Color::create($request->all());

        $color->slug = Str::slug($color->name);
        $color->creator = Auth::user()->id;
        $color->save();

        return response()->json([
            'html' => "<option value='".$color->id."'>".$color->name."</option>",
            'value' => $color->id,
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
    public function edit(Color $color)
    {
        return view('admin.product.color.edit',compact('color'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Color $color)
    {
        $this->validate($request,[
            'name' => ['required']
        ]);

        $color->update($request->all());

        $color->slug = Str::slug($color->name);
        $color->creator = Auth::user()->id;
        $color->save();

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Color $color)
    {
        $color->delete();
        return 'success';
    }
}
