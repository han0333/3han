<!doctype html>
<html lang="ja">

	<head>
		
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<!-- Required meta tags -->
        <meta charset="utf-8">
        <title><?= $title ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- jquery -->
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="<?= $url ?>js/init.js"></script>

		<!-- materialize -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
        
        <link rel="stylesheet" href="<?= $url ?>css/style.css">
		
		<script>
            //読み込み時実行
			$(document).ready(function(){
                //初期化
				$('.modal').modal();
                //navberの有無
                <?php
                if($header_flag == 0){
                    echo "$('#header').hide()";
                }
                ?>
			});
		</script>

	</head>

	<body>
        <!-- navber -->
		<nav id="header" class="<?= $color ?>">
			<div class="nav-wrapper">
				<a href="<?= $url_c ?>/select" id="logo" class="brand-logo"><?= $title ?></a>
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
                    <?php
                    foreach($nav_list as $value){
                        echo "$value";
                    }
                    ?>
				</ul>
				<ul class="side-nav" id="mobile-demo">
					<?php
                    foreach($nav_list as $value){
                        echo "$value";
                    }
                    ?>
				</ul>
			</div>
        </nav>
        
        <div class="container my-30">
            <?= $headline ?>
            <?= $this->fetch('content')?>
        </div>

        <?= $fab; //フローティングアクションボタン ?>
        
        <!-- Modal Structure -->
        <!--
		<div id="modal1" class="modal modal-fixed-footer">
			<div class="modal-content">
				<h4>Modal Header</h4>
				<p>A bunch of text</p>
			</div>
			<div class="modal-footer">
				<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Agree</a>
			</div>
        </div>
        -->
	</body>

</html>

