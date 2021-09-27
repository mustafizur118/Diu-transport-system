<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users'] = User::orderBy('id','desc')->get();
        $data['serial']=1;
        return view('admin.user.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['roles'] = Role::orderBy('name')->get();
        return view('admin.user.create', $data);
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed',
            'role_id' => 'required',
            'user_id' => 'required',
            'department' => 'required',
            'phone_no' => 'required',
            'image' => 'mimes:jpeg,png|max:8192',
        ]);
        $data = $request->except(['_token', 'password', 'image']);
        $data['password'] = bcrypt($request->password);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/user';
            $file_name = $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image'] = $path . '/' . $file_name;
        }

        User::create($data);
        session()->flash('success', 'User Create Successfully');
        return redirect()->route('user.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['roles'] = Role::orderBy('name')->get();
        $data['user'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role_id' => 'required',
            'user_id' => 'required',
            'department' => 'required',
            'phone_no' => 'required',
            'image' => 'mimes:jpeg,png|max:8192',
        ]);
        if ($request->password != null){
            $data['password']=bcrypt($request->password);
        }
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['role_id'] = $request->role_id;
        $data['user_id'] = $request->user_id;
        $data['department'] = $request->department;
        $data['phone_no'] = $request->phone_no;

        $user = User::findOrFail($id);
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $path = 'images/user';
            $file_name = $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image'] = $path . '/' . $file_name;
            if ($user->image != null && file_exists($user->image)) {
                unlink($user->image);
            }
        }

        $user->update($data);
        session()->flash('success', 'User Update Successfully');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if(file_exists($user->image))
        {
            unlink($user->image);
        }
        $user->destroy($user->id);
        session()->flash('success', 'User Delated Successfully');
        return redirect()->back();
    }
}
