<div class="row mx-auto">
      <form class="col s12" action="<?= $url_c ?>/repassword" method="post">

        <div class="row">
          <p>
              新しいパスワードを設定してください。
          </p>
          <div class="input-field col s12">
            <input type="password" data-length="16" name="user_mail" require>
            <label for="input_text">新しいパスワード</label>
          </div>
          <div class="input-field col s12">
            <input type="password" data-length="16" name="user_mail" require>
            <label for="input_text">再入力</label>
          </div>
        </div>

        <div class="row">
            <button class="<?= $btn_class1 ?>" type="submit">登録する</button><br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/index">ログイン画面に戻る</a>
        </div>

      </form>
</div>

<script>
            var $toastContent = $('<span>登録が完了しました。</span>');
            //読み込み時実行
			$(document).ready(function(){
                <?php
                if($this->request->is('post')){
                ?>
                    Materialize.toast($toastContent, 1500);
                    
                <?php } ?>
                
            });
</script>
