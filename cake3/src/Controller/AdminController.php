<?php
namespace App\Controller;

use App\Controller\AppController;

class AdminController extends AppController{
    
    public function initialize(){
        $this->viewBuilder()->setLayout('');
         
    }

    //ログイン
    public function index(){
    }
    //登録
    public function register(){
    }
    //パスワードリセット
    public function reset(){
    }
}
