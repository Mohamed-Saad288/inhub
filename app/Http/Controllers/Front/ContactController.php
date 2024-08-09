<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Setting;
use http\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        $setting = Setting::where('id',1)->first();
        $categories = Category::all();
        return view('contact',compact('setting','categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'string',
            'email' => 'email',
            'phone_number' => 'string',
            'message' => 'string'
        ]);

        Contact::create($request->all());

        return redirect()->route('blog.index')->with('success','تم ارسال الرساله بنجاح انتظر الرد');
    }
}
