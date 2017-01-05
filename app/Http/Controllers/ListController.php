<?php

namespace App\Http\Controllers;

use App\Page;
use App;
use Illuminate\Http\Request;

class ListController extends Controller
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
    private $pageName = 'list';
    public function index($lang)
    {
        $page = Page::where('name', '=', $this->pageName)->where('lang','=',$lang)->first();
        App::setlocale($lang);

        return view($this->pageName.'.index', ['page' => $page, 'lang' => $lang, 'active' => 'exhibitions']);
    }

    public function edit($lang)
    {
        $page = Page::where('name', '=', $this->pageName)->where('lang','=',$lang)->first();
        App::setlocale($lang);
        return view($this->pageName.'.edit', ['page' => $page,'lang'=>$lang,'active' => 'exhibitions']);
    }
    public function update(Request $request, $lang)
    {
        $page = Page::where('name', '=', $this->pageName)->where('lang','=',$lang)->first();
        $page->content = $request->input('content');
        $page->save();
        return redirect('/'.$lang.'/'.$this->pageName);
    }
}
