<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function edit()
    {
        $setting = Setting::where('id','=',1)->first();

        return view('dashboard.settings.edit',[
            'setting' => $setting
        ]);
    }
    public function update(Request $request , Setting $setting)
    {
        $request->validate([
            'whatsapp' => 'required|string',
            'phone' => 'required|string',
            'email' => 'required|string|email',
            'facebook' => 'required|string',
            'x' => 'required|string',
            'instagram' => 'required|string',
            'linkedin' => 'required|string',
        ]);

        $setting->update();
        return redirect()->back();
    }
}
