<?php
include "includes1/connection.php";
include "heading.php";
include "includes1/dashboard.php";
//include "includes1/ballot.php";
if(isset($_SESSION['user'])){
	header("location:ballot.php");
}
if(isset($_POST["login"]))
{

									$regno =$_POST["regno"];
										$password =md5($_POST["pass"]);
											
											$results=mysqli_query($conn, "SELECT * FROM voter WHERE regno='$regno' AND password='$password'");
                                           $user_check= mysqli_num_rows($results);
											
											if($user_check==1)
											{
												$row=mysqli_fetch_assoc($results);
												$_SESSION['user']=$regno;
												echo "<script>alert('Login successful!!');location.href='ballot.php';</script>";


											}

											else
											{

												echo"<script>alert('sorry. Login failed!!!');</script> ";
											}

								
	
}
?>

<h2>LOGIN FORM</h2>
<div id="login">
	
		<h3> My vote my choice</h3>
		
		<form action="Login form.php" method="post">
			<table border="1">
				
	    	
	     	<tr><td>Regnumber:</td><td><input type="text" name="regno" required></td></tr>
	     	<tr><td>Password:</td><td><input type="Password" name="pass" required></td></tr>
	     	<tr><td colspan="2"><center><input type="submit" name="login" value="login"></center></td></tr>
	     	
	     </table> 
	 </div>

<div class="container">
	     <span class="psw1">Are you registered?<a href="registration.php">Register</a></span>
	 </div>
	 </form>
	



	 <?php

include "footers.php";
		
	?>