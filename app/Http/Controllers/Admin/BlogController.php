<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Http\Requests\StoreServicesRequest;
use App\Http\Requests\UpdateServicesRequest;
use Session;
use File;
use Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;

class ServicesController extends Controller
{

    public function index()
    {
    //    $services = Service::orderBy('order', 'asc')->get();
        return view('admin.services.index');
    }


    public function create()
    {
        return view('admin.services.create');
    }

    public function store(StoreServicesRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'services');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'services');

        // Generate slug
        $input['slug'] = Str::slug($request->name);

        // Create the service
        Service::create($input);

        return redirect()->route('services.index')->with('message', 'Created Successfully');
    }


    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }


    public function update(UpdateServicesRequest $request, Service $service)
    {
        $input = $request->all();

        $old_image = $service->image;
        $old_banner_image = $service->banner_image;
        $image = fileUpload($request, 'image', 'services');
        $banner_image = fileUpload($request, 'banner_image', 'services');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        if ($banner_image) {
            removeFile($old_banner_image);
            $input['banner_image'] = $banner_image;
        } else {
            unset($input['banner_image']);
        }

        // Generate slug
        $input['slug'] = Str::slug($request->name);

        // Update the service
        $service->update($input);

        return redirect()->route('services.index')->with('message', 'Updated Successfully');
    }



    public function destroy(Service $service)
    {
        removeFile($service->image);
        removeFile($service->banner_image);

        // Delete the service
        $service->delete();

        return redirect()->route('services.index')->with('message', 'Deleted Successfully');
    }
}