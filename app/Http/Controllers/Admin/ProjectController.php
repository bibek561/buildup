<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use Session;
use File;
use Illuminate\Support\Str;
use PHPUnit\Framework\Error\Notice;
use SebastianBergmann\CodeCoverage\Report\Xml\Project as XmlProject;

class ProjectController extends Controller
{

    public function index()
    {
        $project = Project::latest()->paginate(10);
        return view('admin.project.index', compact('project'));
    }

    public function create()
    {
        return view('admin.project.create');
    }

    public function store(StoreProjectRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'project');
        $input['banner_image'] = fileUpload($request, 'banner_image', 'project');

        // Generate slug
        $input['slug'] = Str::slug($request->name);

        // Create the service
        Project::create($input);

        return redirect()->route('project.index')->with('message', 'Created Successfully');
    }


    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }


    public function update(UpdateProjectRequest $request, Project $project)
    {
        $input = $request->all();

        $old_image = $project->image;
        $old_banner_image = $project->banner_image;
        $image = fileUpload($request, 'image', 'project');
        $banner_image = fileUpload($request, 'banner_image', 'project');

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
        $project->update($input);

        return redirect()->route('project.index')->with('message', 'Updated Successfully');
    }



    public function destroy(Project $project)
    {
        removeFile($project->image);
        removeFile($project->banner_image);

        // Delete the project
        $project->delete();

        return redirect()->route('project.index')->with('message', 'Deleted Successfully');
    }
}
