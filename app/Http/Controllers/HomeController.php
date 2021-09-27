<?php

namespace App\Http\Controllers;


use App\Post;
use App\Slider;
use App\Tag;
use App\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*$this->middleware('auth');*/
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function stdlogin()
    {
        return view('frontend.login');
    }

    public function stdreg()
    {
        return view('frontend.registration');
    }

    public function index()
    {
        //return view('frontend.login');
    }


    public function home()
    {
        $data['featured_posts']=Post::where('status', 'active')->where('is_featured', 1)->limit(2)->paginate(2);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['sliders'] = Slider::where('status', 'active')->get();
        $data['videos'] = Video::where('status', 'active')->limit(1)->get();
        $data['tags']=Tag::all();
        return view('frontend.home', $data);
    }

}
