<?php 
	session_start();
	$user = $_SESSION["user"];	
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		$id = $_REQUEST['id'];
		$star = $_REQUEST['star'];	
	}
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
		$false=0;
		$true=1;
		if($star){
			$sql2="UPDATE ".$user."_inbox SET Starred=".$false." WHERE id=".$id;
		}else{
			$sql2="UPDATE ".$user."_inbox SET Starred=".$true." WHERE id=".$id;
		}
		if(mysqli_query($conn, $sql2)){
			echo"Record Added successfully";
		}else{
			echo"Error Adding record: ".mysqli_error($conn);
		}
		header('Location: project.php');
				
?>