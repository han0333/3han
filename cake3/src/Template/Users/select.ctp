<div class="row">
<form action="<?= $url_c ?>/bento" method="post">
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
                        <br>
                        <?=$obj->schedule?><br>
                        </p>
                    </div>
                    <div class="card-action">
                    <button type="submit" class="btn" name="shop_id" value="<?=$obj->lunchshop_user_id ?>">弁当一覧</button>
                    </div>
                </div>
            </div>
    <?php  endforeach;  ?>
</form>
</div>
