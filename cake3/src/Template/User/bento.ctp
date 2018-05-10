
    <h1 class="h1 text-center">弁当一覧</h1>
    <form action="http://0.0.0.0/cake3/User/bentoComp" method="post">
        <div class="row mt-5">
            <?php
            for($i=0;$i<3;$i++){
            echo '
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="http://0.0.0.0/cake3/img/bento.jpeg" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">ハンバーグ弁当</h5>
                        <p class="card-text">340円</p>
                        <table>
                            <tr>
                                <td>1日</td>
                                <td>2日</td>
                                <td>3日</td>
                                <td>4日</td>
                                <td>5日</td>
                                <td>6日</td>
                                <td>7日</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                                <td>
                                    <input type="checkbox">
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
            </div>
            ';
        }
        ?>
        </div>
        <!-- row -->
        <button id="fab" class="btn btn-primary">予約する</button>
    </form>

<style>
    #fab{
        position: fixed;
        bottom:50px;
        right:50px;
    }
</style>
