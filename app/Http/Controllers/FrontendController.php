<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Service;
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
    
    public function services()
    {
        return view('frontend.services.index');
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
   public function index()
{
    $services = Service::where('status', 1)
                        ->orderBy('order', 'asc')
                        ->get();

    return view('admin.services.index', compact('services'));
}

    public function showServices($slug)
    {
        $services = Service::where('slug', $slug)->firstOrFail();
        $popular_services = Service::where('status', 1)->take(5)->get();
        return view("frontend.services.servicesShow", compact('services', 'popular_services'));
    }
    }
