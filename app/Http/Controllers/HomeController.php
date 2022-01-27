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
use Jenssegers\Agent\Agent;
use App\Services\Common\V1\Support\FileService;

class HomeController extends BaseController
{

    public function index()
    {
        $texts = Text::where('page_id', 1)->get();
        return $this->frontPagesView('welcome', compact('texts'));
    }

    public function products()
    {
        return $this->frontPagesView('products');
    }

    public function outsource()
    {
        $texts = Text::where('page_id', 1)->get();
        return $this->frontPagesView('outsource');
    }

    public function about()
    {
        return $this->frontPagesView('about');
    }

    public function vacancies()
    {
        return $this->frontPagesView('vacancies');
    }
}
