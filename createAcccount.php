<?php
//starting connection with the database
    $conn=mysqli_connect("localhost","root","","postman");
    $fname=$_REQUEST['fname'];
    $lname=$_REQUEST['lname'];
    $gender=$_REQUEST['gender'];
    $phone=$_REQUEST['phone'];
    $email=$_REQUEST['email'];
    $password=$_REQUEST['password'];
    $sql="SELECT Email FROM registered WHERE Email='".$email."'";
    $existingUsers = mysqli_query($conn,$sql);
//checking if the username already exists
    if(mysqli_num_rows($existingUsers)>0){
        //if it does  already exist then the error is displayed
        header("Location:createAcccountError.php?fname=".$fname."&lname=".$lname."&gender=".$gender."&telephone=".$phone."&password=".$password);
    }
    else{

        //insert the new user in the database registered
        $sql1= "INSERT into registered(Name,Gender,Phone_number,Email,Password) values ('".$fname." ".$lname."','".$gender."','".$phone."','".$email."','".$password."')";
        $username=substr($email,0,stripos($email,"@"));
		
        $sql2= "CREATE TABLE ".$username."_sent"."(id int not null auto_increment,
        To_email text,
        Subject text,
        Date date,
        Message text,
        Attachment text,
        PRIMARY KEY (id))";
        $sql3= "CREATE TABLE ".$username."_draft"."(id int not null auto_increment,
        To_email text,
        Subject text,
        Date date,
        Message text,
        Attachment text,
        PRIMARY KEY (id))";
        $sql4= "CREATE TABLE ".$username."_inbox"."(id int not null auto_increment,
        From_email text,
        From_name text,
        Subject text,
        Date date,
        Message text,
        Starred boolean,
        Attachment text,
        PRIMARY KEY (id))";
        mysqli_query($conn,$sql1);
        mysqli_query($conn,$sql2);
        mysqli_query($conn,$sql3);
        mysqli_query($conn,$sql4);
        header('Location:mainpage.html');
    }
    
    
    
?>  
