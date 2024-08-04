<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners = Banner::latest()->get();

        return view('dashboard.banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Banner $banner)
    {

        return view('dashboard.banners.create',compact('banner'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'regularTitle' => 'required|string',
            'boldTitle' => 'required|string',
            'img' => 'required|image'
        ]);

        $data = $request->except('img');
        $data['img'] = $this->uploadImage($request);
        Banner::create($data);

        return redirect()->route('dashboard.banners.index')
            ->with('success','تم انشاء البانر بنجاح');
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $banner = Banner::findOrFail($id);

        return view('dashboard.banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'regularTitle' => 'required|string',
            'boldTitle' => 'required|string',
            'img' => 'sometimes|image'
        ]);

        $banner = Banner::findOrFail($id);
        $old_image = $banner->img ;
        $data = $request->except('img');

        $new_image = $this->uploadImage($request);
        if ($new_image)
        {
            $data['img'] = $new_image;
        }

        if ($old_image && $new_image)
        {
            Storage::disk('public')->delete($old_image);
        }
        $banner->update($data);


        return redirect()->route('dashboard.banners.index')
            ->with('success', 'تم تحديث البانر بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();

        return redirect()->route('dashboard.banners.index')
            ->with('success', 'تم حذف البانر بنجاح');
    }

    /**
     * Handle image upload.
     */
    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('img'))
        {
            return null;
        }

        $file = $request->file('img');
        $path = $file->store('categories','public');

        return $path;
    }
}
