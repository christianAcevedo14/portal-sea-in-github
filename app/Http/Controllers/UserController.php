<?php

namespace App\Http\Controllers;

use App\App;
use App\Http\Requests\StoreUser;
use App\ProgrammaticUnit;
use App\Title;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agents = User::with(['programmatic_unit', 'title'])->agents()->orderBy('first_name')->get();
        $educators = User::with(['programmatic_unit', 'title'])->cfc()->orderBy('first_name')->get();
        $specialists = User::with(['programmatic_unit', 'title'])->specialists()->orderBy('first_name')->get();
        $coordinators = User::with(['programmatic_unit', 'title'])->coordinators()->orderBy('first_name')->get();
        $directors = User::with(['programmatic_unit', 'title'])->directors()->orderBy('first_name')->get();
        $administrativo = User::with(['programmatic_unit', 'title'])->administrativo()->orderBy('first_name')->get();
        return view('users.index', compact('agents', 'educators', 'specialists', 'coordinators', 'directors', 'administrativo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $apps = App::select('id', 'name')->get();
        $titles = Title::select('id', 'description')->get();
        $programmatic_units = ProgrammaticUnit::select('id', 'description')->get();
        return view('users.create', compact('apps', 'titles', 'programmatic_units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreUser $user
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreUser $user)
    {
        $new_user = User::create($user->except('app_id'));
        $new_user->apps()->attach($user->app_id);
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $apps = App::select('id', 'name')->get();
        $titles = Title::select('id', 'description')->get();
        $programmatic_units = ProgrammaticUnit::select('id', 'description')->get();
        return view('users.edit', compact('user','apps', 'titles', 'programmatic_units'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param User $user
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(User $user, Request $request)
    {

        $user->update($request->except('app_id'));
        $user->apps()->sync($request->app_id);
        return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param User $user
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->back();
    }
}
