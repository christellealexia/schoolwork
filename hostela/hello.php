<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "application";
$con = mysqli_connect($server,$user,$pass,$db);

if($con){
    echo "WELL DONE</br>";


}else{
    echo "Ntibyakunze".mysqli_error($con);
}
 
?>