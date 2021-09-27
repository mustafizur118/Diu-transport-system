<?php

namespace App\Http\Controllers\Admin;

use App\Gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['galleries'] = Gallery::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.gallery.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/gallery';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        Gallery::create($data);
        session()->flash('success', 'Gallery Create Successfully');
        return redirect()->route('gallery.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        $data['gallery']=$gallery;
        return view('admin.gallery.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/gallery';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($gallery->image)){
                unlink($gallery->image);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $gallery->update($data);
        session()->flash('success', 'Gallery Update Successfully');
        return redirect()->route('gallery.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
        if($gallery){
            if(file_exists(($gallery->image))){
                unlink($gallery->image);
            }

            $gallery->delete();
            session()->flash('success', 'Gallery deleted successfully');
        }

        return redirect()->route('gallery.index');
    }
}
