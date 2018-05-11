<div class="row mx-auto">
      <form class="col s12" action="<?= $url_c ?>/register" method="post">
        <div class="row">
          <div class="input-field col s12">
            <input type="text" data-length="16" name="user_name" require>
            <label for="input_text">名前を入力してください。</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" data-length="16" name="user_mail" require>
            <label for="input_text">メールアドレスを入力してください。</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="text" data-length="16" name="user_id" require>
            <label for="input_text">IDを入力してください。</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="password" data-length="16" name="user_password" require>
            <label for="input_text">パスワードを入力してください。</label>
          </div>
        </div>

        <div class="row">
            <button class="<?= $btn_class1 ?>" type="submit">登録する</button><br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/index">ログイン画面に戻る</a>
        </div>

      </form>
</div>

<script>
            var $toastContent = $('<span>登録に成功しました。</span></span>').add($('<button class="btn-flat toast-action">Undo</button>'));
            //読み込み時実行
			$(document).ready(function(){
                <?php
                if($this->request->is('post')){
                ?>
                    Materialize.toast($toastContent, 1000);
                    
                <?php } ?>
                
            });
</script>
