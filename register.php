<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>

<style>
*{
    margin: 0;
    padding: 0;
}
body{
    font-family: ubuntu;
} 

.wrapper{
   
    width: 100%;
    height: 200vh;
    background: #fccb90;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
}
</style>

</style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Animinated background -->
    <meta charset="UTF-8">
    <title>Animated Background using HTML and CSS | No Javascript</title>
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

     <!-- Bootstrap Font Icon CSS -->
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />

    <title>Library Management System</title>

    <style type="text/css">
        #side_bar{
            background-color: whitesmoke;
            padding: 50px;
            width: 250px;
            height: 450px;
        }
        </style>


 
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="wrapper">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.php">Library Management System (LMS)</a>
			</div>
	
		    <ul class="nav navbar-nav navbar-right">
		      <li class="nav-item">
		        <a class="nav-link" href="admin/index.php">Admin Login</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="register.php"></span>Register</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="login.php">User Login</a>
		      </li>
		    </ul>
		</div>
	</nav><br>
	<span><marquee><b><h3>IIIT Allahabad is a space to connect and explore ideas!</h3></b></marquee></span><br><br>

  <div class="header">
  	<h2>Register</h2>
  </div>
  <form method="post" action="register.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>">
  	</div>

      <div class="input-group">
  	  <label>Phone_Number</label>
  	  <input type="number" name="phone" value="<?php echo $email; ?>">
  	</div>



     <div class="input-group">
  	<label>Gender</label>
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">Other  
       <br><br>
	   </div>



      <div class="input-group">
  	  <label>Department</label>
  	  <input type="radio" name="department" <?php if (isset($department) && $department=="IT") echo "checked";?> value="IT">IT
      <input type="radio" name="department" <?php if (isset($department) && $department=="ECE") echo "checked";?> value="ECE">ECE
      <input type="radio" name="department" <?php if (isset($department) && $department=="ITBI") echo "checked";?> value="ITBI">ITBI 
       <br><br>
  	</div>

  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Password</label>
  	  <input type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirm password</label>
  	  <input type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>

    </div>
    
</body>
</html>