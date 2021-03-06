<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;

use App\User;

use App\Entry;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        return view('users.index', compact('users', 'roles'));
    }

    public function list()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        return view('users.list', compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        return view('users.index', compact('users', 'roles'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $user = User::whereSlug($slug)->first();
        return view('users.show.index', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function entries($slug)
    {
        $user = User::whereSlug($slug)->first();
        $entries = Entry::where('user_id', $user->id)->latest()->paginate(12);
        return view('users.show.entries', compact('user', 'entries'));
    }

    public function about()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        return view('users.about', compact('users', 'roles'));
    }

    public function edit($id)
    {
        $user = Auth::user();
        return view('dashboard.settings', compact('user'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $rules = [
            'first_name' => ['required', 'min:2', 'max:50'],
            'last_name' => ['required', 'min:2', 'max:50'],
            'city' => ['max:50'],
            'country' => ['max:50'],
            'bio' => ['max:50'],
        ];

        $this->validate($request, $rules);
        $input = request()->all();
        $user = User::findOrFail($id);

        $user->update($input);

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function dashboard()
    {
        $user_id = auth()->user()->id;
        $entries = Entry::where($user_id, 'author');
        return view('dashboard.index');
    }

    public function settings()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        // Settings has no index. Settings links go to account.blade.php
        return view('dashboard.settings.account', compact('users', 'roles'));
    }

    public function advanced()
    {
        $users = User::all();
        $roles = Role::pluck('name', 'id');
        // Settings has no index. Settings links go to account.blade.php
        return view('dashboard.settings.advanced', compact('users', 'roles'));
    }
    
    public function userlist()
    {
        $users = User::latest()->paginate(12);
        return view('admin.users.index')->with('users', $users);
    }
}
