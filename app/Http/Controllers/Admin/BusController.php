<?php

namespace App\Http\Controllers\Admin;

use App\Bus;
use App\Bus_Category;
use App\Http\Controllers\Controller;
use App\Route;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['buses'] = Bus::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.bus.index', $data);
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
        return view('admin.bus.create', $data);
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
            'name' => 'required|unique:buses,name',
            'tracking_number' => 'required|min:11|numeric',
            'total_seats' => 'required|min:2|numeric',
            'bus_code' => 'required',
            'status' => 'required',
        ]);

        $data['category_id'] = $request->category_id;
        $data['route_id'] = $request->route_id;
        $data['name'] = $request->name;
        $data['tracking_number'] = $request->tracking_number;
        $data['total_seats'] = $request->total_seats;
        $data['bus_code'] = $request->bus_code;
        $data['status'] = $request->status;


        Bus::create($data);
        session()->flash('success', 'Bus Create Successfully');
        return redirect()->route('bus.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(Bus $bu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus $bu)
    {
        $data['bus_categories'] = Bus_Category::orderBy('name')->get();
        $data['routes'] = Route::orderBy('route_name')->get();
        $data['bus']=$bu;
        return view('admin.bus.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus $bu)
    {
        $request->validate([
            'category_id' => 'required',
            'route_id' => 'required',
            'name' => "required|unique:buses,name,$bu->id",
            'tracking_number' => 'required|min:11|numeric',
            'total_seats' => 'required|min:2|numeric',
            'bus_code' => 'required',
            'status' => 'required',
        ]);


        $data['category_id'] = $request->category_id;
        $data['route_id'] = $request->route_id;
        $data['name'] = $request->name;
        $data['tracking_number'] = $request->tracking_number;
        $data['total_seats'] = $request->total_seats;
        $data['bus_code'] = $request->bus_code;
        $data['status'] = $request->status;


        $bu->update($data);
        session()->flash('success', 'Bus Update Successfully');
        return redirect()->route('bus.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus $bu)
    {
        $bu->delete();
        session()->flash('success', 'Bus Deleted Successfully');
        return redirect()->route('bus.index');
    }
}
