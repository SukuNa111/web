<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Эмч</title>
	<link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body class="Dbody">
	<div class="Dheader">
	<h2>Эмч</h2>
</div>

<form method="post" action="login2.php" class="Dform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupD">
		<label>Региcтерийн дугаар</label>
		<input type="text" name="doctorID">

	</div>




	<div class="input-groupD">
		<label>Нууц үг</label>
		<input type="Password" name="doctorpassword">



	<div class="input-groupD">
		<button type="submit" name="Login2" class="btnD"> Нэвтрэх</button>
	</div>
	<div class="input-groupD">
		<a href="registdoc.php" class="BtnD">Бүртгүүлэх

			
		</a>
	</div>

	
	




</form>

</body>
</html>