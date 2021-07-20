<?php
include "heading.php";
include "includes1/dashboard.php";
if(isset($_POST["add"]))
{
	
	$regno =$_POST["regno"];
	$lev =$_POST["lev"];
							$email=$_POST["email"];
								
									
										$password =md5($_POST["pass"]);
											

											$results=mysqli_query($con,"SELECT * FROM voter WHERE email='$email'");
											$email_check= mysqli_num_rows($results);
											if($email_check==0)
											{
												
												$query=mysqli_query($con,"INSERT INTO voter VALUES('$regno','$email','$password','$lev' )");
												if($query)
												{
													
													echo "<script>alert('Record added Successfully!!');location.href='voter.php';</script>";
												}
												else
												{
													echo "<script>alert('Sorry, problem detected!!');</script>";
												}

											}
											else
											{
												echo"<script>alert('sorry. Email address already exist!!!');</script> ";
											}

								
	
}
?>
<h3> Add new voter!!!</h3>
<form action="add_voter.php" method="post" enctype="multipart/form-data">
	<table width="80%">
		
	    <tr><td>Regnumber:</td><td><input type="text" name="regno" required="" placeholder="enter your registration number"></td></tr>
	    <tr><td>level:</td><td>
	    	<select name="lev">
	    	<option value="">..please select..</option>
	    	<option value="Voter">Voter</option>
	    	<option value="admin">admin</option>
	    	
	    	 </select>
	    	</td></tr>
	    <tr><td>Email:</td><td><input type="Email" name="email" required="" placeholder="enter your email"></td></tr>
	    	
	    		
	    		<tr><td>Password:</td><td><input type="Password" name="pass" required="" placeholder="enter your password"></td></tr>
	    		<tr><td colspan="2"><input type="submit" name="add" value="Add voter"></td></tr>
	     	
</table>
</form>

<?php
	//include "includes/sidebar.php";
include "footers.php";
		
	?>