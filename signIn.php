<?php
//starting the connection with the database 
    $conn=mysqli_connect("localhost","root","","postman");
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $sql="SELECT * FROM registered WHERE Email='".$email."'";
    $result = mysqli_query($conn,$sql);
//checking if the user is registered
    if(mysqli_num_rows($result)>0){
        $row= mysqli_fetch_assoc($result);
        //if registered.. Does the password match??
        if($password==$row["Password"]){
            //if the password matches then start the session and set the session variables.
            session_start();
            $_SESSION["email"]=$row["Email"];
			$username=substr($row["Email"],0,stripos($row["Email"],"@"));
			$_SESSION['user']=$username;
			$_SESSION["inbox"]=false;
			$_SESSION["star"]=false;
			$_SESSION["sent"]=false;
			$_SESSION["draft"]=false;
            header("Location:project.php");
        }
        else{
            //if the password does not match
            header("Location:SignIn2Error.html");
        }
        
    }

    else{
        //if the email does not match
        header("Location:SignIn2Error.html");
    }    
    
    
?>  
