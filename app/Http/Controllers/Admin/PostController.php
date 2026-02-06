<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Http\Requests\StoreNewsRequest;
use App\Http\Requests\UpdateNewsRequest;
use Session;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Str;

class PostController extends Controller
{

    public function index()
    {
        $blogs = Post::where('status', 1)->orderByRaw('ISNULL(`order`), `order` ASC')->paginate(10);


        return view('admin.news.index', compact('blogs'));
    }


    public function create()
    {
        return view('admin.news.create');
    }


    public function store(StoreNewsRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'blog');
        $input['slug'] = Str::slug($request->name);
        Post::create($input);
        return redirect()->route('blog.index')->with('message', 'Created Successfully');
    }


    public function show($id)
    {
        //
    }


    public function edit(Post $blog)
    {
        return view('admin.news.edit', compact('blog'));
    }


    public function update(UpdateNewsRequest $request, Post $blog)
    {
        $input = $request->all();
        $old_image = $blog->image;
        $image = fileUpload($request, 'image', 'blog');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }

        $input['slug'] = Str::slug($request->name);
        $blog->update($input);
        return redirect()->route('blog.index')->with('message', 'Update Successfully');
    }


    public function destroy(Post $blog)
    {
        removeFile($blog->image);
        $blog->delete();
        return redirect()->route('blog.index')->with('message', 'Delete Successfully');
    }
}
