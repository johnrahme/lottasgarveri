<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class WelcomeController extends Controller
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
    public function index()
    {
        $welcome = Page::where('name', '=', 'welcome')->first();


        return view('welcome', ['page' => $welcome]);
    }
    public function edit()
    {
        $welcome = Page::where('name', '=', 'welcome')->first();
        return view('welcome.edit', ['page' => $welcome]);
    }
    public function update(Request $request)
    {
        $welcome = Page::where('name', '=', 'welcome')->first();
        $welcome->content = $request->input('content');
        $welcome->save();
        return redirect('/');
    }
    public function imgStore(Request $request){
        $imgName = $request->file('image')->getClientOriginalName();
        //$imgExtension = Input::file('image')->getClientOriginalExtension();
        $saveName = microtime() . '_' . $imgName;
        $folder = $request->input('folder');
        $request->file('image')->move($folder, $saveName);
        $URL = url('/')."/".$folder ."/" . $saveName;
        echo $URL;
    }
}
