<div class="row hoge">
<form action="<?= $url_c ?>/yoyaku2" method="post">
<?php $kekka=0; ?>
    <?php foreach($result1  as  $obj):?>
    <div class="col s12 m4">
        <div class="card">
            <?php
                $img = base64_encode(stream_get_contents($obj->image));
            ?>
            <img src="data:image/png;base64,<?=$img ?>">
            <div class="card-content">
                <span class="card-title"><?=$obj->product_name?></span>
                <h4><?=$obj->price?>円</h4>
                <p>
                受け取り予定日
                </p>
            </div>
            <div class="card-action">
            <?php
            $obj->product_id
            ?>
                <p>
                <button type="submit" name="action" class="btn">キャンセル</button>
                </p>
            </div>
        </div>
    </div>
        <?php
        $sum=$obj->price;
        $kekka=$kekka+$sum;
        ?>
    <?php  endforeach;  ?>
    <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
</form>
</div>
<div id="sum">
<h4>合計：<?=$kekka?>円</h4>
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

