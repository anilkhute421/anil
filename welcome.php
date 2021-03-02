<?php

include("connection.php");
error_reporting(0);
$query="SELECT * FROM login"; 
$data=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V01</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
               
					<table>
						<thead>
							<tr class="table100-head">
                                <th class="column1">USERNAME</th>
								<th class="column2">FULL NAME</th>
								<th class="column3">EMAIL ID</th>
								<th class="column4">MOBILE_NO</th>
								<!-- <th class="column5">PASSWORD</th> -->
							</tr>
                        </thead>
						<tbody>

                        <?php
                        if($data)
                        {
                            while($res=mysqli_fetch_assoc($data))
                            {
                        ?>
								<tr>
									<td class="column1"><?=$res['USERNAME']?></td>
									<td class="column2"><?=$res['FULLNAME']?></td>
									<td class="column3"><?=$res['EMAIL']?></td>
									<td class="column4"><?=$res['MOBILE_NO']?></td>
									<!-- <td class="column5"><?=$res['PASSWORD']?></td> -->
                                </tr>
                        <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
						</tbody>
                    </table>
<div><a href="index.php"><label style="color:yellow";>Singup</label></div>
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>

</html>