<div class="row card mx-auto" id="login">
    <h4>ログインしてください。</h4>
    <?= $this->Flash->render() ?>
      <form class="col s12"  method="post">
        <div class="row">
          <div class="input-field col s12">
            <input type="text" data-length="16" name="user_id" require>
            <label for="input_text">IDを入力してください。</label>
          </div>
        </div>

        <div class="row">
          <div class="input-field col s12">
            <input type="password" data-length="16" name="password" require>
            <label for="input_text">パスワードを入力してください。</label>
          </div>
        </div>

        <div class="row">
            <button class="<?= $btn_class1 ?>">ログイン</button><br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/register">新規登録</a><br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/reset">パスワードリセット</a>
        </div>

      </form>
</div>
<style>
.card{
    padding:15px;
}
</style>
