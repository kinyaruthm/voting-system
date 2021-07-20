<?php
//include "heading.php";
//include "includes1/heading.php";
if(isset($_POST["add"]))
{
	
		
							$regno =$_POST["regno"];
								$name =$_POST["name"];
									$gender =$_POST["gender"];
									$department =$_POST["department"];
										$position =$_POST["position"];

											
                             $results=mysqli_query($conn,"SELECT * FROM candidate WHERE regno='$regno'");
											$candidate_check= mysqli_num_rows($results);
											if($candidate_check==0)
											{
												
												$query=mysqli_query($conn,"INSERT INTO candidate VALUES(0,$regno,'$gender','$department','$position',)");
												if($query)
												{
													
													echo "<script>alert('Record added Successfully!!');location.href='candidate.php';</script>";
												}
												else
												{
													echo "<script>alert('Sorry, problem detected!!');</script>";
												}

											}
											else
											{
												echo"<script>alert('sorry. regno already exist!!!');</script> ";
											}

								
	
}
?>
<h3> Add Candidate!!!</h3>
<form action="add_candidate.php" method="post" enctype="multipart/form-data">
	<table width="80%">
		
	    <tr><td>Regnumber:</td><td><input type="text" name="regno" required="" placeholder="enter candidates registration number"></td></tr>
	      
	    <tr><td>Name:</td><td><input type="name" name="name" required="" placeholder="enter candidates name"></td></tr>
	    <tr><td>gender:</td><td>male<input type="radio" name="gender"value="male">
	     	Female<input type="radio" name="gender" value="female">
	    	 <tr><td>Department:</td><td>
	    	<select name="department">
	    	<option value="">..please select..</option>
	    	<option value="IC">IC</option>
	    	<option value="MMPE">MMPE</option>
	    	<option value="BUSINESS">BUSINESS</option>
	    	<option value="EDUCATION">EDUCATION</option>
	    	
	    	 </select>
	    	</td></tr>
	    		
	    		<tr><td>Position:</td><td>
	    	<select name="position">
	    	<option value="">..please select..</option>
	    	<option value="president">president</option>
	    	<option value="vice president">vice president</option>
	    	<option value="academic sec">academic sec</option>
	    	<option value="department rep">department rep</option>
	    	
	    	 </select>
	    	</td></tr>
	    	<tr><td colspan="2"><input type="submit" name="add" value="Add candidate"></td></tr>
	     	
</table>
</form>

<?php
//include "includes/sidebar.php";
//include "includes1/footers.php";
		
	?>