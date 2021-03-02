<?php

include("connection.php");
error_reporting(0);
if(isset($_POST['signup']))
{
  $un= $_POST['uname'];
  $fn= $_POST['fname'];
  $em= $_POST['ema'];
  $mn= $_POST['mn'];
  $ps= $_POST['psw'];
  //$query="INSERT INTO login VALUES('$un','$fn','$em','$mn','$ps')";
  $query="INSERT INTO login(USERNAME, FULLNAME, EMAIL, MOBILE_NO, PASSWORD) VALUES ('$un','$fn','$em','$mn','$ps')";
  $data=mysqli_query($con,$query);
  if($data)
  {
    $msg = "<label style='color:green;'>data inserted succesfully</label>";
  }
  else
  {
    $msg = "<label style='color:green;'>Error -> ".mysqli_error($con)."</label>";;
  }
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="custom.css">


</head>
<body>

  
  <form class="modal-content animate" action="" method="POST">
    <div class="imgcontainer">
      
      <img src="img_avatar2.png" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <?=$msg?><br/>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname"  required />

      <label for="uname"><b>Full Nmae</b></label>
      <input type="text" placeholder="Enter Full Name" name="fname" required />

      <label for="uname"><b>Email</b></label>
      <input type="email" placeholder="Email id" name="ema"  required />

      <label for="text"><b>Mobile No.</b></label>
      <input type="text" placeholder="Mobile No." name="mn" pattern="[7-9][0-9]{9}"  required />

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required />
        
      <button name="signup" type="submit">Sign Up</button>
      <br>
      <a href='login.php'>Sign In</a>    
     </div>
  </form>
</body>
</html>