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
        //$this->viewBuilder()->setLayout('');
        parent::initialize();

        //ベースURL
        $url = Router::url('/', true);
        $this->set("url", $url);

        //ベースURL + コントローラー名
        $controllerName = $this->name;
        $url_c = "$url"."$controllerName";
        $this->set("url_c", $url_c);

        //タイトルセット
        $this->set("title", "弁当予約システム");

        //ナビ項目セット
        $nav_list = array(
            "<li><a href=\"$url_c/\">売上確認</a></li>",
            "<li><a href=\"$url_c/list\">弁当一覧</a></li>",
            "<li><a href=\"$url_c/yoyaku\">予約確認</a></li>",
            "<li><a href=\"$url/User/index\">ログアウト</a></li>"
        );
        $this->set("nav_list", $nav_list);

        //ヘッダーの有無　デフォルト”１”で表示
        $this->set("header_flag", 1);

        //ヘッダーカラー
        $this->set("color", "teal lighten-2");

        //FAB
        $link = "";
        $fab = "<a id='fab' fref='".$link."' class='btn-floating btn-large waves-effect waves-light red'>
        <i class='material-icons'>add</i></a>";
        $fab= "";
        $this->set("fab", $fab);

        //ヘッドライン
        $this->set("headline", "<h4></h4>");
        $btn_class1 = "waves-effect waves-light btn-large w-100 my-5";

        //ボタンクラス
        $this->set("btn_class1", $btn_class1);

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

        $d = Time::now('Asia/Tokyo');
        $this->set('d',$d);


        if($_POST) {
        $y = $_POST['year'];
        $m = $_POST['month'];
        $d = $_POST['day'];

        $connection = ConnectionManager::get('default');
        $sql = "SELECT products.product_name,count(*) * products.price AS sale FROM orders left outer join products on orders.product_id = products.product_id WHERE date = '$y-$m-$d' and orders.lunchshop_user_id = '$id' GROUP BY orders.product_id  ";
        $result = $connection->execute($sql)->fetchAll('assoc');
        $this->set('result',$result);

        $connection = ConnectionManager::get('default');
        $sql = "SELECT orders.date,count(*) * products.price as datesale FROM orders left join products on orders.product_id = products.product_id WHERE orders.lunchshop_user_id = '$id' GROUP BY orders.date ";
        $datesale = $connection->execute($sql)->fetchAll('assoc');
        $this->set('datesale',$datesale);


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

