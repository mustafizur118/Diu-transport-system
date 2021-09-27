<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;


class UserController extends Controller
{
    public function profile($id){
        $data['user'] = User::where('id', $id)->first();
        return view('frontend.profile', $data);
    }


    public function profileupdate(Request $request)
    {
        $user_id = Auth::user()->id;
        $user = User::findOrFail($user_id);

        $request->validate([
            'name' => 'required',
            'department' => 'required',
            'phone_no' => 'required|min:11|numeric',
            'image' => 'mimes:jpeg,png|max:8192',
        ]);



        $user->name = $request->input('name');
        $user->department = $request->input('department');
        $user->phone_no = $request->input('phone_no');
        if ($request->password != null){
            $user->password = bcrypt($request->password);
        }

        if ($request->hasFile('image'))

        {
            $destination = 'images/user/'.$user->image;
            if (File::exists($destination)){
              File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $filename = $extension;
            $file->move('images/user/', $filename);
            $user->image = $filename;
        }


        $user->update();
        return redirect()->back();
    }


    public function ticketlist(){

        return view('frontend.ticket_list');
    }
}
