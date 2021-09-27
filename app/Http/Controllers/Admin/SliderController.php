<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['sliders']=Slider::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('admin.slider.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.slider.create');
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
            'status'=>'required|in:'.Slider::ACTIVE_STATUS.','.Slider::INACTIVE_STATUS,
            'image'=>'required|mimes:jpeg, png, jpg|max:8192'
        ]);
        $data = $request->except(['_token', 'image']);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/slider';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
        }

        Slider::create($data);
        session()->flash('success', 'Slider Create Successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        $data['slider'] = $slider;
        return view('admin.slider.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {

        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required|in:'.Slider::ACTIVE_STATUS.','.Slider::INACTIVE_STATUS,
            'image'=>'mimes:jpeg, png|max:8192'
        ]);

        $data = $request->except(['_token', 'image']);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/slider';
            $file->move($path, $file->getClientOriginalName());
            $data['image'] = $path . '/' . $file->getClientOriginalName();
            if($slider->image != null  && file_exists($slider->image)){
                unlink($slider->image);
            }
        }

        $slider->update($data) ;
        session()->flash('success', 'Slider Updated Successfully');
        return redirect()->route('slider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        if(file_exists($slider->image))
        {
            unlink($slider->image);
        }
        $slider->delete();
        session()->flash('success', 'Slider Delated Successfully');
        return redirect()->back();
    }
}
