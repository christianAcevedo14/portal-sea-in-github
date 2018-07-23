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
        $users = User::with(['programmatic_unit', 'title'])->get();
        return view('users.index', compact('users'));
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
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        return redirect()->route('home');
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
