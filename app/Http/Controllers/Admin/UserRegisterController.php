<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class UserRegisterController extends Controller
{
    public function index()
    {
        return view('admin.register.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($request->password);

        $users =  User::create($input);
        return redirect()->back()->with('message', 'User Successfully Created!');
    }
}
