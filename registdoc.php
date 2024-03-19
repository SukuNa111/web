<?php include('../datalayer/server.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Эмч</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="header">
	<h2>Эмч Бүртгэл</h2>
</div>

<form method="post" action="registdoc.php">

	<?php include ('../datalayer/errors.php'); ?>

	<div class="input-group">
		<label>Эмчийн төрөл</label>
		<input type="text" name="doccategory" >

	</div>


	<div class="input-group">
		<label>Нэр</label>
		<input type="text" name="dName" >


	</div>

	<div class="input-group">
		<label>Гэрийн хаяг</label>
		<input type="text" name="dAddress">

	</div>

	<div class="input-group">
		<label>Гар утас</label>
		<input type="text" name="dContactNumber">


	</div>


	<div class="input-group">
		<label>Цахим шуудөн</label>
		<input type="text" name="dEmail">

	</div>

	<div class="input-group">
		<label>Нууц үг</label>
		<input type="text" name="dpassword">

	</div>
   
	<div class="input-group">
		<button type="submit" name="Register" class="btn">Бүртгэл үүсгэх</button>
	</div>

	<p>
		Бүртгэл байгаа юу? <a href="login2.php">Нэвтрэх </a>
	</p>
	




</form>

</body>
</html>