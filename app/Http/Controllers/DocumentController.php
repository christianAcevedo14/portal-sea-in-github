<?php

namespace App\Http\Controllers;

use App\Office;
use App\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Office $office)
    {
        return view('documents.create', compact('office'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Office $office, Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required'
        ]);

        $filePath ='/storage/' . request('file')->store('documents','public');

        $office->documents()->create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $filePath
        ]);



        return redirect()->route('offices.edit', $office)->with('notification', 'El documento fue guardado exitosamente');

//        return view('offices.show',compact('office'));
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
}
