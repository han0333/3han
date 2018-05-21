<div class="row">
            <?php foreach($result  as  $obj):?>
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <?php
                    $img = base64_encode(stream_get_contents($obj->image));
                    ?>
                    <img src="data:image/png;base64,<?=$img ?>">
                    </div>
                    <div class="card-content">
                    <span class="card-title"><?=$obj->lunchshop_name?></span>
                    <p>
                    毎週火曜日、水曜日休み<br>
                    平均価格:¥320
                    <br>
                    <?=$obj->schedule?><br>
                    </p>
                    </div>
                    <div class="card-action">
                    <a href="<?= $url_c ?>/bento">弁当一覧</a>
                    </div>
                </div>
            </div>
            <?php  endforeach;  ?>
        </div>
