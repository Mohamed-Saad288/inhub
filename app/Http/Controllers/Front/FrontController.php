<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $banners = Banner::latest()->get()->toArray();
        $blogs = Blog::where('status', '=', 'active')->latest()->get()->toArray();
        $setting = Setting::where('id',1)->first();
        return view('home', compact('banners', 'blogs','setting'));
    }

    public function showBlog($slug)
    {
        $blog = Blog::where('slug',$slug)->first();

        return view('showBlog',compact('blog'));
    }
    public function privacy()
    {
        $page = Page::where('name','=','سياسة الخصوصية')->first();

        return view('privacy',compact('page'));
    }

    public function terms()
    {
        $page = Page::where('name','=','الشروط والأحكام')->first();

        return view('terms',compact('page'));
    }
    public function about()
    {
        $page = Page::where('name','=','من نحن')->first();

        return view('about-us',compact('page'));
    }
    public function faq()
    {
        $page = Page::where('name','=','الاسئلة الشائعة')->first();

        return view('faq',compact('page'));
    }
}
