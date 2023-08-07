<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="myStyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">

input[type= submit]:hover{
    background-color: pink;
    color: white;
    border-radius: 4px;
    cursor: pointer;
}

</style>

<?php
	session_start();
	$inbox=$_SESSION["inbox"];
	$star=$_SESSION["star"];
	$sent=$_SESSION["sent"];
	$draft=$_SESSION["draft"];
?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script>
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
		<div class="row" style="width:100%; display:block; height:10%;">
		<div class="col-1 col-m-1" style="color:white; padding-top:1%;display:block; height:100%;">
			<div style="width:33%;height:20%;font-size:200%;padding-left:1%;text-shadow:0.8px 0.8px rgb(255, 0, 84)"><b>POSTMAN</b></div>
			<div class="col-11 col-m-5" style="height:20%;padding-top:1px;">
				
			</div>
			<i class="fa fa-refresh" style="margin-left:0%;padding:5px;padding-left:0%"></i>
			<a href="settings2.php" style="color:white"><i class="fa fa-cog" style="padding:5px;"></i></a>
			<button class="basicBt" style="margin-left:1%;height:60%;text-align:right;" onclick="location.href='SignIn2.html'">Sign out</button>
		</div>
		</div>
	<div class="row" style="width:100%; display:block; height:87%;">
	<div class="col-1 col-m-1 " style="color:white;height:100%;display:block;">
		<div class="col-10 col-m-2"  style="height:60%;display:block;">
			<div class="col-1 col-m-1 sideMenu active" style="height:10%;">
			<a class="sideMenuLink" href="compose3.php">
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
		<div class="col-4 col-m-4" style="height:82vh; overflow-y: auto;color: white;overflow-x:hidden;background-color:rgba(219, 32, 76,0.25); margin-left:3%;display:block; ">
		<div class="col-1 col-m-1 " style="font-size: 180%">
				&nbsp;&nbsp;&nbsp;Settings	
			</div>
			<div>&nbsp;&nbsp;&nbsp;</div>
			<div class="col-1 col-m-1 mailItem">
				<div class="col-8 col-m-5">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Inbox
				</div>
				<div class="col-6 col-m-5">
					<button id="apply" style="padding:0.6%;border-radius: 4px;border:0px solid black;float: left; margin:1%; margin-right:2%;color: black; background-color:<?php
							if($_SESSION["inbox"]){
								echo'rgb(255, 0, 84);';
							}else{
								echo'rgb(255, 0, 84,0.3);';
							}?>" onclick="location.href='set.php?id=1'">Hide</button>
				</div>

						
			</div>
			<div class="col-1 col-m-1 mailItem">
				<div class="col-8 col-m-5">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Starred
				</div>
				<div class="col-6 col-m-5">
					<button id="apply" style="padding:0.6%;border-radius: 4px;border:0px solid black;float: left; margin:1%; margin-right:2%;color: black; background-color:<?php
							if($_SESSION["star"]){
								echo'rgb(255, 0, 84);';
							}else{
								echo'rgb(255, 0, 84,0.3);';
							}?>" onclick="location.href='set.php?id=2'">Hide</button>
				</div>
						
			</div>
			<div class="col-1 col-m-1 mailItem">
				<div class="col-8 col-m-5">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent
				</div>
				<div class="col-6 col-m-5">
					<button id="apply" style="padding:0.6%;border-radius: 4px;border:0px solid black;float: left; margin:1%; margin-right:2%;color: black; background-color:<?php
							if($_SESSION["sent"]){
								echo'rgb(255, 0, 84);';
							}else{
								echo'rgb(255, 0, 84,0.3);';
							}?>" onclick="location.href='set.php?id=3'">Hide</button>
				</div>
						
			</div>
			<div class="col-1 col-m-1 mailItem">
				<div class="col-8 col-m-5">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Drafts
				</div>
				<div class="col-6 col-m-5">
					<button id="apply" style="padding:0.6%;border-radius: 4px;border:0px solid black;float: left; margin:1%; margin-right:2%;color: black; background-color:<?php
							if($_SESSION["draft"]){
								echo'rgb(255, 0, 84);';
							}else{
								echo'rgb(255, 0, 84,0.3);';
							}?>" onclick="location.href='set.php?id=4'">Hide</button>
				</div>
						
			</div>
		</div>
	</div>
	</div>
	
</body>

</html>