<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Page;
use App\Models\Setting;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function home()
    {
        $banners = Banner::latest()->get()->toArray();
        $blogs = Blog::where('status', '=', 'active')->latest()->filter(\request()->all())->get()->toArray();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();
        return view('home', [
            'banners' => $banners,
            'blogs' => $blogs,
            'setting' => $setting,
            'categories' => $categories
        ]);
    }

    public function showPost($slug)
    {
        $blog = Blog::with('comments')->where('slug',$slug)->first()->toArray();
        $comments = $blog['comments'];
        $setting = Setting::where('id',1)->first();

        $categories = Category::all();
        $blogs = Blog::where('status', '=', 'active')->latest()->get()->toArray();

        return view('post',compact('blog','setting','categories','blogs','comments'));
    }
    public function storeComment(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'phone' => 'required|string',
            'comment' => 'required|string',
            'blog_id' => 'required|exists:blogs,id'
        ]);

        Comment::create($request->all());

        return redirect()->back();
    }
    public function privacy()
    {
        $page = Page::where('name','=','سياسة الخصوصية')->first();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();

        return view('privacy',compact('page','setting','categories'));
    }

    public function terms()
    {
        $page = Page::where('name','=','الشروط والأحكام')->first();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();
        return view('terms',compact('page','setting','categories'));
    }
    public function about()
    {
        $page = Page::where('name','=','من نحن')->first();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();

        return view('about-us',compact('page','setting','categories'));
    }
    public function faq()
    {
        $page = Page::where('name','=','الاسئلة الشائعة')->first();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();
        return view('faq',compact('page','setting','categories'));
    }
}
