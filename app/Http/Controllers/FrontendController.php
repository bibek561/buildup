<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('frontend.home.index');
    }
    public function about()
    {
        return view('frontend.about.index');
    }
    public function blog()
    {
        return view('frontend.blog.index');
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }
  public function storeContact(Request $request)
    {
        // Validate the form
        $validated = $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'phone_number' => 'nullable',
            'subject' => 'nullable',
            'message' => 'nullable',
        ]);

        // Save to database
       Contact::create($request->all());

        // Redirect back with success message
        return redirect()->back()->with('success', 'Thank you! Your message has been sent.');
    }
    
    public function service()
    {
        return view('frontend.service.index');
    }
    public function team()
    {
        return view('frontend.team.index');
    }
    public function notFound()
    {
        return view('frontend.notFound.index');
    }
    public function project()
    {
        return view('frontend.project.index');
    }
    public function faqs()
    {
        return view('frontend.faqs.index');
    }
    
    
}
