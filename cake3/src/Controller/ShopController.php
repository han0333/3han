<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\Event\Event;
use cake\ORM\TableRegistry;
use Cake\I18n\Time;
use Cake\Datasource\ConnectionManager;

class ShopController extends AppController{

    public function initialize(){
        $this->viewBuilder()->setLayout('');
        parent::initialize();
        $url = Router::url('/', true);
        $this->set("url", $url);

    }

    public function index(){
        $this->Orders = TableRegistry::get('Orders');
        $this->Products = TableRegistry::get('Products');
        $this->viewBuilder()->setLayout('shopLayout');

        $name = $this->request->session()->read('Auth');
        $id = $name['User']['user_id'];
        $order = $this->Orders->find('all',['conditions'=>['Orders.lunchshop_user_id'=>$id]])->contain('Products')->group('Orders.product_id');
        //$order->select(['count' => $order->func()->sum('number'),'Orders.product_id','Orders.date','Products.price','Products.product_name'])->group('Orders.product_id');
        $this->set('order',$order);
        $this->set('entity',$this->Orders->newEntity());


        $connection = ConnectionManager::get('default');
        $con = "SELECT products.product_name,count(*) * products.price as sale FROM orders LEFT JOIN products ON orders.product_id = products.product_id WHERE orders.lunchshop_user_id = '$id' GROUP BY orders.product_id";
        $count = $connection->execute($con)->fetchAll('assoc');
        $this->set('count',$count);



        $product = $this->Products->find('all');
        $this->set('product',$product);
        $this->set('entity',$this->Products->newEntity());

        $date = Time::now('Asia/Tokyo');
        $this->set('date',$date);


        if($_POST) {
        $y = $_POST['year'];
        $m = $_POST['month'];
        $d = $_POST['day'];

        $connection = ConnectionManager::get('default');
        $sql = "SELECT products.product_name,count(*) * products.price AS sale FROM orders left outer join products on orders.product_id = products.product_id WHERE date = '$y-$m-$d' and orders.lunchshop_user_id = '$id' GROUP BY orders.product_id  ";
        $result = $connection->execute($sql)->fetchAll('assoc');
        $this->set('result',$result);


        }

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

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->deny();
    }


}

