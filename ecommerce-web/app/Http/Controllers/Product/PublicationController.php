<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $collection = Publication::where('status',1)->latest()->paginate(10);
        return view('admin.product.publication.index',compact('collection'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
        ]);

        $publication = Publication::create($request->except('image'));

        if($request->hasFile('image')){
            $publication->image = Storage::put('uploads/publication',$request->file('image'));
            $publication->save();
        }

        $publication->slug = Str::slug($publication->name);
        $publication->creator = Auth::user()->id;
        $publication->save();

        return 'success';
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
    public function edit(Publication $publication)
    {
        return view('admin.product.publication.edit',compact('publication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        $this->validate($request,[
            'name' => ['required'],
            'description' => ['required']
        ]);

        $publication->update($request->except('image'));

        if($request->hasFile('image')){
            $publication->logo = Storage::put('uploads/writer',$request->file('image'));
            $publication->save();
        }

        $publication->slug = Str::slug($publication->name);
        $publication->creator = Auth::user()->id;
        $publication->save();

        return 'success';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return 'success';
    }
}
