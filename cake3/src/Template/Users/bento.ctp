<div class="row">
<form name="aaa" action="<?= $url_c ?>/yoyaku1" method="post">
    <?php
    $j = 1;
    foreach($data  as  $obj):?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <?php
                        $img = base64_encode(stream_get_contents($obj->image));
                    ?>
                    <img src="data:image/png;base64,<?=$img ?>">
                    </div>
                    <div class="card-content">
                    <span class="card-title"><?=$obj->product_name?></span>
                    <h4><?=$obj->price?>円</h4>
                    <?php
                    $d = (int)date('t');
                    $date0 =  (int)date("d",strtotime("$obj->cancel_limit day"));
                    $date = array();
                    for($i = 0 ; $i < 7; $i++){ //繰り返す回数はdateに入ってる要素数
                        if($date0 <= $d ){
                            $date[$i] = $date0;
                            $date0++;
                        } else {
                            $date0=1;
                            $date[$i] = $date0;
                            $date0++;
                        }
                    }
                    ?>
                    </div>
                    <?php
                    $lunchshop_user_id=$obj->lunchshop_user_id;
                    $product_id = $obj->product_id;
                    ?>
                    <div class="card-action">
                        <p>予約受付日</p>
                        <p>
                        <?php
                        for($m=0;$m<7;$m++){
                            echo
                            "<input type='checkbox' id='test"
                            .$j.
                            "' name='".$j."' value='".$product_id.",".$lunchshop_user_id.",".$date[$m]."'".$j."'>
                            <label for='test"
                            .$j.
                            "'>"
                            .$date[$m].
                            "日</label>";
                            $j++;
                        }
                        ?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <button type="submit" id="yoyaku_btn" class="btn" >確認する</button>

</form>
</div>
<style>
    #yoyaku_btn{
        position:fixed;
        bottom:50px;
        right:50px;
    }
</style>

