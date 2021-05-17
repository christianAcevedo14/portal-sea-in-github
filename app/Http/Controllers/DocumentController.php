<?php

namespace App\Http\Controllers;

use App\Office;
use App\Document;
use FontLib\EOT\File;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Comment\Doc;

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
    public function index(Office $office)
    {
        $documents = Document::all();

        return view('documents.index', compact('office', 'documents'));
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
            'file' => 'required',
            'downloadable' => 'required'
        ]);

//        $filePath ='/storage/' . request('file')->store('documents','public');
        if ($request->downloadable == 1) {
            $file = $request->file . '&download=1';
        } else {
            $file = $request->file;
        }

        $office->documents()->create([
            'name' => $request->name,
            'description' => $request->description,
            'file' => $file,
        ]);

        return redirect()->route('documents.index', $office)->with('notification', 'El documento fue guardado exitosamente');

//        return view('offices.show',compact('office'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Office $office)
    {
        return redirect()->route('documents.index', $office);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Office $office, Document $document)
    {
        return view('documents.edit',compact('office', 'document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Office $office, Document $document, Request $request)
    {

//        @unlink($document->file);
//
//        $document->update($request->all());
//
//        return redirect()->route('offices.edit', $office)->with('notification', 'El documento fue editado exitosamente');

        $data = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'file' => 'required',
            'downloadable' => 'required'
        ]);

//        if(request('file')){
//           $filePath ='/storage/' . request('file')->store('documents','public');
//          \Illuminate\Support\Facades\File::delete(public_path() . '/' . $document->file);
//
//
//            $document->update(array_merge(
//                $data,
//                ['file' => $file,]
//            ));
//        }

        if ($document->file !== $request->file){
            if ($request->downloadable == 1) {
                $file = $request->file . '&download=1';
            } else {
                $file = $request->file;
            }

            $document->update([
                'name' => $request->name,
                'description' => $request->description,
                'file' => $file,
            ]);
        }
        else{
            $document->update(request()->except('downloadable'));
        }

//        unlink(public_path() . '/' . $document->file);



        return redirect()->route('documents.index', $office)->with('notification', 'El documento fue editado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Office $office, Document $document)
    {
//        \Illuminate\Support\Facades\File::delete(public_path() . '/' . $document->file);

        $document->delete();

        return redirect()->back()->with('notification', 'El documento fue eliminado exitosamente.');
    }
}
