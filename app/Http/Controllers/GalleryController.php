<?php

namespace App\Http\Controllers;

use App\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function gallery(){
        $data['galleries'] = Gallery::where('status', 'active')->get();
        return view('frontend.gallery', $data);
    }
}
