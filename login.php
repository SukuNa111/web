<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Өвчтөн</title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
	<div class="header">
	<h2>Хэрэглэгч</h2>
</div>


<form method="post" action="login.php">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-group">
		<label>Регистерийн дугаар</label>
		<input type="text" name="UserID">

	</div>
	




	<div class="input-group">
		<label>Нууц үг</label>
		<input type="Password" name="password">



	<div class="input-group">
		<button type="submit" name="Login" class="btn"> Нэвтрэх</button>
	</div>

	<p>
		Бүртгэл байхгүй юу? <a href="regist.php">Бүртгэл үүсгэх</a>
	</p>

</form>
</body>
<footer>
</footer>
</html>


