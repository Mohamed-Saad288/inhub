<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdvertisementController extends Controller
{
    public function index()
    {
        $advertisements = Advertisement::all();

        return view('dashboard.advertisements.index',compact('advertisements'));
    }

    public function create(Advertisement $advertisement)
    {
        return view('dashboard.advertisements.create',compact('advertisement'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'link' => 'required|string',
            'image' => 'required|image'
        ]);

        $data = $request->except('image');
        $data['image'] = $this->uploadImage($request);
        Advertisement::create($data);

        return redirect()->route('dashboard.advertisements.index')
            ->with('success','تم انشاء الاعلان بنجاح');
    }

    public function show()
    {
        //
    }

    public function edit(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);

        return view('dashboard.advertisements.edit', compact('advertisement'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|min:3|max:255',
            'link' => 'required|string',
            'image' => 'required|image'
        ]);

        $advertisement = Advertisement::findOrFail($id);

        $old_image = $advertisement->image ;

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
        $advertisement->update($data);


        return redirect()->route('dashboard.advertisements.index')
            ->with('success', 'تم تحديث الاعلان بنجاح');
    }

    public function destroy(string $id)
    {
        $advertisement = Advertisement::findOrFail($id);
        $advertisement->delete();

        return redirect()->route('dashboard.advertisements.index')
            ->with('success', 'تم حذف الاعلان بنجاح');
    }
    protected function uploadImage(Request $request)
    {
        if (!$request->hasFile('image'))
        {
            return null;
        }

        $file = $request->file('image');
        $path = $file->store('advertisements','public');

        return $path;
    }






}
