<?php
namespace App\Controller;

use App\Controller\AppController;

class ShopController extends AppController{
    
    public function initialize(){
        $this->viewBuilder()->setLayout('');
         
    }

    public function index(){
        $this->viewBuilder()->setLayout('shopLayout');
    }
    public function list(){
        $this->viewBuilder()->setLayout('shopLayout');
    }
    public function yoyaku(){
        $this->viewBuilder()->setLayout('shopLayout');
    }
    public function edit(){
        $this->viewBuilder()->setLayout('shopLayout');
    }
    public function add(){
        $this->viewBuilder()->setLayout('shopLayout');
    }


}

