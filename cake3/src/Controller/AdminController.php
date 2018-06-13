<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class AdminController extends AppController{
    
    public function initialize(){
        $this->viewBuilder()->setLayout('');
        $url = Router::url('/', true);
        $this->set("url", $url);
         
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