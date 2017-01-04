<?php

namespace App\Http\Controllers;

use App\Page;
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
    public function create($id)
    {

        return view('course.create', ['active' => 'courses']);
    }

    public function edit($id)
    {
        $course = Course::find($id);
        return view('course.edit', ['course'=> $course,'active' => 'courses']);
    }
    public function delete($id)
    {
        $course = Course::find($id);
        return view('course.edit', ['course'=> $course,'active' => 'courses']);
    }
    public function update(Request $request)
    {

        return redirect('/'.$lang.'/'.$this->pageName);
    }
}
