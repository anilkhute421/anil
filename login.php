<?php

include("connection.php");
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="custom.css">

</head>
<body>

  
  <form class="modal-content animate" action="" method="post">
    <div class="imgcontainer">
      
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
        
      <button type="submit" name="login">Login</button>
    
    <label style="margin-left:25%">New user? <a href="index.php">Sign Up</a></label>
     
</div>
    
  </form>
</div>

<?php
if(isset($_POST['login']))
{
  // mysqli_select_db($con,'anil');

    $name=$_POST['uname'];
    $pass=$_POST['psw'];
 
    $match = "SELECT * FROM login where USERNAME='$name' && PASSWORD='$pass' ";

    $res=mysqli_query($con,$match);

    if($res)
    {
      header('location:welcome.php');
    }
    else{

      header('location:index.php');
    }

}

?>


</body>
</html>
