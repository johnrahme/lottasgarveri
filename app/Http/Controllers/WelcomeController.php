<?php

namespace App\Http\Controllers;

use App\Page;
use App;
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
    public function index($lang)
    {
        $welcome = Page::where('name', '=', 'welcome')->where('lang','=',$lang)->first();
        App::setlocale($lang);

        return view('welcome', ['page' => $welcome, 'lang' => $lang, 'active' => 'welcome']);
    }
    public function indexEn()
    {
        $welcome = Page::where('name', '=', 'welcome')->where('lang','=','en')->first();
        App::setlocale('en');

        return view('welcome', ['page' => $welcome,'lang' => 'en']);
    }
    public function edit($lang)
    {
        $welcome = Page::where('name', '=', 'welcome')->where('lang','=',$lang)->first();
        App::setlocale($lang);
        return view('welcome.edit', ['page' => $welcome,'lang'=>$lang,'active' => 'welcome']);
    }
    public function update(Request $request, $lang)
    {
        $welcome = Page::where('name', '=', 'welcome')->where('lang','=',$lang)->first();
        $welcome->content = $request->input('content');
        $welcome->save();
        return redirect('/'.$lang);
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
