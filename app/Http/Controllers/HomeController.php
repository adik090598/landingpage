<?php

namespace App\Http\Controllers;

use App\Exceptions\Web\WebServiceExplainedException;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Web\WebBaseController;
use App\Http\Forms\Web\V1\QuizWebForm;
use App\Http\Forms\Web\V1\UserWebForm;
use App\Models\Entities\Category;
use App\Models\Entities\Quiz;
use App\Models\Entities\Core\User;
use App\Models\Entities\Setting;
use App\Models\Text;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\View;
use Jenssegers\Agent\Agent;
use App\Services\Common\V1\Support\FileService;

class HomeController extends BaseController
{

    public function index()
    {
        $texts = Text::where('page_id', 1)->get();
        $data = HomeController::modelToArray($texts);

        return View::make('welcome', compact('data'));
    }

    public function products()
    {
        return View::make('products', compact('data'));
    }

    public function outsource()
    {
        $texts = Text::where('page_id', 2)->get();
        $data = HomeController::modelToArray($texts);
        return View::make('outsourcing', compact('data'));
    }

    public function about()
    {
        $texts = Text::where('page_id', 3)->get();
        $data = HomeController::modelToArray($texts);

        return View::make('about', compact('data'));
    }

    public function vacancies()
    {
        $texts = Text::where('page_id', 4)->get();
        $data = HomeController::modelToArray($texts);
        return View::make('vacancies', compact('data'));
    }

    public function modelToArray($objects){
        $lang = app()->getLocale();
        $data = array();

        foreach($objects as $object) {
            $data[$object->code] = $object;
            if ($lang=='en'){
                $data[$object->code]->text = $object->en;
            } else if($lang=='ru'){
                $data[$object->code]->text = $object->ru;
            }
        }
        return $data;
    }
}
