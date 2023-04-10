<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Status;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Status::where('status',1)->latest()->paginate(10);
        return view('admin.product.status.index', compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.status.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required']
        ]);
        $status = Status::create($request->all());

        $status->slug = Str::slug($status->name);
        $status->creator = Auth::user()->id; 
        $status->save();

        return 'success';
        // return redirect()->back()->with('success','data created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Status $status)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        return view('admin.product.status.edit', compact('status'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        $this->validate($request,[
            'name' => ['required']
        ]);
        $status->update($request->all());

        $status->slug = Str::slug($status->name);
        $status->creator = Auth::user()->id; 
        $status->save();

        return 'success';

        // return redirect()->back()->with('success','data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        $status->delete();
        return 'success';
    }
}
