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
    public function notFound()
    {
    return view('frontend.notFound.index');
    }
     public function team()
{
    return view('frontend.team.index');
}

    public function about()
    {
        return view('frontend.about.index');
    }
    public function project()
    {
        return view('frontend.project.index');
    }
    public function blog()
    {
        return view('frontend.blog.index');
    }
    public function contact()
    {
        return view('frontend.contact.index');
    }
    public function faqs()
{
    return view('frontend.faqs.index');
}

    public function services(){

    $services = Service::where('status', 1)->orderBy('order', 'asc')->get();
       
    return view('frontend.services.index',compact('services'));
                        
    }
    public function showServices($slug)
    {
        $services = Service::where('slug', $slug)->firstOrFail();
        $popular_services = Service::where('status', 1)->take(5)->get();
        return view("frontend.services.servicesShow", compact('services', 'popular_services'));
    }
    }
