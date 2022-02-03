<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Text;
use Illuminate\Http\Client\Response;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

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

    public function changeText(Request $request)
    {
        $text = Text::find($request->id);

        $text->code = $request->get('code');
        $text->ru = $request->get('ru');
        $text->en = $request->get('en');

        $text->save();

        return $text;
    }

    public function getText(Request $request)
    {
        $text = Text::find($request->id);

        return $text;
    }

    public function deleteText(Request $request)
    {
//        $text = Text::destroy($request->id);

        return ['success' => true, 'message' => 'Deleted...'];
    }

}
