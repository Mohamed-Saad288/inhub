<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::latest()->filter(\request()->all())->paginate(8);

        return view('dashboard.blogs.index',[
            'blogs' => $blogs
        ]);
    }
    public function create(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blogs.create',[
            'blog' => $blog,
            'categories' => $categories
        ]);
    }
    public function store(Request $request)
    {
        $request->validate(Blog::rules());

        $data = $request->except('image','employee_id');

        $employee = Auth::guard('employee')->user();

        $data['employee_id'] = $employee->id ;


        $data['image'] = $this->uploadImage($request);


        Blog::create($data);

        return redirect()->route('dashboard.blogs.index')
            ->with('success','تمت اضافه المدونة بنجاح');
    }
    public function show(Blog $blog)
    {
        //
    }
    public function edit(Blog $blog)
    {
        $categories = Category::all();
        return view('dashboard.blogs.edit',[
            'blog' => $blog,
            'categories' => $categories
        ]);
    }
    public function update(Request $request , Blog $blog)
    {
        $request->validate(Blog::rules());

        $old_image = $blog->image ;
        $data = $request->except('image');

        $new_image = $this->uploadImage($request);
        if ($new_image)
        {
            $data['image'] = $new_image;
        }

        if ($old_image && $new_image)
        {
            Storage::disk('public')->delete($old_image);
        }
        $blog->update($data);

        return redirect()->route('dashboard.blogs.index')
            ->with('success','تم تعديل المدونة بنجاح');

    }

    public function destroy(Blog $blog)
    {
        $old_image = $blog->image ;
        Storage::disk('public')->delete($old_image);

        $blog->delete();

        return redirect()->route('dashboard.blogs.index')
            ->with('info','تم حذف المدونة بنجاح');
    }
    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image'))
        {
            return null;
        }

        $files = $request->file('image');
        $paths = [];

        foreach ($files as $file) {
            $paths[] = $file->store('blogs', 'public');
        }

        return implode(',', $paths);
    }

}
