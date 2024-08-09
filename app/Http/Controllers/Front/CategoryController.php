<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($slug)
    {
        $category = Category::with('blogs')->where('slug',$slug)->first()->toArray();
        $categoryBlog = Category::with('blogs')->where('slug',$slug)->first();
        $blogs = $categoryBlog->blogs()->filter(request()->all())->get();
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();

        return view('subCategory',compact('blogs' , 'setting','categories','category'));
    }
}
