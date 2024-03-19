<?php 


session_start();
$errors=array();

$mysqli = new mysqli("localhost","root","","hospital");

if ($mysqli -> connect_errno) {
  echo "Holboltiin aldaa: " . $mysqli -> connect_error;
  exit();
}




if (isset($_POST['Register'])) {

	



	$UserID 	= $mysqli -> real_escape_string($_POST['dUserID']);
	$Username 	= $mysqli -> real_escape_string($_POST['dName']);
	$Address 	= $mysqli -> real_escape_string($_POST['dAddress']);
	$ContactNumber	 = $mysqli -> real_escape_string($_POST['dContactNumber']);
	$Email 		=  $mysqli -> real_escape_string($_POST['dEmail']);
	$Password 	= $mysqli -> real_escape_string($_POST['dpassword']);
	$bloodtype 	= $mysqli -> real_escape_string($_POST['dbloodtype']);
    
   




	if (empty($UserID)) {
	array_push($errors,"Id oruul");

}

if (empty($Username)) {
	array_push($errors,"Ner oruul");

}


if (empty($Address)) {
	array_push($errors,"Hayg oruul");
	
}

if (empty($ContactNumber)) {
	array_push($errors,"Gar utasnii dugaar oruul");

}


if (empty($Email)) {
	array_push($errors,"Email oruul");

}

if (empty($Password)) {
	array_push($errors,"Password oruul");

}

if (empty($bloodtype)) {
	array_push($errors,"Tsusnii turul oriuul");
	
}







if(count($errors)==0){


	$Password=md5($Password);

	$sql = "INSERT INTO  patients (UserID, Name, Address, ContactNumber, Email, Password, Bloodtype)
	 VALUES ('$UserID','$Username','$Address','$ContactNumber','$Email','$Password','$bloodtype') ";
    
   


	if (!$mysqli -> query($sql)) {
  printf("%d mur oruulah.\n", $mysqli->affected_rows);
    
}



  $_SESSION['UserID']=$UserID;
  $_SESSION['success']="newtrelt amjilttai";
  header('location:../acc/patient/index.php');


}

}




if (isset($_POST['Login'])) {

		$UserID 	= $mysqli -> real_escape_string($_POST['UserID']);
		$Password 	= $mysqli -> real_escape_string($_POST['password']);
if (empty($UserID)) {
	array_push($errors,"ID oruul");
	# code...
}
if (empty($Password)) {
	array_push($errors,"Password oruul");
	

		# code...
	}


	if (count ($errors)== 0) {

		$Password=md5($Password);
		
	

	$query="SELECT * FROM patients WHERE UserID=('$UserID')AND Password=('$Password')";
	$result=mysqli_query($mysqli,$query);
	if (mysqli_num_rows($result) ==1 )  {
	
	

	
	$_SESSION['UserID']=$UserID;
  	$_SESSION['success']="нэвтрэлт амжилттай";
  header('location:../acc/patient/index.php');
}  else{
		array_push($errors,"ID / password oruul");
		
	}
}
}





	$userprofile=isset($_SESSION['UserID']);
$query="SELECT * FROM patients WHERE UserID=('$userprofile')";
 $result= mysqli_query($mysqli, $query);
 $col= mysqli_fetch_assoc($result);







	
 if (isset($_POST['Login2'])) {
		$DoctorID2	= $mysqli -> real_escape_string($_POST['doctorID']);
		$DoctorPassword2= $mysqli -> real_escape_string($_POST['doctorpassword']);
if (empty($DoctorID2)) {
	array_push($errors,"ID oruul");
}
if (empty($DoctorPassword2)) {
	array_push($errors,"Password oruul");
	}
	if (count ($errors)== 0) {
	$queryD="SELECT * FROM doctor WHERE DoctorID=('$DoctorID2')AND password=('$DoctorPassword2')";
	$resultD=mysqli_query($mysqli,$queryD);
	if (mysqli_num_rows($resultD) ==1 )  {
	$_SESSION['f']=$DoctorID2;
  	$_SESSION['success']="newtrelt amjillta";
  	header('location:../acc/doctor/index2.php'); 
}  else{
		array_push($errors,"ID/Password buruu baina");
		
	}
}
}




$doctorprofile=isset($_SESSION['DoctorID']);
$querydoctor="SELECT * FROM doctor WHERE DoctorID=('$doctorprofile')";
 $resultdoctor= mysqli_query($mysqli, $querydoctor);
 $colD= mysqli_fetch_assoc($resultdoctor);


 if (isset($_GET['logout'])) {

	session_destroy();
	usset($_SESSION['UserID']);
	header('location:login.php');
	}




 if (isset($_POST['treatmentHistory'])) {
		  	header('../acc/patient/index.php');
			 ?>
		
         	<table class="table2" style="margin-top: -10px">
         	<caption style="margin-left: 34px;padding: 10px;font-weight: bold;font-size: 30px;" class="asd"> 
			Эмчилгээний түүх</caption>
		<tr>
		<th>Эмч</th>  ?>
		<th>Эмчийн нэр</th>
		<th>Эмчилгээ</th>
		<th>Тэмдэглэл</th>	
		</tr> 
	<?php  
		$sql11="SELECT  * FROM  description,doctor WHERE descID=('$userprofile') AND doctorIDdesc=DoctorID" ;
		$result11=$mysqli->query($sql11);
		if(mysqli_num_rows($result11)>=1){
			while ($row11=$result11->fetch_assoc()) {

				echo "<tr><td>".$row11['DoctorID']."</td><td>".$row11['Doctorname']."</td><td>"
				.$row11['treatment']."</td><td>".$row11['Note']."</td></tr>";
			}

			echo "</table";

		}
	}



		  ?>
 </table>

<?php  

if (isset($_POST['Login3'])) {

		$adminID	= $mysqli -> real_escape_string($_POST['adminID']);
		$adminpassword= $mysqli -> real_escape_string($_POST['adminpassword']);
if (empty($adminID)) {
	array_push($errors,"id oruul");
	# code...
}
if (empty($adminpassword)) {
	array_push($errors,"Password oruul");
	

		# code...
	}


	if (count ($errors)== 0) {

	
		
	

	$queryA="SELECT * FROM admin WHERE AdminID=('$adminID')AND adminpassword=('$adminpassword')";
	$resultA=mysqli_query($mysqli,$queryA);
	if (mysqli_num_rows($resultA) ==1 )  {
	
	

	
	$_SESSION['AdminID']=$adminID;
  	$_SESSION['success']="orson";
  	header('location:../acc/admin/feedback.php'); 
}  else{
		array_push($errors,"id password buruu");
		
	}
}
}


	

 if (isset($_POST['sendfeedback'])) {
 $feedback2	= $mysqli -> real_escape_string($_POST['feedx']);




$sqlfeed = "INSERT INTO  feedback (pID,feedback) VALUES ('$userprofile','$feedback2') ";

	if (!$mysqli -> query($sqlfeed)) {
  printf("%d mur oruul.\n", $mysqli->affected_rows);

}


 
}






 $mysqli -> close();




 ?>