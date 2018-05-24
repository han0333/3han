<div class="row">
<form action="<?= $url_c ?>/yoyaku1" method="post">
            <?php
            for($i=0;$i<8;$i++){
            echo '
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="'.$url.'img/bento.jpeg">
                    </div>
                    <div class="card-content">
                    <span class="card-title">ハンバーグ弁当</span>
                    <p>
                    説明
                    </p>
                    <h4>¥450</h4>
                    </div>
                    <div class="card-action">
                        <p>
                            <input type="checkbox" id="test1" />
                            <label for="test1">１日</label>
                            <input type="checkbox" id="test2" />
                            <label for="test2">２日</label>
                            <input type="checkbox" id="test3" />
                            <label for="test3">３日</label>
                            <input type="checkbox" id="test4" />
                            <label for="test4">４日</label>
                            <input type="checkbox" id="test5" />
                            <label for="test5">５日</label>
                            <input type="checkbox" id="test6" />
                            <label for="test6">６日</label>
                            <input type="checkbox" id="test7" />
                            <label for="test7">７日</label>
                        </p>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
            <button type="submit" id="yoyaku_btn" class="btn">確認する</button>
</form>
</div>
<style>
    #yoyaku_btn{
        position:fixed;
        bottom:50px;
        right:50px;
    }
</style>

