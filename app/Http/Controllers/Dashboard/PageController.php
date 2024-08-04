<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $pages = Page::all();

        return view('dashboard.pages.index',compact('pages'));
    }

    public function create(Page $page)
    {
        return view('dashboard.pages.create',compact('page'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string'
        ]);

        Page::create($request->all());

        return redirect()->route('dashboard.pages.index')
            ->with('success','تم انشاء الصفحة بنجاح');
    }
    public function edit(Page $page)
    {
        return view('dashboard.pages.edit',compact('page'));
    }
    public function update(Request $request , Page $page)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'title' => 'required|string|min:3|max:255',
            'description' => 'required|string'
        ]);

       $page->update();

        return redirect()->route('dashboard.pages.index')
            ->with('success','تم تحديث الصفحة بنجاح');
    }
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect()->route('dashboard.pages.index')
            ->with('info','تم حذف الصفحة بنجاح');
    }
}
