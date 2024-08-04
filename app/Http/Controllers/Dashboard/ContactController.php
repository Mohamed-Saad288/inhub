<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();

        return view('dashboard.contacts',[
            'contacts' => $contacts
        ]);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('dashboard.contacts')
            ->with('info','تم حذف الرسالة بنجاح');
    }
}
