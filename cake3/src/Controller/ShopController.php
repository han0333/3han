<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;
use Cake\ORM\TableRegistry;

class ShopController extends AppController{
    public function initialize(){
        $this->viewBuilder()->setLayout('shopLayout');

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
         $this->set("headline", "<h4>売上確認</h4>");
    }
    public function list(){
        $this->set("headline", "<h4>弁当一覧</h4>");
        //ベースURL
        $url = Router::url('/', true);

        //ベースURL + コントローラー名
        $controllerName = $this->name;
        $url_c = "$url"."$controllerName";

        //FAB
        $link = "$url_c"."/add";
        $fab = "<a id='fab' href='".$link."' class='btn-floating btn-large waves-effect waves-light red'>
        <i class='material-icons'>add</i></a>";
        $this->set("fab", $fab);


    
        /*
        $name = $this->request->session()->read('Auth'); 
            echo $name['lunshop_user_id']['lunchshop_name'];
        */
        

        
        $this->viewBuilder()->setLayout('shopLayout');

        //データベース受け取り
        $this->products = TableRegistry::get('products');
        $data = $this->products->find('all');
        $this->set('data',$data);

        if(!empty($this->request->data)) {
            //$name変数には「user1」が格納される
            $product_name = $this->request->data('product_name');
            $price = $this->request->data('price');  
            $image = $this->image->find('all');
            $this->set(compact('image'));
            // 以下保存ロジック
            $this->products = TableRegistry::get('products');
   
        }


        /*参考
        $this->set('Entity', $this->products->newEntity());
        if($this->request->is('post')){
            $data = $this->products->find('all',['conditions'=>[
                'article like'=>"%{$this->request->data['search']}%"]]);
        }else{
            $data = $this->products->find('all');
        }
        $data->order(['products_id'=>'DESC']);
        $this->set('data', $data);
         */




    }
    public function yoyaku(){
        $this->set("headline", "<h4>予約詳細</h4>");
    }
    
    public function edit(){
        $this->set("headline", "<h4>弁当編集</h4>");
        $this->viewBuilder()->setLayout('shopLayout');
        /*$this->set('Entity', $this->Shop->newEntity());

        $product_id = $this->set->request('product_id');
        */
        //id取得
        $this->products = TableRegistry::get('products');
        $ben_id =$_GET['id'];
        $data=$this->products->find('all') 
        ->where(['product_id' => $ben_id])->all();
        $this->set('result',$data);

    

    
             
     }
     //弁当編集機能
     public function editRecord(){
       $this->products = TableRegistry::get('products');
        if (!empty($this->request->is('post'))) {
            //$entity = $this->products->newEntity();
            $entity = $this->products->get($this->request->data['product_id']);
            $entity->product_name = $this->request->data['product_name'];
            $entity->price = $this->request->data['price'];
            $entity->image = file_get_contents($this->request->data['image']['tmp_name']);
                if($this->products->save($entity)){
                    $this->set('msg',"成功しました" . $this->request->data['image']['tmp_name']);
        //登録に成功したときの処理
                }
            }
        
        /*   try{
               $Entity = $this->products->get($this->request->data['product_id']);
               $this->products->patchEntity($Entity, $this->request->data);
               $this->products->save($Entity);
           }catch(Exception $e){
               Log::write('debug', $e->getMessage());
           }
        
      return $this->redirect(['action' => 'list']);
         */ 
    }
    

     //弁当編集削除機能
     public function delRecord(){
        if($this->request->is('post')){
            try{
                $entity = $this->products->get($this->request->data['product_id']);
                $this->products->delete($entity);
            }catch(Exception $e){
                Log::write('debug', $e->getMessage());
            }
        }
        return $this->redirect(['action' => 'list']);
    }
    
    public function add(){
        $this->set("headline", "<h4>弁当追加</h4>");
        
        $this->products = TableRegistry::get('products');

        $user_name = $this->request->session()->read('Auth');  
        $id = $user_name['User']['user_id'];
        
        if (!empty($this->request->is('post'))) {
            $entity = $this->products->newEntity();
            $entity->lunchshop_user_id = $id;
            $entity->product_name = $this->request->data['product_name'];
            $entity->price = $this->request->data['price'];

            if($this->request->data['contents']['name'] != ""){
                $entity->image = file_get_contents($this->request->data['contents']['tmp_name']);
            }   
            if($this->products->save($entity)){
                $this->set('msg',"成功しました" . $this->request->data['image']['tmp_name']);
            }
        }
    }
}        


    