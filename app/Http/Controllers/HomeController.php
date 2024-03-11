<?php

namespace App\Http\Controllers;
use App\Models\Slider;
use App\Models\Blog;
use App\Models\Page;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $sliders=Slider::where("status",1)->orderBy('ordering', 'ASC')->get();
        $blogs=Blog::where("status",1)->orderBy('ordering', 'ASC')->get();
        return view('web.home',compact('sliders','blogs'));
    }
    public function contact(){
        return view('web.contact');
    }
    public function page($urlkey){
        $page =  Page::where('url_key', $urlkey)->first();
        // $page =  Page::where('url_key', $urlkey)->where('status',1)->first();
        return view('web.page',compact('page'));        
    }  

}
