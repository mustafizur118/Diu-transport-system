<?php

namespace App\Http\Controllers\Admin;

use App\Bus_Category;
use App\Http\Controllers\Controller;
use App\Route;
use App\Stuff;
use Illuminate\Http\Request;

class StuffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stuffs'] = Stuff::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.stuff.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['bus_categories'] = Bus_Category::orderBy('name')->get();
        $data['routes'] = Route::orderBy('route_name')->get();
        return view('admin.stuff.create', $data);
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
            'route_id' => 'required',
            'bus_name' => 'required|unique:stuffs,bus_name',
            'designation' => 'required',
            'driver_name' => 'required|unique:stuffs,driver_name',
            'driver_phone' => 'required|min:11|numeric',
            'helper_name' => 'required|unique:stuffs,helper_name',
            'helper_phone' => 'required|min:11|numeric',
            'status' => 'required',
        ]);

        $data['category_id'] = $request->category_id;
        $data['route_id'] = $request->route_id;
        $data['bus_name'] = $request->bus_name;
        $data['designation'] = $request->designation;
        $data['driver_name'] = $request->driver_name;
        $data['driver_phone'] = $request->driver_phone;
        $data['helper_name'] = $request->helper_name;
        $data['helper_phone'] = $request->helper_phone;
        $data['status'] = $request->status;


        Stuff::create($data);
        session()->flash('success', 'Stuff Create Successfully');
        return redirect()->route('stuff.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function show(Stuff $stuff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function edit(Stuff $stuff)
    {
        $data['bus_categories'] = Bus_Category::orderBy('name')->get();
        $data['routes'] = Route::orderBy('route_name')->get();
        $data['stuff'] = $stuff;
        return view('admin.stuff.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stuff $stuff)
    {
        $request->validate([
            'category_id' => 'required',
            'route_id' => 'required',
            'bus_name' => "required|unique:stuffs,bus_name,$stuff->id",
            'designation' => 'required',
            'driver_name' => "required|unique:stuffs,driver_name,$stuff->id",
            'driver_phone' => 'required|min:11|numeric',
            'helper_name' => "required|unique:stuffs,helper_name,$stuff->id",
            'helper_phone' => 'required|min:11|numeric',
            'status' => 'required',
        ]);

        $data['category_id'] = $request->category_id;
        $data['route_id'] = $request->route_id;
        $data['bus_name'] = $request->bus_name;
        $data['designation'] = $request->designation;
        $data['driver_name'] = $request->driver_name;
        $data['driver_phone'] = $request->driver_phone;
        $data['helper_name'] = $request->helper_name;
        $data['helper_phone'] = $request->helper_phone;
        $data['status'] = $request->status;


        $stuff->update($data);
        session()->flash('success', 'Stuff Update Successfully');
        return redirect()->route('stuff.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stuff  $stuff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stuff $stuff)
    {
        $stuff->delete();
        session()->flash('success', 'Stuff Deleted Successfully');
        return redirect()->route('stuff.index');
    }
}
