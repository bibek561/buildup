<?php

namespace App\Http\Controllers;

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
