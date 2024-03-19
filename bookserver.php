<?php  

$errors=array();
include ('server.php');

$mysqli = new mysqli("localhost","root","","hospital");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}


if (isset($_POST['Book'])) {

	



	$AppoID = 	$mysqli -> real_escape_string($_POST['AppoID']);
	$Date 	=	 $mysqli -> real_escape_string($_POST['Date']);
	$Time 	= 	$mysqli -> real_escape_string($_POST['Time']);
	
	if (empty($AppoID)) {
	array_push($errors,"Vzlegiin Id oruul");
}

if (empty($Date)) {
	array_push($errors,"Ognoo oruul");
	
}


if (empty($Time)) {
	array_push($errors,"Tsag oruul");

}


if(count($errors)==0){


    $docID = $_REQUEST['docID'];
	$sql = "INSERT INTO  bookapp (AppoID, Date, Time, patientID,docID) VALUES ('$AppoID','$Date','$Time','$userprofile','$docID') ";
	$result99=$mysqli ->query($sql);

		if ($result99) {
  printf("%d ok .\n", $mysqli->affected_rows);


 

}

	elseif (!$mysqli -> query($sql)) {
  printf("%d ene tsagt bolomjgui.\n", $mysqli->affected_rows);
	 } 
	  $_SESSION['AppoID']=$AppoID;
  $_SESSION['success']="ok";
  header('location:book.php');


 

}

}



if (isset($_POST['cancel'])) {

		$AppoID2 =$mysqli -> real_escape_string($_POST['AppoID2']);

	if (empty($AppoID2)) {
	array_push($errors,"Vzlegiin id orrul");
}
 if (count($errors)==0) {
 




	$query5="DELETE FROM bookapp WHERE AppoID='$AppoID2' AND patientID=('$userprofile') ";
	if ($mysqli -> query($query5)) {

		if ($mysqli->affected_rows==0) {
			 array_push($errors,"vzlgiin id buruu");
			
			# code...
		}
		



	}
	  else {
	  
	  echo 'Tsutslagdlaa';
	  


	  }

	 	
	




}
}


if (isset($_POST['Add'])) {

	



	$addID 				= $mysqli -> real_escape_string($_POST['addID']);
	$addname 			= $mysqli -> real_escape_string($_POST['addname']);
	$addAddress 		= $mysqli -> real_escape_string($_POST['addAddress']);
	$addContactNumber	= $mysqli -> real_escape_string($_POST['addContactNumber']);
	$addEmail 			= $mysqli -> real_escape_string($_POST['addEmail']);
	$addPassword 		= $mysqli -> real_escape_string($_POST['addpassword']);





	if (empty($addID)) {
	array_push($errors,"ID oruul");
	# code...
}

if (empty($addname)) {
	array_push($errors,"emchiin ner oruul");
	# code...
}


if (empty($addAddress)) {
	array_push($errors,"Hayg oruul");
	# code...
}

if (empty($addContactNumber)) {
	array_push($errors,"Gar utasnii dugaar oruul");
	# code...
}


if (empty($addEmail)) {
	array_push($errors,"Email oruul");
	# code...
}

if (empty($addPassword)) {
	array_push($errors,"Password oruul");
}
if(count($errors)==0){

		$addcategory = $_REQUEST['addcategory'];


	$sqladd = "INSERT INTO  doctor (DoctorID, Doctorname, email, Address, ContactNumber, password,categorey) 
	VALUES ('$addID','$addname','$addEmail','$addAddress','$addContactNumber','$addPassword','$addcategory') ";

	if ($mysqli -> query($sqladd)) {
  printf("%d Row inserted.\n", $mysqli->affected_rows);
}


  $_SESSION['addID']=$addID;
  $_SESSION['success']="newtrelt ok";
  header('location:index3.php');

}
}

?>




