<?php
	session_start();
	$user = $_SESSION["user"];
			
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$id = $_REQUEST['id'];
		$to = $_REQUEST['To'];
		$subject = $_REQUEST['Subject'];
		$message = $_REQUEST['message'];
		$attachment = $_REQUEST['Attachment'];		
	}
	if($attachment==""){
		if(isset($_FILES["file2"])){
		$file = $_FILES["file"];
		move_uploaded_file($file["tmp_name"],"uploads/" . $file["name"]);
		//$attachment=$file["name"];
		}		
	}
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
		/*if($attachment==""){
			$sql2="UPDATE ziad_draft SET To_email='".$to."',Subject='".$subject."',Date='".date("Y-m-d")."',Message='".$message."',Attachment='".$file["name"]."' WHERE id=".$id;
		}else{*/
			$sql2="UPDATE ".$user."_draft SET To_email='".$to."',Subject='".$subject."',Date='".date("Y-m-d")."',Message='".$message."' WHERE id=".$id;
		//}
		if(mysqli_query($conn, $sql2)){
			echo"Record Added successfully";
			}else{
			echo"Error Adding record: ".mysqli_error($conn);
			}
		header("Location:project.php");	
				
?>