<?php 

namespace App\controllers;

use App\core\Request;
use App\core\Controller;
use App\core\Application;

class SiteController extends Controller
{

    public function home()
    {
        $params = [
            'name' => 'Azam Hossen'
        ];
        return $this->render('home',$params);
        // return Application::$app->router->renderView('home',$params);
    }

    public function contact()
    {
        return $this->render('contact');
    }

    public function handleContact(Request $request)
    {
        var_dump($request->getBody());
    }
}