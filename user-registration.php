<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>АУДИОКАР73</title>
	<link rel="stylesheet" href="libraries/normalize/normalize.css">
	<link rel="stylesheet" href="libraries/bootstrap-3.3.7-dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" href="libraries/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="block">
		<div class="top topRegistration">
			<header>
				<?php
					include 'views/header.html';
				?>
			</header>
			<div class="container containerRegistration">
				<main class="boxRegistration">
					<form class="formRegistration" action="#" method="post">
						<h1>РЕГИСТРАЦИЯ</h1>
						<input type="email" name="email" id="">
						<input type="password" name="password" id="">
						<input type="password" name="repassword" id="">
						<p>Подтвердите, что Вы не робот</p>
						<input type="text" name="captcha" id="">
					</form>
				</main>
			</div>	
		</div>
		<footer>
			<?php
				include 'views/footer.html';
			?>
		</footer>
	</div>
<script src="libraries/jquery-3.3.1/jquery-3.3.1.js"></script>
<script src="libraries/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
</html>