<h1 class="h1 text-center">弁当一覧</h1>

<form action="shop-edit.html" method="post">

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
							</table>
							<a class="btn-primary btn-lg btn-block mt-2 text-center" href="http://0.0.0.0/cake3/Shop/edit">編集</a>
						</div>
					</div>
                </div>
                ';
                }
                ?>

    </div>
    <!-- row -->

    <a href="http://0.0.0.0/cake3/Shop/add" id="fab" class="btn btn-danger">追加する</a>
</form>
<style>
    #fab {
        position: fixed;
        bottom: 50px;
        right: 50px;
    }

</style>
