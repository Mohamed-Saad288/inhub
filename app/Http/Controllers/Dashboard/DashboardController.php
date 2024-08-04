<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Employee;
use App\Models\Page;
use App\Models\Role;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $category = Category::all();

        $blog = Blog::all();

        $contact = Contact::all();

        $employee =Employee::where('is_manger','=',0);

        $banner = Banner::all();

        $advertisement = Advertisement::all();

        $page = Page::all();

        $role = Role::all();

        return view('dashboard.index',[
            'category' => $category,
            'contact' => $contact,
            'blog' => $blog,
            'employee' => $employee,
            'banner' => $banner,
            'advertisement' => $advertisement,
            'page' => $page,
            'role' => $role
        ]);
    }
}
