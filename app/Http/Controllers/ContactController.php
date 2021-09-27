<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        $data['sliders'] = Slider::where('status', 'active')->get();
        return view('frontend.contact', $data);
    }
}
