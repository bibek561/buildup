<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use App\Models\Post;
use App\Models\Service;
use App\Models\Project;
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
    public function contact()
    {
        return view('frontend.contact.index');
    }
    public function storeContact(StoreContactRequest $request)
    {
        Contact::create($request->validated());

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!',
        ]);
    }
    public function faqs()
    {
        return view('frontend.faqs.index');
    }

    public function services()
    {

        $services = Service::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.services.index', compact('services'));
    }
    public function showServices($slug)
    {
        $services = Service::where('slug', $slug)->firstOrFail();
        $popular_services = Service::where('status', 1)->take(5)->get();
        return view("frontend.services.servicesShow", compact('services', 'popular_services'));
    }
    public function blog()
    {
        $posts = Post::where('status', 1)->orderBy('order', 'asc')->get();
        return view("frontend.blog.index", compact('posts'));
    }
    public function showBlog($slug)
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $popular_post = Post::where('status', 1)->orderByDesc('views')->take(5)->get();
        return view("frontend.blog.blogShow", compact('post', 'popular_post'));
    }
    public function project()
    {

        $project = Project::where('status', 1)->orderBy('order', 'asc')->get();

        return view('frontend.project.index', compact('project'));
    }
    public function showProject($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();
        $popular_project = Project::where('status', 1)->take(5)->get();
        return view("frontend.project.projectShow", compact('project', 'popular_project'));
    }
}
