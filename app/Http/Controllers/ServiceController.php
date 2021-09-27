<?php

namespace App\Http\Controllers;

use App\Bus_Category;
use App\Service;
use App\Stuff;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service(){
        $data['services'] = Service::where('status', 'active')->get();
        return view('frontend.service', $data);
    }

    public function stuffinfo($id){

        $data['stafs']= Stuff::where('status', 'active')->where('category_id', $id)->get();
        $data['buses_info'] = Bus_Category::where('status', 'active')->get();
        $data['buses_category'] = Bus_Category::where('status', 'active')->where('id', $id)->first();
        return view('frontend.stuffinfo', $data);

    }
}
