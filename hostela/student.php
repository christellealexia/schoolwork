<?php 
require ("hello.php");
error_reporting(0);
$Firstname=$_REQUEST["FirstName"];
$Lastname=$_REQUEST["LastName"];
$Emailid=$_REQUEST["Emailid"];
$Registrationnumber=$_REQUEST["Registrationnumber"];
$gender=$_REQUEST["gender"];
$Department=$_REQUEST["Department"];
$Year=$_REQUEST["Year"];
$Disability=$_REQUEST["Disability"];
$myfile1=$_REQUEST["myfile1"];
$myfile2=$_REQUEST["myfile1"];


 $query="INSERT INTO 
 stdents (FirstName,LastName,Emailid,Registrationnumber,gender,Year,Department,,Disability,myfile1,myfile2) VALUE('$FirstName','$LastName','$Emailid',$Registrationnumber,'$gender','$department',$Year,'$Disability','$myfile1','$myfile2','Status')";
 
 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student login page</title>
    <link rel="stylesheet" href="student.css">
</head>
<body>
    <div class="banner">
        <div class="navbar">
            <img src="logo.webp" class="logo">
            <ul>
           <li><a class="active" href="gal.html">Home</a></li>
        <li><a href="student.php">APPlY</a></li>
           

                </ul>
        </div>
  
  
<form action=" " method="POST">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname"><br>
  <label for="Emailid">EmailId:</label><br>
  <input type="text" id="Emailid" name="Emailid"><br>
  <label for="Registrationnumber">Registrationnumber:</label><br>
  <input type="text" id="Registration" name="Registrationnumber"><br>
  <label for="Department">Department:</label><br>
  <input type="text" id="Department" name="Department"><br>
  <label for="Level">Level:</label><br>
  <input type="text" id="Level" name="Level"><br>
  <label for="Gender">Gender:</label><br>
  <input type="radio" id="Female" name="Gender" value="Male">
  <label for="html">Male</label><br>
  <input type="radio" id="Male" name="Gender" value="Gender">
  <label for="css">Female</label><br>


  <label for="Disability Status">Disability Status:</label><br>
  <input type="radio" id="I have a disability" name="Disability" value="I have no disability">
  <label for="I have a disability">I have a disability</label><br>
  <input type="radio" id="I have no disability" name="Disability" value="I have no disability">
  <label for="I have no disability">I have no disability</label><br>

  <label for="myfile">Select a file of your bank slip:</label>
  <input type="file" id="myfile" name="myfile1"><br><br><br>
  <label for="myfile">Select a file of your student card/proof of registration:</label>
  <input type="file" id="myfile" name="myfile1"><br><br><br>
  <input type="checkbox" class="check box"><span>I agree to the terms and condtions </span><br>
  
<button type="submit" class="submit-btn">Register</button>

</form>
</body>
</html>