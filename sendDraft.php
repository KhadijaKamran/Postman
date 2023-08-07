<?php 
//This is to start the session and get the session variables
	session_start();
	$user = $_SESSION["user"];
	$email2 =$_SESSION["email"];
	
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id = $_REQUEST['id'];
		$to = $_REQUEST['To'];
		//this is to check if the user has entered an email address or not
		if($to==""){
			header("location:javascript://history.go(-1)");
		}
		$subject = $_REQUEST['Subject'];
		$message = $_REQUEST['message'];
		$attachment = $_REQUEST['Attachment'];
	}
	//This is to check if the user has added an attachment
	if($attachment==""){
		echo "in attach </br>";
		
		if(isset($_FILES["file2"])){
			echo "in if </br>";
			$file = $_FILES["file2"];
			move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
			$attachment=$file["name"];
		}	
		
	}
	//$to2=str_replace('@postman.com', '', $to);
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
		
		//this is to convert multiple emails into an array
		$emails= explode(",", $to);
		
		//send mail to each email id
		foreach($emails as $email){
			$to2=str_replace('@postman.com', '', $email);
			$sql="INSERT INTO ".$to2."_inbox (`From_email`, `From_name`, `Subject`, `Date`, `Message`, `Starred`, `Attachment`) VALUES ('".$email2."','".$user."','".$subject."','".date("Y-m-d")."','".$message2."','0','".$attachment."')";
			if(mysqli_query($conn, $sql)){
				echo"Record Added successfully";
				}else{
				echo"Error Adding record: ".mysqli_error($conn);
				}
		}
		
		$sql2="INSERT INTO ".$user."_sent (`To_email`, `Subject`, `Date`, `Message`, `Attachment`) VALUES ('".$to."','".$subject."','".date("Y-m-d")."','".$message2."','".$attachment."')";
		if(mysqli_query($conn, $sql2)){
			echo"Record Added successfully";
			}else{
			echo"Error Adding record: ".mysqli_error($conn);
			}
			
		$sql3="DELETE FROM ".$user."_draft WHERE id=".$id;
		if(mysqli_query($conn, $sql3)){
			echo"Record Added successfully";
			}else{
			echo"Error Adding record: ".mysqli_error($conn);
			}
		header("Location:project.php");	
?>