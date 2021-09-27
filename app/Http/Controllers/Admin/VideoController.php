<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['videos'] = Video::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.video.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video.create');
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
            'link'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/videos';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['link'] = $request->link;
        $data['published_at'] = Carbon::now();
        $data['status'] = $request->status;

        Video::create($data);
        session()->flash('success', 'Video Create Successfully');
        return redirect()->route('video.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        $data['video']=$video;
        return view('admin.video.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'link'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/videos';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($video->image)){
                unlink($video->image);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['link'] = $request->link;
        $data['status'] = $request->status;

        $video->update($data);
        session()->flash('success', 'Video Update Successfully');
        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        if($video){
            if(file_exists(($video->image))){
                unlink($video->image);
            }

            $video->delete();
            session()->flash('success', 'Video deleted successfully');
        }

        return redirect()->route('video.index');
    }

}
