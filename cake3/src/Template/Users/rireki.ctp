<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#now">予約中</a></li>
        <li class="tab"><a  href="#was">予約履歴</a></li>
      </ul>
</div>

<form method="get" class="row" name="formItem">
<div class="input-field col s6 my-30">
  <select class="browser-default" onchange="submit(this.form)" name="cc">
  <option value="" disabled selected>全期間</option>
    <?php
    $day = $day->modify('-7 days');
    for($i=-7;$i<=7;$i++) {
        if ($i != -7){
            $day = $day->modify('+1 days');
        }
        echo '<option value="'.$i.'">'.$day->format('Y/m/d').'</option>';
    } ?>
  </select>
</div>
<!--<div class="input-field col s6 my-30">
  <select class="browser-default">
    <option value="" disabled selected><button type="submit">全弁当</button></option>
    <option value="1"><button type="submit"><?=$obj->product->product_name ?></button></option>
  </select>
</div>-->


</form>



<div class="row" id="now">
<form action="<?= $url_c ?>/yoyaku2" method="post">
            <?php
            if ($_GET){
                $rdate = $rdate->modify('+'.$_GET['cc'].'days');
                foreach ($data as $obj):
                    $time = $obj->date;
                    if ($rdate->format('Y/m/d') == $obj->date && $date->format('Y/m/d') < $obj->date){
                    echo '
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                <img src="'.$url.'img/bento.jpeg">
                                </div>
                                <div class="card-content">
                                <span class="card-title">'.$obj->product->product_name.'</span>
                                <p>
                                '.$obj->date.'
                                </p>
                                <h4>¥'.$obj->product->price.'</h4>
                                </div>
                                <div class="card-action">';
                                    if($date <= $time->modify('-'.$obj->product->cancel_limit.'days')){
                                    echo '<p>';
                                    echo '<button type="submit" class="btn" name="order_id" value='.$obj->order_id.'>キャンセル</button>';
                                    echo '</p>';
                                    echo $time->modify('-'.$obj->product->cancel_limit.'days'),'までキャンセル可能です。';
                                    }
                                echo '
                                </div>
                            </div>
                        </div>
                        ';
                    }
                endforeach;
            } else {
                foreach ($data as $obj):
                $time = $obj->date;
                if ($date->format('Y/m/d') < $obj->date){
                echo '
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                            <img src="'.$url.'img/bento.jpeg">
                            </div>
                            <div class="card-content">
                            <span class="card-title">'.$obj->product->product_name.'</span>
                            <p>
                            '.$obj->date.'
                            </p>
                            <h4>¥'.$obj->product->price.'</h4>
                            </div>
                            <div class="card-action">';
                                if($date <= $time->modify('-'.$obj->product->cancel_limit.'days')){
                                echo '<p>';
                                echo '<button type="submit" class="btn" name="order_id" value='.$obj->order_id.'>キャンセル</button>';
                                echo '</p>';
                                echo $time->modify('-'.$obj->product->cancel_limit.'days'),'までキャンセル可能です。';
                                }
                            echo '
                            </div>
                        </div>
                    </div>
                    ';

                }
                endforeach;
             } ?>
            <!--
            <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
            -->

</form>
</div>

<div class="row" id="was">
<form action="<?= $url_c ?>/yoyaku2" method="post">
            <?php
            if ($_GET){
                foreach ($data as $obj):
                    if ($rdate->format('Y/m/d') == $obj->date && $date->format('Y/m/d') > $obj->date){
                    echo '
                        <div class="col s12 m4">
                            <div class="card">
                                <div class="card-image">
                                <img src="'.$url.'img/bento.jpeg">
                                </div>
                                <div class="card-content">
                                <span class="card-title">'.$obj->product->product_name.'</span>
                                <p>
                                '.$obj->date.'
                                </p>
                                <h4>¥'.$obj->product->price.'</h4>
                                </div>
                                <div class="card-action">';
                                echo '
                                </div>
                            </div>
                        </div>
                        ';
                    }
                endforeach;
            } else {
                foreach ($data as $obj):
                $time = $obj->date;
                if ($date->format('Y/m/d') > $obj->date){
                echo '
                    <div class="col s12 m4">
                        <div class="card">
                            <div class="card-image">
                            <img src="'.$url.'img/bento.jpeg">
                            </div>
                            <div class="card-content">
                            <span class="card-title">'.$obj->product->product_name.'</span>
                            <p>
                            '.$obj->date.'
                            </p>
                            <h4>¥'.$obj->product->price.'</h4>
                            </div>
                            <div class="card-action">';
                            echo '
                            </div>
                        </div>
                    </div>
                    ';

                }
                endforeach;
             } ?>
            <!--
            <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
            -->

</form>
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
    .tab a{
        color:rgba(238,110,115,1)!important;
    }
    .tab a:hover{
        color:rgba(238,110,115,0.6)!important;
    }
</style>

