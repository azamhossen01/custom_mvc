<?php 
namespace App\controllers;

use App\core\Request;
use App\core\Controller;
use App\Models\RegisterModel;

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
        $registerModel = new RegisterModel;
        if($request->isPost()){
            $registerModel->loadData($request->getBody());

            if($registerModel->validate() && $registerModel->register()){
                return 'success';
            }
            
            $this->setLayout('auth');
            return $this->render('register',[
                'model' => $registerModel
            ]);
        }
        $this->setLayout('auth');
        return $this->render('register',[
            'model' => $registerModel
        ]);
    }
}