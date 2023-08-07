<?php 
	
	session_start();
	$user = $_SESSION["user"];
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$to = $_REQUEST['To'];
		$subject = $_REQUEST['Subject'];
		$message = $_REQUEST['message'];		
	}
	$file = $_FILES["file"];
	move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
	$to2=str_replace('@postman.com', '', $to);
	$message2=str_replace('\n', '<br>', $message);
	echo  $to2." ". $subject ." ". $message;
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
	$sql2="INSERT INTO ".$user."_draft (`To_email`, `Subject`, `Date`, `Message`, `Attachment`) VALUES ('".$to."','".$subject."','".date("Y-m-d")."','".$message2."','".$file["name"]."')";
	if(mysqli_query($conn, $sql2)){
		echo"Record Added successfully";
	}
	else{
		echo"Error Adding record: ".mysqli_error($conn);
	}
header("Location:project.php");		
?>