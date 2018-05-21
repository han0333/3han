<div class="row mx-auto">
    <form class="col s12" action="<?= $url_c ?>/edit" method="post">

        <div class="row">
            <div class="input-field col s12">
                <input type="text" data-length="32" name="" require value="ハンバーグ弁当">
                <label for="input_text">弁当名</label>
            </div>
            <div class="input-field col s12">
                <input type="text" data-length="200" name="" require value="美味しいです">
                <label for="input_text">説明</label>
            </div>
            <div class="input-field col s12">
                <input type="number" name="" require value="340">
                <label for="input_text">価格</label>
            </div>
            <div class="input-field col s12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>画像選択</span>
                        <input type="file">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text">
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <button class="<?= $btn_class1 ?>" type="submit">編集する</button>
            <br>
            <button class="<?= $btn_class1 ?>" type="button">削除する</button>
            <br>
            <a class="<?= $btn_class1 ?>" href="<?= $url_c ?>/list">弁当一覧に戻る</a>
        </div>
    </form>
</div>

<script>
    var $toastContent = $('<span>編集が完了しました。</span>');
    //読み込み時実行
    $(document).ready(function () {
        <?php
                if($this->request->is('post')){
                ?>
        Materialize.toast($toastContent, 1500);

        <?php } ?>

    });

</script>

