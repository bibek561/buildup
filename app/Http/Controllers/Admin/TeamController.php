<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\StoreTeamRequest;
use App\Http\Requests\UpdateMemberRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Models\Team;

class TeamController extends Controller
{
    public function index()
    {
        $team = Team::orderBy('order', 'asc')->paginate(10);
        return view('admin.team.index', compact('team'));
    }

    public function create()
    {
        return view('admin.team.create');
    }

    public function store(StoreTeamRequest $request)
    {
        $input = $request->all();
        $input['image'] = fileUpload($request, 'image', 'member');
        $team =  Team::create($input);
        return redirect()->route('team.index')->with('message', 'Created Successfully');
    }


    public function show(Team $team)
    {
        //
    }

    public function edit(Team $team)
    {
        return view('admin.team.edit', compact('team'));
    }

    public function update(UpdateTeamRequest $request, Team $team)
    {
        $old_image = $team->image;
        $input = $request->all();
        $image = fileUpload($request, 'image', 'member');

        if ($image) {
            removeFile($old_image);
            $input['image'] = $image;
        } else {
            unset($input['image']);
        }
        $team->update($input);
        return redirect()->route('team.index')->with('message', 'Update Successfully');
    }
    public function destroy(Team $team)
    {
        removeFile($team->image);
        $team->delete();
        return redirect()->route('team.index')->with('message', 'Delete Successfully');
    }
}
