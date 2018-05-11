<?php
namespace App\Controller;

use App\Controller\AppController;

class UserController extends AppController{
    
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
    //店舗選択
    public function select(){
        $this->viewBuilder()->setLayout('userLayout');
    }
    //予約履歴
    public function rireki(){
        $this->viewBuilder()->setLayout('userLayout');
    }
    //弁当選択
    public function bento(){
        $this->viewBuilder()->setLayout('userLayout');
    }
    //弁当予約
    public function bentoComp(){
        $this->viewBuilder()->setLayout('userLayout');
    }

}
