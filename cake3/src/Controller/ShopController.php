<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

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
    }
    public function yoyaku(){
        $this->set("headline", "<h4>予約詳細</h4>");
    }
    public function edit(){
        $this->set("headline", "<h4>弁当編集</h4>");
    }
    public function add(){
        $this->set("headline", "<h4>弁当追加</h4>");
    }


}

