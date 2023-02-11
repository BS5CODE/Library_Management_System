<?php
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"library_management_system");
    $username = "";
    $phone = "";
    $gender  = "";
    $department = "";
    $email = "";
    $query = "select * from users where username = '$_SESSION[username]'";
    $query_run = mysqli_query($connection,$query);
    while($row = mysqli_fetch_assoc($query_run)){
        $username = $row['username'];
        $phone = $row['phone'];
        $gender = $row['gender'];
        $department = $row['department'];
        $email = $row['email'];
    }
    
  ?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style_view_profile.css">
    <meta charset="utf-8" name="viewport" content="width=device-width,intial-scale=1">
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>

    <title>Document</title>
</head>
<body>
<div class="navbar">
  <a href="index.php">Home</a>
  <a href="#news">News</a>
  <a href="#contact">Contact</a>
  <a href="#about">About</a>
  <div class="dropdown">
    <button class="dropbtn">Profile
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view_profile.php">View Profile</a>
      <a href="edit_profile.php">Edit Profile</a>
      <a href="change_password.php">Change Password</a>
    </div>
  </div> 
</div>

<div class="header">
  	<h2>Your Profile</h2>
  </div>

<div class="row">
			<!-- <div class="col-md-4"></div> -->
			<!-- <div class="col-md-4"> -->
				<form>
					<div class="form-group">
						<label for="name">Username:</label>
						<input type="text" class="form-control" value="<?php echo $username;?>" disabled>
					</div>
					<div class="form-group">
						<label for="email">Phone_Number:</label>
						<input type="text" value="<?php echo $phone;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="mobile">Gender:</label>
						<input type="text" value="<?php echo $gender;?>" class="form-control" disabled>
					</div>
					<div class="form-group">
						<label for="email">Department:</label>
						<input type="text" value="<?php echo $department;?>" class="form-control" disabled>
					</div>
                    <div class="form-group">
						<label for="email">Email:</label>
						<input type="text" value="<?php echo $email;?>" class="form-control" disabled>
					</div>
				</form>
			<!-- </div> -->
			<!-- <div class="col-md-4"></div> -->
		</div>
</body>
</html>