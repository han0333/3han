<div class="row mx-auto">
      <form class="col s12" action="<?= $url_c ?>/reset" method="post">

        <div class="row">
          <p>
              リセットメールを送信します。
          </p>
          <div class="input-field col s12">
            <input type="text" data-length="16" name="user_mail" require>
            <label for="input_text">登録メールアドレスを入力してください。</label>
          </div>
        </div>

        <div class="row">
            <button class="<?= $btn_class1 ?>" type="submit">リセットメールを送る</button><br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/index">ログイン画面に戻る</a>
        </div>

      </form>
</div>

<script>
            var $toastContent = $('<span>メールを送信しました。</span>');
            //読み込み時実行
			$(document).ready(function(){
                <?php
                if($this->request->is('post')){
                ?>
                    Materialize.toast($toastContent, 1500);
                    
                <?php } ?>
                
            });
</script>
