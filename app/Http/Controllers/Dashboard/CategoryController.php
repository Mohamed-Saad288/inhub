<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::filter(\request()->all())->paginate(8);

        return view('dashboard.categories.index',[
            'categories' => $categories
        ]);
    }

    public function create(Category $category)
    {
        return view('dashboard.categories.create' ,[
            'category' => $category
            ]);
    }

    public function store(Request $request)
    {
        $request->validate(Category::rules());

        Category::create($request->all());

        return redirect()->route('dashboard.categories.index')
            ->with('success','تمت اضافه الفئه بنجاح');
    }
    public function show(Category $category)
    {
       return view('dashboard.categories.show',[
           'category' => $category
       ]);
    }

    public function edit(Category $category)
    {
        return view('dashboard.categories.edit',[
            'category' => $category
        ]);
    }

    public function update(Request $request , Category $category)
    {
        $request->validate(Category::rules());

        $category->update($request->only(['name', 'description', 'status']));

        return redirect()->route('dashboard.categories.index')
            ->with('success','تم تعديل الفئه بنجاح');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('dashboard.categories.index')
            ->with('info','تم حذف الفئه بنجاح');
    }
}
