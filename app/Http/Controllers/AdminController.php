<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use phpDocumentor\Reflection\Types\Boolean;

class AdminController extends BaseController{
    public function index()
    {
//      $pages = Page::where('active', '=', 1)->get();
        $texts = Text::where('is_active', '<>', 0)->get();
        return view('admin.pages.index', compact('texts'));
    }

    public function pages()
    {
        $pages = Page::where('active', '=', 1)->get();

        return view('admin.pages.pages', compact('pages'));
    }

    public function texts(Request $request)
    {
        $page = $request->get('page');
        $pages = Page::where('active', '=', 1)->get();
        if ($page!=''){
            $texts = Text::where('page_id', $page)->get();
        }else{
            $texts = Text::where('page_id', 1)->get();
        }
        return view('admin.pages.texts', compact('pages', 'texts'));
    }

    public function pageCreate(Request $request)
    {
        $page = Page::firstOrCreate([
            'name' => $request->get('name'),
            'active' => true
        ]);

        $pages = Page::where('active', '=', 1)->get();

        return view('admin.pages.pages', compact('pages'));
    }

    public function pageEdit(Request $request)
    {
        $page = Page::firstOrCreate([
            'name' => $request->get('name'),
            'active' => true
        ]);

        $pages = Page::where('active', '=', 1)->get();

        return view('admin.pages.pages', compact('pages'));
    }

    public function pageDelete(Request $request)
    {
//        $page = Page::find($request->id);
////
////        $page->delete();
////
        $pages = Page::where('active', '=', 1)->get();

        return view('admin.pages.pages', compact('pages'));
    }

    public function pageTexts(Request $request)
    {
        $page = $request->get('page');

        if ($page!=''){
            $texts = Text::where('page_id', $page)->get();
        }else{
            $texts = Text::where('page_id', 1)->get();
        }
        return $texts;
    }

    public function createText(Request $request)
    {
        $page = $request->get('page');
        $text = Text::create([
            'code' => $request->get('code'),
            'ru' => $request->get('ru'),
            'en' => $request->get('en'),
            'page_id' => $page,
            'is_active' => true
        ]);
        return $text;
    }

}
