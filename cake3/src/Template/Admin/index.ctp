<!doctype html>
<html lang="ja">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

	<title>ログイン</title>
</head>

<body class="text-center">
	<form class="form-signin" action="http://0.0.0.0/cake3/User/select" method="post">
		<h1 class="h3 mb-3 font-weight-normal">管理画面</h1></h1>
		<label for="inputEmail" class="sr-only">ID</label>
		<input type="text" id="inputEmail" class="form-control" placeholder="ID" required autofocus>
		<label for="inputPassword" class="sr-only">パスワード</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="パスワード" required>
		<div class="checkbox mb-3">
			<label>
                    <input type="checkbox" value="remember-me"> パスワードを記録する
                </label>
		</div>
		<button class="btn btn-lg btn-danger btn-block" type="submit">ログイン</button>
		<a class="btn btn-lg btn-danger btn-block" href="http://0.0.0.0/cake3/Admin/reset">パスワードリセット</a>
		<p class="mt-5 mb-3 text-muted">&copy; 2018</p>
	</form>
</body>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

</html>
<style>
	html,
	body {
		height: 100%;
	}

	body {
		display: -ms-flexbox;
		display: flex;
		-ms-flex-align: center;
		align-items: center;
		padding-top: 40px;
		padding-bottom: 40px;
		background-color: #f5f5f5;
	}

	.form-signin {
		width: 100%;
		max-width: 330px;
		padding: 0px;
		margin: auto;
	}

	.form-signin .checkbox {
		font-weight: 400;
	}

	.form-signin .form-control {
		position: relative;
		box-sizing: border-box;
		height: auto;
		padding: 10px;
		font-size: 16px;
	}

	.form-signin .form-control:focus {
		z-index: 2;
	}

	.form-signin input[type="email"] {
		margin-bottom: -1px;
		border-bottom-right-radius: 0;
		border-bottom-left-radius: 0;
	}

	.form-signin input[type="password"] {
		margin-bottom: 10px;
		border-top-left-radius: 0;
		border-top-right-radius: 0;
	}
</style>
