<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class ShopController extends AppController{
    
    public function initialize(){
        $this->viewBuilder()->setLayout('');
        $url = Router::url('/', true);
        $this->set("url", $url);
         
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

