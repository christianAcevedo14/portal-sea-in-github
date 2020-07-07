<?php

namespace App\Http\Controllers;

use App\TutorialApp;
use App\TutorialSection;
use App\TutorialVideo;
use http\Message;
use Illuminate\Http\Request;

class TutorialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tutorials.index');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request['item'] === 'app') {

            TutorialApp::Create([
                'name' => $request['name']
            ]);

        } else if ($request['item'] === 'section') {

            TutorialSection::Create([
                'tutorial_app_id' => $request['app'],
                'name' => $request['name']
            ]);

        } else {

            TutorialVideo::Create([
                'tutorial_section_id' => $request['section'],
                'title' => $request['title'],
                'embed' => $request['embed'],
                'description' => $request['description']
            ]);

        }

        return ['message' => 'Creado'];
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $tutorial_apps = TutorialApp::with(['tutorial_sections.tutorial_videos'])->orderBy('id')->get();
//        $tutorial_videos = TutorialVideo::with(['tutorial_sections.tutorial_apps'])->orderByDesc('created_at')->paginate(5);

        return compact('tutorial_apps');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request['item'] === 'app') {

            $app = TutorialApp::findOrFail($id);
            $app->update([
                'name' => $request['name']
            ]);

        } else if ($request['item'] === 'section') {

            $section = TutorialSection::findOrFail($id);
            $section->update([
                'tutorial_app_id' => $request['app'],
                'name' => $request['name']
            ]);

        } else {

            $video = TutorialVideo::findOrFail($id);
            $video->update([
                'tutorial_section_id' => $request['section'],
                'title' => $request['title'],
                'embed' => $request['embed'],
                'description' => $request['description']
            ]);

        }

        return ['message' => 'Actualizado'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return array
     */
    public function destroy(Request $request, $id)
    {
        if ($request['item'] === 'app') {

            $app = TutorialApp::findOrFail($id);
            $app->delete();

            $sections = TutorialSection::where('tutorial_app_id', $id)->get();

            foreach ($sections as $section) {
                TutorialVideo::where('tutorial_section_id', $section['id'])->delete();
                $section->delete();
            }

        } else if ($request['item'] === 'section') {

            $section = TutorialSection::findOrFail($id);
            $section->delete();

            TutorialVideo::where('tutorial_section_id', $id)->delete();

        } else {

            $video = TutorialVideo::findOrFail($id);
            $video->delete();

        }

        return ['message' => 'Eliminado'];
    }
}
