<?php

namespace App\Http\Controllers;


use App\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blog(){
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['posts']=Post::where('status', 'active')->orderBy('id', 'asc')->paginate(5);
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        return view('frontend.blog', $data);
    }
    public function details($id){
        $data['latest_news']=Post::where('status', 'active')->orderBy('id', 'desc')->limit(3)->get();
        $data['popular_posts']=Post::where('status', 'active')->orderBy('view_count', 'desc')->limit(3)->get();
        $post=Post::findOrFail($id);
        $post->increment('view_count');
        $data['post']=$post;
        return view('frontend.details', $data);
    }
}
