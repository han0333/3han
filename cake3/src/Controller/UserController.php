<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Routing\Router;

class UserController extends AppController{

    public function initialize(){
        $this->viewBuilder()->setLayout('userLayout');

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
            "<li><a href=\"$url_c/rireki\">予約履歴</a></li>",
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
        $fab= "";
        $this->set("fab", $fab);

        //ヘッドライン
        $this->set("headline", "<h4></h4>");
        $btn_class1 = "waves-effect waves-light btn-large w-100 my-5";

        //ボタンクラス
        $this->set("btn_class1", $btn_class1);
    }
    //ログイン
    public function index(){
        $this->set("header_flag", 0);
       //ヘッドライン
    }
    //登録
    public function register(){
        $this->set("header_flag", 0);
        //ヘッドライン
        $this->set("headline", "<h4>新規登録</h4>");
    }
    //パスワードリセット
    public function reset(){
        $this->set("header_flag", 0);
        //ヘッドライン
        $this->set("headline", "<h4>パスワードリセット</h4>");
    }
    //パスワード再設定画面
    public function repassword(){
        $this->set("header_flag", 0);
        //ヘッドライン
        $this->set("headline", "<h4>パスワード再設定</h4>");
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
        //ヘッドライン
        $this->set("headline", "<h4>予約履歴</h4>");

    }
    //弁当選択
    public function bento(){
        //ヘッドライン
        $this->set("headline", "<h4>弁当一覧</h4>");

    }

    //予約
    public function yoyaku1(){
        //ヘッドライン
        $this->set("headline", "<h4>弁当予約</h4>");

    }

    //弁当予約
    public function yoyaku2(){
        //ヘッドライン
        $this->set("headline", "<h4>予約完了</h4>");

    }

}
