<?php

namespace App\Http\Controllers;

use App\Page;
use App\Course;
use App;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function view($id)
    {


        return view('course.view', ['active' => 'courses']);
    }
    public function create()
    {

        return view('course.create', ['active' => 'courses']);
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit', ['course'=> $course,'active' => 'courses']);
    }

    public function store(Request $request)
    {
        //$id = $request->input('id');

        //$course = Course::find($id);
        $course = new Course();
        $course->content = $request->input('content');
        $course->en_content = $request->input('en_content');
        $course->name = $request->input('name');
        $course->en_name = $request->input('en_name');
        $course->location = $request->input('location');
        $course->start_time = $request->input('start_time');
        $course->end_time = $request->input('end_time');
        $online = $request->input('online');
        if($request->exists('online')){
            $course->online = 1;
        }
        else{
            $course->online = 0;
        }

        if ($request->hasFile('pdf') && $request->file('pdf')->isValid()){
            $imgName = $request->file('pdf')->getClientOriginalName();
            //$imgExtension = Input::file('image')->getClientOriginalExtension();
            $saveName = microtime() . '_' . $imgName;
            $folder = 'pdf';
            $request->file('pdf')->move($folder, $saveName);
            $URL = url('/') . "/" . $folder . "/" . $saveName;
            $course->pdf_url = $URL;
        }
        else{
            $course->pdf_url = 'not set';
        }
        $course->save();

        return redirect('/se');
    }
    public function update(Request $request)
    {
        $id = $request->input('id');

        $course = Course::find($id);
        $course->content = $request->input('content');
        $course->en_content = $request->input('en_content');
        $course->name = $request->input('name');
        $course->en_name = $request->input('en_name');
        $course->location = $request->input('location');
        $course->start_time = $request->input('start_time');
        $course->end_time = $request->input('end_time');
        $online = $request->input('online');
        if ($request->exists('online')) {
            $course->online = 1;
        } else {
            $course->online = 0;
        }

        if ($request->hasFile('pdf') && $request->file('pdf')->isValid()){
            $imgName = $request->file('pdf')->getClientOriginalName();
            //$imgExtension = Input::file('image')->getClientOriginalExtension();
            $saveName = microtime() . '_' . $imgName;
            $folder = 'pdf';
            $request->file('pdf')->move($folder, $saveName);
            $URL = url('/') . "/" . $folder . "/" . $saveName;
            $course->pdf_url = $URL;
        }
        $course->save();

        return redirect('/se');
    }
    public function delete($id)
    {
        $course = Course::find($id);
        $course->delete();
        return redirect('/se/courses');
    }
}
