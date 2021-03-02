<?php
$db="anil";
$user="root";
$host="localhost";
$pass="";

$con = mysqli_connect($host,$user,$pass,$db);
if($con)
{
    // die("connection failed :" .$con->connect_error);
    echo "";
}
else{
    die("connection failed because ".mysqli_connect_error());
}

?>  