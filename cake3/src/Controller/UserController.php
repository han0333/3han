<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use cake\ORM\TableRegistry;
use Cake\Event\Event;

class UserController extends AppController{

    public function initialize(){
        $this->viewBuilder()->setLayout('');
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
        $this->viewBuilder()->setLayout('userLayout');
        $this->set("header_flag", 0);
        //ヘッドライン
        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Invalid username or password, try again'));
        }
    }
    //登録
    public function register(){
        $this->Users = TableRegistry::get('Users');
        $this->Userroles = TableRegistry::get('Userroles');
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

        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                //ユーザロール登録
                $user = $this->Userroles->newEntity($this->request->data);
                $name = $user->user_id;
                $datas = ['user_id'=>$name,'role_id'=>2];

                $data = $this->Userroles->newEntity($datas);

                $this->Userroles->save($data);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        //$this->set('_serialize', ['user']);

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
        $data = $this->Orders->find('all')->contain('Products');
        $this->set('data',$data);
        $this->set('entity',$this->Orders->newEntity());

        $product = $this->Products->find('all');
        $this->set('product',$product);
        $this->set('entity',$this->Products->newEntity());

    }
    //弁当選択
    public function bento(){
        $this->viewBuilder()->setLayout('userLayout');
        //ヘッドライン
        $this->set("headline", "<h4>弁当一覧</h4>");

        $shop_id = $this->request->data('shop_id');
        /*
        $this->set('entity',$this->Shoplists->newEntity());
        $entity = $this->Shoplists->get($value);
        $this->set('entity',$entity);
        */

    }
    //予約
    public function yoyaku1(){
        //ヘッドライン
        $this->set("headline", "<h4>弁当予約</h4>");
        $this->Shoplists = TableRegistry::get('products');
        $data=$this->Shoplists->find('all');
        $this->set('result1', $data);
    }

    //予約キャンセル機能(画面不要)
    public function delRecord($id){
        if($id != null){
            try{
                $entity = $this->Costs->get($id);
                $this->Costs->delete($entity);
            }catch(Exception $e){
                Log::write('debug', $e->getMessage());
            }
        }
        return $this->redirect(['action' => 'index']);
	}

    //弁当予約
    public function yoyaku2(){
        //ヘッドライン
        $this->set("headline", "<h4>予約完了</h4>");

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','register','reset']);
    }
}
