<!DOCTYPE html>
<html>
<?php
require 'core.php';
require 'dbconnect.php';
require 'CSS/style.css';
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>

.User-Signup-form i {
            position: absolute;
        }

</style>

</head>
<body class="body-decoration">
<div class="topnav">

  <a href="#">ContactUs</a>
  <a href="#">AboutUs</a>
	<a href="#">Blog</a>
  <a class="btn1" href="loginfrom.php" style="float:right">SignIn</a>
	<a  href="register.php" style="float:right">SignUp</a>
</div>

<div class="User-Signup-form">
	<h2 style=color:blue;>Sign Up:</h2>
<form action="register.php" method="POST">


      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="text" name="username" placeholder=" Enter UserName" value="<?php if(isset($username)){echo $username;} ?>"><i class="fa fa-user" aria-hidden="true"></i><br>


      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="email" id="email" name="email" placeholder="Enter E-mail"><i class="fa fa-envelope" aria-hidden="true"></i><br>

      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="Mobile" name="contact" placeholder="Enter Mobile Number"><i class="fa fa-phone-square" aria-hidden="true"></i><br>
      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="password" name="password" placeholder="Enter Password"><i class="fa fa-lock" aria-hidden="true"></i><br>
      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="password" name="Re_passowed" placeholder="Confirm-Password"><i class="fa fa-lock" aria-hidden="true"></i><br>
      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="text" name="firstname" placeholder="Enter First Name" value="<?php if(isset($firstname)){echo $firstname;} ?>"><br>
      <input style="font-family: 'font Awesome 5 free'; font-weight: 700;" type="text" name="surname" placeholder="Enter Surname" value="<?php if(isset($surname)){echo $surname;} ?>"><br>


			<?php

			if(loggedin()){
				echo 'You are already registered and logged in.';

			}else if(!loggedin()){

				if(isset($_POST['username'])&&isset($_POST['email'])&&isset($_POST['contact'])&&isset($_POST['password'])&&isset($_POST['Re_passowed'])&&isset($_POST['firstname'])&&isset($_POST['surname'])){

					$username=mysqli_real_escape_string($mycon,$_POST['username']);
          $email=mysqli_real_escape_string($mycon,$_POST['email']);
          $contact=mysqli_real_escape_string($mycon,$_POST['contact']);
					$password=mysqli_real_escape_string($mycon,$_POST['password']);
					$repassword=mysqli_real_escape_string($mycon,$_POST['Re_passowed']);
				  $firstname=mysqli_real_escape_string($mycon,$_POST['firstname']);
					$surname=mysqli_real_escape_string($mycon,$_POST['surname']);

					$pass_hash= md5($password);




				if(!empty($username)&&!empty($email)&&!empty($contact)&&!empty($password)&&!empty($repassword)&&!empty($firstname)&&!empty($surname)){


				if($password != $repassword){
					echo '<strong style=color:red;>Password do not match!..Please enter valied matching passwords</strong>';
				}else{

					$query= "select `username`,`email` from `users` where `username`='$username' or `email`='$email'";
			    if($query_run= mysqli_query($mycon, $query)){
					$num_rows= mysqli_num_rows($query_run);
				if($num_rows==1){
					echo '<strong style=color:red;>Username already exists!</strong>';

				}else if($num_rows==0){

					$query= "insert into `users`(`id`,`username`,`email`,`mobile`,`No_pawd_hash`,`password`,`firstname`,`surname`) VALUES (NULL,'$username','$email','$contact','$password','$pass_hash','$firstname','$surname')";
				if($query_run= mysqli_query($mycon, $query)){

					header('Location: success.php');
				}



				}

				}
				}

				}else{
					echo '<strong style=color:red;>All fields are require!</strong>';

				}
				}
			?>

									   <input style="font-weight: 700;" type="submit" value="Sign Up!">
</form>
</div>

</body>
<footer>
  <p>&copy; Narendra Reddy:<br>
  <a href="mailto:narendrar321@gmail.com">narendrar321@gmail.com</a></p>
</footer>


<?php


}

?>

</html>
