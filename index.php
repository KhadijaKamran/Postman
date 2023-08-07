<!DOCTYPE html>
<html>
<form method="POST" enctype="multipart/form-data" action="upload.php">
	<input type="file" name="file">
	<input type="submit" value="upload">
</form>

<?php
$files = scandir("uploads");
print_r($files);
for($a=2; $a<count($files);$a++){
	//if($files[$a]=="APA Citation.pptx"){
		echo "<a download=".$files[$a]." href='uploads/".$files[$a]."'>".$files[$a]."</a>";
	//}
}

?>
</html>