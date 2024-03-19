<?php include('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Өвчтөн</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Өвчтөн Бүртгэл</h2>
</div>

<form method="post" action="regist.php">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>Регистерийн дугаар</label>
		<input type="text" name="UserID" >

	</div>


	<div class="input-group">
		<label>Нэр</label>
		<input type="text" name="Name" >


	</div>

	<div class="input-group">
		<label>Гэрийн хаяг</label>
		<input type="text" name="Address">

	</div>

	<div class="input-group">
		<label>Гар утас</label>
		<input type="text" name="ContactNumber">


	</div>


	<div class="input-group">
		<label>Цахим шуудөн</label>
		<input type="text" name="Email">

	</div>

	<div class="input-group">
		<label>Нууц үг</label>
		<input type="text" name="password">

	</div>

	<div class="input-group">
		<label>Цусны бүлэг</label>
		<input type="text" name="bloodtype">

	</div>
   

	<div class="input-group">
		<button type="submit" name="Register" class="btn">Бүртгэл үүсгэх</button>
	</div>

	<p>
		Бүртгэл байгаа юу? <a href="login.php">Нэвтрэх </a>
	</p>
	




</form>

</body>
</html>