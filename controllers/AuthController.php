<?php 
namespace App\controllers;

use App\Models\User;
use App\core\Request;
use App\core\Controller;
use App\core\Application;

class AuthController extends Controller 
{
    public function login(Request $request)
    {
        if($request->isPost()){
            var_dump($request->getBody());
        }
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $User = new User;
        if($request->isPost()){
            $User->loadData($request->getBody());
           
            if($User->validate() && $User->save()){
                Application::$app->session->setFlash('success','Thanks for registering');
                return Application::$app->response->redirect('/');
            }
            
            $this->setLayout('auth');
            return $this->render('register',[
                'model' => $User
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $User
        ]);
    }
}