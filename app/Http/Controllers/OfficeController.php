<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\StoreOffice;
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
    public function store(StoreOffice $office)
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

//    public function show(Office $office)
//    {
//
//        return view('offices.show', compact('office'));
//    }

    public function edit(Office $office)
    {
        $documents = Document::all();

        return view('offices.edit', compact('office', 'documents'));

    }
}
