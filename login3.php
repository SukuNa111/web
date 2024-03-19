<?php include('../datalayer/server.php') ?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style4.css">
</head>
<body class="Abody">
	<div class="Aheader">
	<h2>Admin</h2>
</div>

<form method="post" action="login3.php" class="Aform">

	<?php include ('../datalayer/errors.php')?>

	<div class="input-groupA">
		<label>Admin</label>
		<input type="text" name="adminID">

	</div>




	<div class="input-groupA">
		<label>admin</label>
		<input type="Password" name="adminpassword">



	<div class="input-groupA">
		<button type="submit" name="Login3" class="btnA">Нэвтрэх</button>
	</div>

	
	




</form>

</body>
</html>