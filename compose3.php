<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="myStyle.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
    color: white;
    opacity: 1; /* Firefox */
}

button:hover{
	
    background-color:rgba(255, 0, 84,0.25);
    color: white;
    border-radius: 4px;
    cursor: pointer;
}
input[type= submit]:hover{
	
    background-color:rgba(255, 0, 84,0.25);
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

</style>
<!-- This is to start the session and get the variables of the session -->

<?php
	session_start();
	$user = $_SESSION["user"];
	$inbox=$_SESSION["inbox"];
	$star=$_SESSION["star"];
	$sent=$_SESSION["sent"];
	$draft=$_SESSION["draft"];
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script><!-- This is to start the session and get the variables of the session -->
		$(document).ready(function(){
			var $inbox1=<?php echo $inbox; ?>;
			if ($inbox1) {
				$("#inbox_div").hide();
			}else{	
				$("#inbox_div").show();
			}
		});
	</script>
	<script>
	//this is to hide star tab if the user has hidden it in the settings
		$(document).ready(function(){
			var $star1=<?php echo $star; ?>;		
			if ($star1) {
				$("#star_div").hide();
			}else{	
				$("#star_div").show();
			}
		});
	</script>
	<script>
	//this is to hide sent tab if the user has hidden it in the settings
		$(document).ready(function(){
			var $sent1=<?php echo $sent; ?>;
			
			if ($sent1) {
				$("#sent_div").hide();
			}else{	
				$("#sent_div").show();
			}
		});
	</script>
	<script>
	//this is to hide draft tab if the user has hidden it in the settings
		$(document).ready(function(){
			var $draft1=<?php echo $draft; ?>;
			
			if ($draft1) {
				$("#draft_div").hide();
			}else{	
				$("#draft_div").show();
			}
		});
	</script>
</head>

<body style="font-family:Calibri; color:rgb(240,240,240);padding:0% ;margin:0%; width:98%;background-color:rgb(40,1,22); background-image:url('newflip1.jpg');background-repeat:no-repeat;background-size:cover; background-position:center; display:block;height:100%;">
		<!-- This is the top navigation bar -->
		<div class="row" style="width:100%; display:block; height:10%;">
		<div class="col-1 col-m-1" style="color:white; padding-top:1%;display:block; height:100%;">
			<div style="width:33%;height:20%;font-size:200%;padding-left:1%;text-shadow:0.8px 0.8px rgb(255, 0, 84)"><b>POSTMAN</b></div>
			<div class="col-11 col-m-5" style="height:20%;padding-top:1px;">
				
			</div>
			<a href="settings2.php" style="color:white"><i class="fa fa-cog" style="padding:5px;"></i></a>
			<button class="basicBt" style="margin-left:1%;height:60%;text-align:right;" onclick="location.href='SignIn2.php'">Sign out</button>
		</div>
		</div>
	<div class="row" style="width:100%; display:block; height:87%;">
	<div class="col-1 col-m-1 " style="color:white;height:100%;display:block;">
		<!--This is the side navigation bar -->
		<div class="col-10 col-m-2"  style="height:60%;display:block;">
			<div class="col-1 col-m-1 sideMenu active" style="height:10%; background-color:rgb(255, 0, 84, 0.8);">
			<a class="sideMenuLink" href="compose3.php" >
				<div class="col-2 col-m-2" style="height:100%;;text-align:center;font-size:22px; margin-right:1%;">
						<i class="fa fa-plus"></i>
				</div>
				<div  class="col-3 col-m-3" style="height:100%;font-size:21px;text-align:left;paadding-top:0%">
					<b>Compose</b>
				</div>
			</a>
			</div>
			<div id="inbox_div" class="col-1 col-m-1 sideMenu" >
			<a class="sideMenuLink" href="project.php">
				<div class="col-2 col-m-2" style="text-align:center;">
						<i class="fa fa-envelope"></i>
				</div>
				<div  class="col-3 col-m-3">
					Inbox
				</div>
			</a>
			</div>
			<div id="star_div" class="col-1 col-m-1 sideMenu" >
			<a class="sideMenuLink" href="starred.php">
				<div class="col-2 col-m-2" style="text-align:center;">
						<i class="fa fa-star"></i>
				</div>
				<div  class="col-3 col-m-3">
					Starred
				</div>
			</a>
			</div>
			<div id="sent_div" class="col-1 col-m-1 sideMenu">
			<a class="sideMenuLink" href="sent.php">
				<div class="col-2 col-m-2" style="text-align:center;">
						<i class="fa fa-check"></i>
				</div>
				<div  class="col-3 col-m-3">
					Sent
				</div>
			</a>
			</div>
			<div id="draft_div" class="col-1 col-m-1 sideMenu">
			<a class="sideMenuLink" href="drafts.php">
				<div class="col-2 col-m-2" style="text-align:center;">
						<i class="fa fa-clipboard"></i>
				</div>
				<div  class="col-3 col-m-3">
					Drafts
				</div>
			</a>
			</div>
			<div class="col-1 col-m-1 sideMenu">
			<a class="sideMenuLink" href="help2.php">
				<div class="col-2 col-m-2" style="text-align:center;">
						<i class="fa fa-question"></i>
				</div>
				<div  class="col-3 col-m-3">
					Help and Feedback
				</div>
			</a>
			</div>
		</div>
		<div class="col-4 col-m-4" style="height:82vh;margin-left:3%;display:block; ">
			<form action="InsertSend.php" method="post" enctype="multipart/form-data" style="height:100%">
			<!-- This is to enter the recipients -->
				<input style="color:white;padding: 12px 10px;border: 1px solid #ccc;border-radius: 4px;;background-color:rgba(219, 32, 76,1); margin:0.2%; border:none; width:98%; height:20px" type="email;" name="To" placeholder="Recipients:(for multiple recipients enter comma seperated emails)"></br>
				<!--This is to enter the subject -->
				<input style="padding: 12px 10px;border: 1px solid #ccc;border-radius: 4px;color:white;background-color:rgba(219, 32, 76,1); border:none; margin:0.2%; width:98%; height:20px" type="text" name="Subject" placeholder="Subject:"></br>
				<!--This is to enter the mail -->
				<textarea name="message" style="padding: 12px 10px;border: 1px solid #ccc;border-radius: 4px;overflow-y: auto;color:black;background-color:rgba(219, 32, 76,1);resize: none;width:97.5%; height:70%;margin:0.2%; "></textarea>
				<input style="padding:0.6%;border-radius: 4px;border:0px solid black;float:right; margin:1%; margin-right:2%;background-color:rgb(255, 0, 84);color: white;" type="submit" value="Send" style="width:80px;height: 20px;">
				<input  formaction="draftsave.php" style="padding:0.6%;border-radius: 4px;border:0px solid black;float:right; margin:1%; margin-right:2%;background-color:rgb(255, 0, 84);color: white;" type="submit" value="Save As Draft" style="width:80px;height: 20px;">
				<input style="padding:0.6%;border-radius: 4px;border:0px solid black;float:right; margin:1%; margin-right:2%;background-color:rgb(255, 0, 84);color: white;" type="file" name="file" value="+" style="width:80px;height: 20px;">
				 				
			</form>
		</div>
			
			
			
		</div>
	</div>
	
</body>

</html>