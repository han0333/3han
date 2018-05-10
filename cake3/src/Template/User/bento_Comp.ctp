
    <h1 class="h1 text-center">予約確認</h1>
    <form action="user-bento-comp.html" method="post">
        <div class="row">
            <?php
            for($i=0;$i<3;$i++){
                echo '
                    <div class="col-md-4 py-1">
                        <div class="card">
                            <img class="card-img-top" src="../img/bento.jpeg" alt="Card image cap">
                            <div class="card-body">
                                <strong class="d-inline-block mb-2 text-primary">本山弁当屋さん</strong>

                                <h5 class="card-title h2">ハンバーグ弁当</h5>
                                <p class="card-text">単価¥340</p>
                                <div class="mb-1 text-muted">予約番号１</div>

                                <table>
                                    <tr>
                                        <td>1日</td>
                                        <td>4日</td>
                                        <td>5日</td>
                                    </tr>
                                </table>
                                <br>
                                <h3 class="h3">小計¥750</h3>

                            </div>
                        </div>
                    </div>
                ';
            }
            ?>
            <div class="m-5 text-right w-100">
                <h1 class="h1">合計 ¥2,250</h1>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">予約する</button>
    </form>
