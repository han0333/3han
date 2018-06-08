<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use cake\ORM\TableRegistry;
use Cake\Event\Event;
use Cake\Datasource\ConnectionManager;
use Cake\I18n\Time;

class UsersController extends AppController{

    public function initialize(){
        $this->viewBuilder()->setLayout('');
        parent::initialize();
        $this->loadComponent('Auth');

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
            "<li><a href=\"$url_c/select\">店舗一覧</a></li>",
            "<li><a href=\"$url_c/yoyaku\">予約履歴</a></li>",
            "<li><a href=\"$url_c/index\">ログアウト</a></li>"
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
        $this->set("fab", $fab);

        //ヘッドライン
        $this->set("headline", "<h4></h4>");
        $btn_class1 = "waves-effect waves-light btn-large w-100 my-5";

        //ボタンクラス
        $this->set("btn_class1", $btn_class1);
    }
    //ログイン
    public function index(){
        $this->Users = TableRegistry::get('Users');
        $this->Userroles = TableRegistry::get('Userroles');
        $this->viewBuilder()->setLayout('userLayout');
        $this->set("header_flag", 0);
        //ヘッドライン

        $role = $this->Userroles->find('all');
        $this->set('role',$role);
        $this->set('entity',$this->Userroles->newEntity());


        if ($this->request->is('post')) {

            $user = $this->Auth->identify();
            $this->Auth->setUser($user);
            $connection = ConnectionManager::get('default');
            $name = $this->request->session()->read('Auth');
            $id = $name['User']['user_id'];
            $sql = "SELECT role_id FROM userroles WHERE user_id = '$id' ";
            $result = $connection->execute($sql)->fetchAll('assoc');
            $rid = $result['0']['role_id'];
            if ($user) {
                if(strcmp($rid,"2") == 0){
                    $this->Auth->setUser($user);
                    return $this->redirect($this->Auth->redirectUrl());
                } else if(strcmp($rid,"1") == 0){
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'shop']);
                }
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }


    }
    //登録
    public function register(){
        $this->Users = TableRegistry::get('Users');
        $this->Userroles = TableRegistry::get('Userroles');
        $this->Customers = TableRegistry::get('Customers');
        $this->viewBuilder()->setLayout('userLayout');
        $this->set("header_flag", 0);
        //ヘッドライン
        $this->set("headline", "<h4>新規登録</h4>");
        $user = $this->Users->find('all');
        $this->set('user',$user);
        $this->set('entity',$this->Users->newEntity());

        $role = $this->Userroles->find('all');
        $this->set('role',$role);
        $this->set('entity',$this->Userroles->newEntity());

        $cus = $this->Customers->find('all');
        $this->set('cus',$cus);
        $this->set('entity',$this->Customers->newEntity());

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $n = $user->user_id;
            $select = $this->Users->find();
            $select->select(['count' => $select->func()->count('*')])->where(['user_id' => $n]);
            foreach($select as $s):
                //echo $s->count;
            endforeach;
            if ($s->count == 0) {

                $this->Users->save($user);
                //カスタマー登録

                $user = $this->Customers->newEntity($this->request->data);
                $user_id = $user->user_id;
                $user_name = $user->user_name;
                $datac = ['customer_user_id'=>$user_id,'customer_name'=>$user_name];

                $dataa = $this->Customers->newEntity($datac);

                $this->Customers->save($dataa);

                //ユーザロール登録
                $user = $this->Userroles->newEntity($this->request->data);
                $name = $user->user_id;
                $datas = ['user_id'=>$name,'role_id'=>2];

                $data = $this->Userroles->newEntity($datas);

                $this->Userroles->save($data);

                $error = 'success';
                $this->set('error',$error);
            } else {
                $error = 'error';
                $this->set('error',$error);
            }
        }
        $this->set(compact('user'));


    }

    //パスワードリセット
    public function reset(){
        $this->viewBuilder()->setLayout('userLayout');
        $this->set("header_flag", 0);
        //ヘッドライン
        $this->set("headline", "<h4>パスワードリセット</h4>");
    }
    //店舗選択
    public function select(){
        $this->viewBuilder()->setLayout('userLayout');
        //ヘッドライン
        $this->set("headline", "<h4>店舗一覧</h4>");
        $this->Shoplists = TableRegistry::get('lunchshops');
        $data=$this->Shoplists->find('all');
        $this->set('result', $data);
    }
    //予約履歴
    public function rireki(){
        $this->Orders = TableRegistry::get('Orders');
        $this->Products = TableRegistry::get('Products');
        $this->viewBuilder()->setLayout('userLayout');
        //ヘッドライン
        $this->set("headline", "<h4></h4>");
        $name = $this->request->session()->read('Auth');
        $id = $name['User']['user_id'];
        $data = $this->Orders->find('all',['conditions'=>['customer_user_id'=>$id]])->contain('Products')->order(['date' => 'DESC']);
        $this->set('data',$data);
        $this->set('entity',$this->Orders->newEntity());

        $product = $this->Products->find('all');
        $this->set('product',$product);
        $this->set('entity',$this->Products->newEntity());

        $day = Time::now('Asia/Tokyo');
        $this->set('day',$day);

        $date = Time::now('Asia/Tokyo');
        $this->set('date',$date);

        $rdate = Time::now('Asia/Tokyo');
        $this->set('rdate',$rdate);
    }


    //弁当選択
    public function bento(){
        $this->viewBuilder()->setLayout('userLayout');
        //ヘッドライン
        $this->set("headline", "<h4>弁当一覧</h4>");

        $shop_id = $this->request->data('shop_id');

        $this->products = TableRegistry::get('products');
        $data=$this->products->find()
        ->where(['lunchshop_user_id' => $shop_id])->all();
        $this->set('data', $data);

        $this->set('aaa',$this->Users->newEntity());
    }
    //弁当予約
    public function bentoComp(){
        $this->viewBuilder()->setLayout('userLayout');
        //ヘッドライン
        $this->set("headline", "<h4></h4>");

    }

    //予約
    public function yoyaku1(){
        $this->viewBuilder()->setLayout('userLayout');
        $this->users = TableRegistry::get('users');
        $this->products = TableRegistry::get('products');
        $posts = $this->request->data;
        $this->set('posts',$posts);
        $i = 0;
            foreach($posts as $val){
                $i++;
                $pieces = explode(",", $val);
                $b = $this->products->find()->where(['product_id'=>$pieces[0]])->all();
                $this->set('result'.$i,$b);
                $date = $pieces[2];
                $this->set('date'.$i,$date);
            }
            $this->set('i',$i);
        //ヘッドライン
        $bento = array();
        $this->set("headline", "<h4>弁当予約</h4>");
    }


    public function yoyaku3(){
        //ヘッドライン
        $this->set("headline", "<h4>予約完了</h4>");
        $date0 = date('Y-m');
        $posts = $this->request->data;
        $this->set('posts',$posts);
        $i = 0;
        foreach($posts as $val){
            $i++;
            $pieces = explode(",", $val);
            $product_id = $pieces[0];
            $date = $pieces[2];
            $lunchshop_user_id = $pieces[1];
            $this->users = TableRegistry::get('users');
            $name = $this->request->session()->read('Auth');
            $customer_user_id =  $name['User']['user_id'];
            $conn = ConnectionManager::get('default');
            $conn->query("
            INSERT INTO orders(`lunchshop_user_id`, `customer_user_id`, `product_id`, `date`) VALUES ('$lunchshop_user_id', '$customer_user_id', $product_id,'$date0-$date' );
            ");
        }
        $this->set('i',$i);

        return $this->resirect(['action'=>'select']);
    }

    //弁当キャンセル
    public function yoyaku2(){
        $order_id = $this->request->data('order_id');
        var_dump($order_id);
        $conn = ConnectionManager::get('default');
        $conn->query("
        DELETE FROM orders WHERE `orders`.`order_id` = $order_id
        ");

        return $this->redirect(['action'=>'rireki']);
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','register','reset']);
    }
}
