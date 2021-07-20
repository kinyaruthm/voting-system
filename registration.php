<?php
include "heading.php";
include "includes1/dashboard.php";

if(isset($_POST["register"]))
{
	$regno =$_POST["Regno"];
	$course =$_POST["Course"];
    $email =$_POST["email"];
   
	$password =md5($_POST["pass"]);
 $phoneno =$_POST["Phone"];

	
	$results=mysqli_query($con,"SELECT * FROM registration WHERE regno=$regno");
     
	$Regno_check= mysqli_num_rows($results);
	if($Regno_check==0)
	{
		$query=mysqli_query($con, "INSERT INTO registration VALUES($regno,'$course','$email','$password',$phoneno)");

	 if($query)
	
		{
														
		echo "<script>alert('Registration Successful!!');location.href='voter.php';</script>"; 
		}
		

											
											else{
											
												echo"<script>alert('sorry.!!!');</script> ";
											}

		}
		else{
			echo"<script>alert('sorry.registration exist!!!');</script> ";
		}						
	}

?>


<h3>Register here!!!</h3>
<form action="registration.php" method="POST" enctype="multipart/form-data">
	<table width="80px" >
		
	    <tr><td>Registration Number:</td><td><input type="text" name="Regno" required="" placeholder="enter your Regno"></td></tr>
	    <tr><td>Course:</td><td><input type="text" name="Course" required="" placeholder="enter your course"></td></tr>

	    <tr><td>Email:</td><td><input type="Email" name="email" required="" placeholder="enter your email"></td></tr>
	    	<tr><td>Phoneno:</td><td><input type="text" name="Phone" placeholder="enter your phone number"></td></tr>
	    		<tr><td>Password:</td><td><input type="Password" name="pass" required="" placeholder="enter your password"></td></tr>
	    		<tr><td colspan="2"><input type="submit" name="register" value="register"></td></tr>
	    		<div class="login1">
	    			<p>already have an account?<a href="Login form.php">Login</a></p>
	    		</div>
	     	
</table>
</form>

<?php
	
include "footers.php";
		?>	