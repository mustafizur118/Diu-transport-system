<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function about(){
        $data['sliders'] = Slider::where('status', 'active')->get();
        return view('frontend.about', $data);
    }


    public function developers(){
        return view('frontend.developers');
    }

    public function trnasportinfo(){
        $data['sliders'] = Slider::where('status', 'active')->get();
        return view('frontend.trnasportinfo', $data);
    }
}
