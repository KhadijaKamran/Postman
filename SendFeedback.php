<?php 
	session_start();
	$user = $_SESSION["user"];
	$email = $_SESSION["email"];
	
		$to = 'admin@postman.com';
		$subject ="Help or Feedback Request";
		$message = $_REQUEST['feedback'];		
	
	
	$emails= 'admin@postman.com';
	$message2=str_replace('\n', '<br>', $message);
	echo $message2;
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbName="postman";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbName);

		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
		echo "Connected successfully";


			$to2=str_replace('@postman.com', '', $emails);
			$sql="INSERT INTO ".$to2."_inbox (`From_email`, `From_name`, `Subject`, `Date`, `Message`, `Starred`) VALUES ('".$email."','".$user."','".$subject."','".date("Y-m-d")."','".$message2."','0')";
			if(mysqli_query($conn, $sql)){
				echo"Record Added successfully";
			}else{
				echo"Error Adding record: ".mysqli_error($conn);
			}
		
		$sql2="INSERT INTO ".$user."_sent (`To_email`, `Subject`, `Date`, `Message`) VALUES ('".$to."','".$subject."','".date("Y-m-d")."','".$message2."')";
		if(mysqli_query($conn, $sql2)){
			echo"Record Added successfully";
		}else{
			echo"Error Adding record: ".mysqli_error($conn);
		}
		header("Location:project.php");	
				
?>