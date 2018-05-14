        <div class="row">
            <?php
            for($i=0;$i<8;$i++){
            echo '
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="'.$url.'img/sample.jpg">
                    </div>
                    <div class="card-content">
                    <span class="card-title">本山弁当屋さん</span>
                    <p>
                    毎週火曜日、水曜日休み<br>
                    平均価格:¥320
                    </p>
                    </div>
                    <div class="card-action">
                    <a href="'.$url_c.'/bento">弁当一覧</a>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
        </div>
