<!DOCTYPE html>
<html>

<style type="text/css">
@media only screen and (max-width: 820px) {
    /* For mobiles: */
    .col-m-0 {width: 90%;}
    
}
@media only screen and (min-width: 820px) {
    /* For desktop: */
    .col-0 {width: 30%;}
    
}

form{
    border-radius: 5px;
    padding: 20px;
    color:black;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: -17px; /* Increase/Decrease this value for cross-browser compatibility */
    overflow-y: scroll;
}

input[type=text], select {
    width: 80%;
    padding: 12px 20px;
    margin: 5% 10%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: white;
    box-sizing: border-box;
}
input[type=checkbox], select {
    
    margin: 0% 0% 5% 27%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: white;
    box-sizing: border-box;
}
input[type=tel], select {
    width: 80%;
    padding: 12px 20px;
    margin: 5% 10%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: white;
    box-sizing: border-box;
}
input[type=password], select {
    width: 80%;
    padding: 12px 20px;
    margin: 5% 10%;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    background-color: white;
    box-sizing: border-box;
}

input[type=submit] {
    width: 40%;
    background-color:rgb(255, 0, 84);
    color: white;
    float: left;
    padding: 14px 20px;
    margin: 5% 1% 5% 9%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
input[type= submit]:hover{
    width: 40%;
    background-color:rgb(255, 0, 84,0.75);
    color: white;
    float:left;
    padding: 14px 20px;
    margin: 6% 2% 6% 8%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type= button] {
    width: 40%;
    background-color:rgb(255, 0, 84);
    color: white;
    float:left;
    padding: 14px 20px;
    margin: 5% 9% 5% 1%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type= button]:hover{
    width: 40%;
    background-color:rgb(255, 0, 84,0.75);
    color: white;
    float:left;
    padding: 14px 20px;
    margin: 6% 8% 6% 2%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
</style>
<script>

</script>
<!-- Division of the entire web page -->


<div style="background-image:url('newflip5.jpg');background-repeat:no-repeat;background-size:cover; background-position:center;width:100%;height:100%;position: absolute;top:0;left: 0;right: 0;bottom: 0;">
    <!-- Division in the centre of the above div to display the email colorful background-->
        
        <div style="background-color:rgb(150, 117, 125);background-image:url('newflip6.jpg');border-radius: 5px;background-repeat:no-repeat;background-size:cover; background-position:center;width:90%;height:80%;float: left;position: absolute;top:10%;left: 5%;right: 0;bottom: 0; ;">
        <!-- now the division asks for the user to re-enter the username. Since it was already registered. -->
            <div class="col-0 col-m-0"style="overflow-y: hidden; overflow-x:hidden;background-color:rgba(255,255,255,0.75);border-radius: 25px;background-repeat:no-repeat;background-size:cover; background-position:center;;height:90%;float: left;position:absolute;top:5%;left: 5%;right: 0;bottom: 0; ;">
                <br>
                <br>
                <form action="createAcccount.php" style="">
                    <?php echo
                   // the page should only show error in the username field, the rest shoud be displayed the already enetered data
                    //no need to re write the accurate fields
                    "<input style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);'type='text' id='fname' name='fname' value=".$_GET['fname']." >
                    <br>
                    <input style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);'type='text' id='lname' name='lname' value=".$_GET['lname'].">
                    <br>
                    <select style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);' name='gender' > 
                        <option value='' disabled selected>".$_GET['gender']."</option>
                        <option value=' '> Other</option> 
                        <option value='Male'>Male</option> 
                        <option value='Female'>Female</option> 
                    </select> 
                    <input style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);' type='tel' name='phone' pattern='[0-9]{4}-[0-9]{7}'  title='Phone Number' required id='pno' name='pno' value=".$_GET['telephone']." maxlength='12'>
                    <br>
                    <input style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);'type='text' id='email' name='email' placeholder='USERNAME ALREADY EXISTS'>
                    <br>
                    <input style='color:rgba(0,0,0,0.65);background-color:rgba(255,255,255,0.75);'type='password' id='password' name='password' value=".$_GET['password']." maxlength='15'>
                    
                    <br>
                    <input type='submit' value='Register'>
                    <a href='SignIn2.html'><input type='button' value='Sign In'></a>"
                    ?>

                </form>
            </div>

        </div>
        
        
    

</div>
</html>
