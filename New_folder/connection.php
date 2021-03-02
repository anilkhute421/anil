<?php

$servername="localhost";
$username="root";
$pass="";
$dbname="vikn_commingsoon";

$con=mysqli_connect($servername,$username,$pass,$dbname);
if($con){
    echo "";
}else{
    die("connection unseceefull".mysqli_connect_error());
}

?>