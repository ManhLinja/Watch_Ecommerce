<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Image;

class ImageController extends Controller
{
    public function store(Request $request){
        $this->validate($request,[
            'name' => ['required'],
        ]);
        $image = Image::create($request->except('name'));
        if($request->hasFile('name')){
            $image->name = Storage::put('uploads/file_manager',$request->file('name'));
            $image->save();
        }

        // return response()->json([
        //     'html' => "<option value='".$image->id."'>".$image->name."</option>",
        //     'value' => $image->id,
        // ]);
        return redirect()->back()->with('success','data created successfully');
    }

    public function destroy(Image $image)
    {
        $image->delete();
        return response('success');
    }
}
