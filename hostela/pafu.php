<?php
require ("hello.php");
$greetings= "Welcome from webserver";

$FName=$_REQUEST["FName"];
$LName=$_REQUEST["LName"];
$age=$_REQUEST["Age"];
$weight=$_REQUEST["Weight"];
$height=$_REQUEST["Height"];
$pregnancy=$_REQUEST["Pregnancy"];
$location=$_REQUEST["Location"];
$insurance=$_REQUEST["Insurance"];
$Email=$_REQUEST["Email"];
$Password=$_REQUEST["Password"];
 $query="INSERT INTO customer(C_FName,C_LName,C_Age,C_Weight,C_Height,C_Pregnancy,C_Location,C_Insurance,C_Email,C_Password) VALUE('$FName','$LName',$age,$weight,$height,$pregnancy,'$location','$insurance','$Email',$Password)";
 $rs = mysqli_query($con,$query);
 if($rs){
    //echo $greetings." ".$FName." ".$LName."</br>";
    require("page1.php");
 }
 else{
    echo "Errors".mysqli_error($con); 
 } 

}
if(isset($_POST['bikura'])){
    //echo " Data Form Database_Table:</br>";
    $Email=$_REQUEST["Email"];
$Password=$_REQUEST["Password"];
    $query= "SELECT C_Id,C_FName,C_LName FROM customer WHERE (C_Email='$Email' AND C_Password=$Password)";
    $re = mysqli_query($con,$query);
    if($re){
        while($row = mysqli_fetch_array($re)){
           // echo  $row["C_Id"].", ".$row["C_FName"]." ".$row["C_LName"]."</br>";
           require("page1.php");
     }}
     else{
        echo "wrong query".mysqli_error($con); 
     } 
     }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Login</title>
    <link rel="stylesheet" href="login2.css">
</head>
<body>
   <!-- <embed type="image/jpg" src="pc2.png">-->
    <div id="login-form" class="login-page">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" onclick="login()" class="toggle-btn">Log In</button>
                <button type="button" onclick="register()" class="toggle-btn">Register</button>
                </div>
                <form id="login" class="input-group-login" method="POST" action=" ">
                    <input type="text" name="Email" class="input-field" placeholder="Email " required>
                    <input type="password" name="Password" class="input-field" placeholder="Enter password " required>
                   
                    <input type="checkbox" class="check-box"><span>Remember Password</span>
                    <button type="submit" class="submit-btn" name="bikura">Log In</button>
                </form>
                <form id="register" class="input-group-register" method="POST" action=" ">
                    <input type="text" name="FName" class="input-field" placeholder="First Name" required>
                    <input type="text" name="LName" class="input-field" placeholder="Last Name" required>
                    <input type="text" name="Age" class="input-field" placeholder="age" required>
                    <input type="text" name="Weight" class="input-field" placeholder="weight" required>
                    <input type="text" name="Height" class="input-field" placeholder="height" required>
                    <input type="text" name="Pregnancy" class="input-field" placeholder="Pregnancy period" required>
                    <input type="text" name="Location" class="input-field" placeholder="location" required>
                    <input type="text" name="Insurance" class="input-field" placeholder="insurance" required>
                    <input type="email" name="Email" class="input-field" placeholder="Email " required>
                    <input type="password" name="Password" class="input-field" placeholder="Enter password" required>
                    
                    
            <input type="checkbox" class="check box"><span>I agree to the terms and condtionns </span>
                    <button type="submit" class="submit-btn" name="bika">Register</button>
                    
                    
                </form>
               <script>
                   var x =document.getElementById("login");
                   var y =document.getElementById('register');
                   var z=document.getElementById('btn');
                   function register(){
                       x.style.left='400px';
                       y.style.left='60px';
                       z.style.left='110px'

                   } 
                function login(){
                    x.style.left='50px';
                    y.style.left='450px';
                    z.style.left='0px';

                }
                </script>
    <script>
var modal = document.getElementById('login-form');
window.onclick = function(event)
{
    if(event.target==modal)
    {
        modal.style.display = "none";
        
    }}

</script>

</body>
</html>