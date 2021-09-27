<?php

namespace App\Http\Controllers\Admin;

use App\Bus_Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BusCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['bus_categories'] = Bus_Category::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.bus_category.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.bus_category.create');
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
            'name' => 'required|unique:bus__categories,name',
            'status' => 'required',

        ]);

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['status'] = $request->status;



        Bus_Category::create($data);
        session()->flash('success', 'Bus_Category Create Successfully');
        return redirect()->route('bus_category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bus_Category  $bus_Category
     * @return \Illuminate\Http\Response
     */
    public function show(Bus_Category $bus_Category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bus_Category  $bus_Category
     * @return \Illuminate\Http\Response
     */
    public function edit(Bus_Category $bus_category)
    {
        $data['bus_category']=$bus_category;
        return view('admin.bus_category.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bus_Category  $bus_Category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bus_Category $bus_category)
    {
        $request->validate([
            'name' => "required|unique:bus__categories,name,$bus_category->id",
            'status' => 'required',

        ]);

        $data['name'] = $request->name;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $bus_category->update($data);
        session()->flash('success', 'Bus_Category Update Successfully');
        return redirect()->route('bus_category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bus_Category  $bus_Category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bus_Category $bus_category)
    {
        $bus_category->delete();
        session()->flash('success', 'Bus_Category Deleted Successfully');
        return redirect()->route('bus_category.index');
    }
}
