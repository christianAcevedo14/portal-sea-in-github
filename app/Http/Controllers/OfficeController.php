<?php

namespace App\Http\Controllers;

use App\Document;
use App\Office;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $offices = Office::orderBy('name')->get();
        return view('offices.index', compact('offices'));
    }

    public function create()
    {
        return view('offices.create');
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => 'image|required'
        ]);
            $imagePath ='/storage/' . request('logo')->store('img','public');


            Office::create([
                'name' => $data['name'],
                'description' => $data['description'],
                'logo' => $imagePath
            ]);

        return redirect()->route('offices.index');
    }

    public function show(Office $office)
    {
        return redirect()->route('offices.edit', $office);
    }

    public function edit(Office $office)
    {

        return view('offices.edit', compact('office'));

    }

    public function update(Office $office, Request $request)
    {

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'logo' => ''
        ]);

        if(request('logo')){
            $imagePath ='/storage/' . request('logo')->store('img','public');
          \Illuminate\Support\Facades\File::delete(public_path() . '/' . $office->logo);

            $office->update(array_merge(
                $data,
                ['logo' => $imagePath,]
            ));
        }
        else{
            $office->update($data);
        }

        return redirect()->route('documents.index', $office)->with('notification', 'La oficina fue editada exitosamente.');
    }
}
