<div class="nav-content">
      <ul class="tabs tabs-transparent">
        <li class="tab"><a class="active" href="#now">予約受付中</a></li>
        <li class="tab"><a  href="#was">予約履歴</a></li>
      </ul>
</div>

<form action="" method="post" class="row">
<div class="input-field col s6 my-30">
  <select class="browser-default">
    <option value="" disabled selected><button type="submit">全期間</button></option>
    <option value="1"><button type="submit">2018/05/16</button></option>
    <option value="2"><button type="submit">前後１週間は出したい</button></option>
  </select>
</div>
<div class="input-field col s6 my-30">
  <select class="browser-default">
    <option value="" disabled selected><button type="submit">全弁当</button></option>
    <option value="1"><button type="submit">ハンバーグ弁当</button></option>
  </select>
</div>


</form>

<div class="row" id="now">
<form action="<?= $url_c ?>/yoyaku2" method="post">
            <?php
            for($i=0;$i<1;$i++){
            echo '
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="'.$url.'img/bento.jpeg">
                    </div>
                    <div class="card-content">
                    <span class="card-title">ハンバーグ弁当</span>
                    <p>
                    2018/05/17
                    </p>
                    <h4>¥450</h4>
                    <p>
                            本山けいた
                    </p>
                    </div>
                    <div class="card-action">
                        <p>
                        <button type="submit" class="btn">受け取りました</button>
                        <button type="submit" class="btn">キャンセル</button>
                        </p>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
            <!--
            <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
            -->
            
</form>
</div>

<div class="row" id="was">
<form action="<?= $url_c ?>/yoyaku2" method="post">
            <?php
            for($i=0;$i<3;$i++){
            echo '
            <div class="col s12 m4">
                <div class="card">
                    <div class="card-image">
                    <img src="'.$url.'img/bento.jpeg">
                    </div>
                    <div class="card-content">
                    <span class="card-title">ハンバーグ弁当</span>
                    <p>
                    2018/05/17
                    </p>
                    <h4>¥450</h4>
                    <p>
                            本山けいた
                    </p>
                    </div>
                    <div class="card-action">
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            ';
            }
            ?>
            <!--
            <button type="submit" id="yoyaku_btn" class="btn">予約する</button>
            -->
            
</form>
</div>
<!-- 
<div id="sum">
            <h2>合計：￥800</h2>
</div>
-->
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

