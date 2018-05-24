<div class="row hoge">
<form action="<?= $url_c ?>/yoyaku2" method="post">
            <?php
            for($i=0;$i<4;$i++){
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
                    <p>
                            １日,２日
                        </p>
                    </div>
                    <div class="card-action">
                        <p>
                        <button type="submit" class="btn">キャンセル</button>
                        </p>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
            
            <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
            
</form>
</div>
<div id="sum">
            <h2>合計：￥800</h2>
</div>
<style>
    #yoyaku_btn{
        position:fixed;
        bottom:50px;
        right:50px;
    }
    .hoge{
        margin-bottom:50px;
    }
    #sum{
        width:100%!important;
        margin-bottom:50px;
        border-bottom:2px solid #000;

    }
</style>

