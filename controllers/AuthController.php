<?php 
namespace App\controllers;

use App\core\Request;
use App\core\Controller;
use App\Models\User;

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
                return 'success';
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