<?php

namespace App\Http\Controllers\Admin;

use App\Bus_Category;
use App\Http\Controllers\Controller;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['services'] = Service::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.service.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['bus_categories'] = Bus_Category::orderBy('name')->get();
        return view('admin.service.create', $data);
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
            'category_id' => 'required',
            'title'=>'required',
            'sub_title'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/services';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        Service::create($data);
        session()->flash('success', 'Service Create Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        $data['bus_categories'] = Bus_Category::orderBy('name')->get();
        $data['service']=$service;
        return view('admin.service.edit', $data);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Service $service)
    {
        $request->validate([
            'category_id' => 'required',
            'title'=>'required',
            'sub_title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/services';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($service->image)){
                unlink($service->image);
            }
        }

        $data['category_id'] = $request->category_id;
        $data['title'] = $request->title;
        $data['sub_title'] = $request->sub_title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $service->update($data);
        session()->flash('success', 'Service Update Successfully');
        return redirect()->route('service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        if($service){
            if(file_exists(($service->image))){
                unlink($service->image);
            }

            $service->delete();
            session()->flash('success', 'Service deleted successfully');
        }

        return redirect()->route('service.index');
    }
}
