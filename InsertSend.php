<?php 
	//This is to start the session and get the session variables
	session_start();
	$user = $_SESSION["user"];
	$email2 = $_SESSION["email"];
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$to = $_REQUEST['To'];
		//this is to check if the user has entered an email address or not
		if($to==""){
			header("location:javascript://history.go(-1)");
		}
		$subject = $_REQUEST['Subject'];
		$message = $_REQUEST['message'];		
	}
	
	$file = $_FILES["file"];	
	move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
	//this is to convert multiple emails into an array
	$emails= explode(",", $to);
	
	foreach($emails as $email){
		if( strpos( $email, '@' ) !== false) {
		}else{
			header("location:javascript://history.go(-1)");
		}
	}
	
	$message2=str_replace('\n', '<br>', $message);
	//echo  $to2." ". $subject ." ". $message;
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
		//send mail to each email id
		foreach($emails as $email){
			$to2=str_replace('@postman.com', '', $email);
			$sql="INSERT INTO ".$to2."_inbox (`From_email`, `From_name`, `Subject`, `Date`, `Message`, `Starred`, `Attachment`) VALUES ('".$email2."','".$user."','".$subject."','".date("Y-m-d")."','".$message2."','0','".$file["name"]."')";
			if(mysqli_query($conn, $sql)){
				echo"Record Added successfully";
			}else{
				echo"Error Adding record: ".mysqli_error($conn);
			}
		}
		//add the mail to thye users sent mails
		$sql2="INSERT INTO ".$user."_sent (`To_email`, `Subject`, `Date`, `Message`, `Attachment`) VALUES ('".$to."','".$subject."','".date("Y-m-d")."','".$message2."','".$file["name"]."')";
		if(mysqli_query($conn, $sql2)){
			echo"Record Added successfully";
		}else{
			echo"Error Adding record: ".mysqli_error($conn);
		}
		header("Location:project.php");	
		
				
?>