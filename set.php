<?php
	
	$id = $_REQUEST['id'];
	session_start();
	if($id==1){
		$inbox = $_SESSION["inbox"];
		if($inbox){
			$_SESSION["inbox"]=false;
		}else{
			$_SESSION["inbox"]=true;
		}
	}else if($id==2){
		$star = $_SESSION["star"];
		if($star){
			$_SESSION["star"]=false;
		}else{
			$_SESSION["star"]=true;
		}
	}else if($id==3){
		$sent = $_SESSION["sent"];
		if($sent){
			$_SESSION["sent"]=false;
		}else{
			$_SESSION["sent"]=true;
		}
	}else if($id==4){
		$draft = $_SESSION["draft"];
		if($draft){
			$_SESSION["draft"]=false;
		}else{
			$_SESSION["draft"]=true;
		}
	}
	
	header("Location:settings2.php");
?>