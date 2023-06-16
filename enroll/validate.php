
<!DOCTYPE html>
<html>

<head>
	<title>Enrollment Form</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "mydatabase");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id=$_GET['id'];
                
		$firstname = $_REQUEST['firstname'];
		$lastname = $_REQUEST['lastname'];
		$class = $_REQUEST['class'];
		$section = $_REQUEST['section'];
		$guardianN = $_REQUEST['guardianN']; 
		$guardianNo = $_REQUEST['guardianNo'];
		$gender = $_REQUEST['gender'];
		$dob = $_REQUEST['dob'];
		$catchAr = $_REQUEST['catchAr'];
		$MedicalC = $_REQUEST['MedicalC'];
		$housegps = $_REQUEST['housegps'];
 		
   		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO members VALUES ('$id','$firstname',
			'$lastname','$class','$section','$guardianN', '$guardianNo', '$gender', '$dob', '$catchAr', '$MedicalC','$housegps')";
		
		if(mysqli_query($conn, $sql)){
			
                        echo "Successfull";
			
		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>

