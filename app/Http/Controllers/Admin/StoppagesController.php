<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Route;
use App\Stoppages;
use Illuminate\Http\Request;

class StoppagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['stoppagess'] = Stoppages::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.stoppages.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['routes'] = Route::orderBy('route_name')->get();
        return view('admin.stoppages.create', $data);
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
            'route_id' => 'required',
            'name' => 'required|unique:stoppages,name',
            'status' => 'required',
        ]);

        $data['route_id'] = $request->route_id;
        $data['name'] = $request->name;
        $data['status'] = $request->status;


        Stoppages::create($data);
        session()->flash('success', 'Stoppages Create Successfully');
        return redirect()->route('stoppages.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stoppages  $stoppages
     * @return \Illuminate\Http\Response
     */
    public function show(Stoppages $stoppage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stoppages  $stoppages
     * @return \Illuminate\Http\Response
     */
    public function edit(Stoppages $stoppage)
    {
        $data['routes'] = Route::orderBy('route_name')->get();
        $data['stoppages']=$stoppage;
        return view('admin.stoppages.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stoppages  $stoppages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stoppages $stoppage)
    {
        $request->validate([
            'route_id' => 'required',
            'name' => "required|unique:stoppages,name,$stoppage->id",
            'status' => 'required',
        ]);


        $data['route_id'] = $request->route_id;
        $data['name'] = $request->name;
        $data['status'] = $request->status;


        $stoppage->update($data);
        session()->flash('success', 'Stoppages Update Successfully');
        return redirect()->route('stoppages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stoppages  $stoppages
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stoppages $stoppage)
    {
        $stoppage->delete();
        session()->flash('success', 'Stoppages Deleted Successfully');
        return redirect()->route('stoppages.index');
    }
}
