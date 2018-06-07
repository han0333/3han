<div class="row hoge">

<form action="<?= $url_c ?>/yoyaku3" method="post">
<?php $kekka=0; ?>
    <?php $a=0;  for($j=1;$j<=$i;$j++):?>
    <?php foreach( @${result.$j} as  $obj):?>
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
                <?=@${date.$j}?>
                日
                </p>
            </div>
            <div class="card-action">
            <?php
            $product = $obj->product_id
            ?>
            </div>
        </div>
    </div>
        <?php
        ++$a;
        $sum=$obj->price;
        $kekka=$kekka+$sum;
        $product_id=$obj->product_id;
        $lunchshop_user_id=$obj->lunchshop_user_id;
        $date = @${date.$j};

        echo '<input type="hidden" name="data'.$a.'" value='.$product_id.','.$lunchshop_user_id.','.$date.'>';
        ?>
    <?php endforeach; ?>
<?php endfor;?>
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

