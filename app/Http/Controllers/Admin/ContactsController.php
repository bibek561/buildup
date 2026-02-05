<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Contact;
use App\Http\Requests\StoreContactsRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::latest()->paginate(10);
        return view('admin.contacts.index', compact('contacts'));
    }


    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }


    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contacts.index')->with('message', 'Delete Successfully');
    }

  
}
