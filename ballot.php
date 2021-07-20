
<?php
//include "includes1/logout1.php";
include "includes1/connection.php";

include"heading.php";

if(!isset($_SESSION['user'])){
	header("location:Login form.php");
}

if(isset($_POST['submit'])){
	$voter=$_SESSION['user'];
	$president=$_POST['president'];
	$treasurer=$_POST['treasurer'];

	$sql="SELECT * FROM results WHERE voter='$voter'";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$result=$stmt->get_result();
	$row=$result->fetch_assoc();
	$dbvoter=$row['voter'];
if($dbvoter==null){
	$sql="INSERT INTO results(president, treasurer, voter) VALUES('$president', '$treasurer', '$voter')";
	$stmt=$conn->prepare($sql);
	$stmt->execute();

	echo "<script>alert('Successfully voted')</script>";
	echo "<script>window.open('ballot.php', '_self')</script>";
}else{
	echo "<script>alert('already voted')</script>";
}
}
?>
<h1>Welcome <?= $_SESSION['user'] ?></h1>
<?php include "includes1/dashboard.php"; ?>
<div class="ballot" align="center"> 
<form action="ballot.php" method="POST">

	<p>PRESIDENT</p>

RASHID<input type="radio" name="president" value="rashid">
ISMAEL<input type="radio" name="president" value="ismael">

	<p>TREASUER</p>

GRACE<input type="radio" name="treasurer" value="grace">
RACHAEL<input type="radio" name="treasurer" value="rachael">

<input type="submit" name="submit" value="submit">

	
	
</form>
<!-- <hr>
<form>
	<table border="1">
	<th align="center" colspan="3"> SECRETARY GENERAL</th>

	<tr><td><input type="radio" name="name" value="name">Name:KINYANJUI KAMAU</td><td><input type="radio" 
	name="name" value="name">Name:KIKIEH RUTH</td><td><input type="radio" name="name" value="name">Name:NYANKENA DANIEL</td></tr>
	<tr><td>Gender:male</td><td>Gender:female</td><td>Gender:male</td></tr>
</table>
	</form>
	<hr>
<form>
<table border="1">
	<th align="center" colspan="3"> ACADEMIC SEC</th>

	<tr><td><input type="radio" name="name" value="name">Name:ALBURT PINTO</td><td><input type="radio" 
	name="name" value="name">Name:KIKIEH RUTH</td><td><input type="radio" name="name" value="name"
	>Name:NYANKENA DANIEL</td></tr>
	<tr><td>Gender:</td><td>Gender:</td><td>Gender:</td></tr>
</table>
	
	</form>
	<hr>
<form>
<table border="1">
	<th align="center" colspan="3"> FINANCE SEC</th>

	<tr><td><input type="radio" name="name" value="name">Name: MARION SAM</td><td><input type="radio" 
	name="name" value="name">Name:HARRISON MUNYOKI</td><td><input type="radio" name="name" value="name"
	>Name: ESTHER KAKAI</td></tr>
	<tr><td>Gender:female</td><td>Gender:male</td><td>Gender:female</td></tr>
</table>

<button type="submit"> SUBMIT</button>
	</form>
	<hr>
	<div class="container">
	     <span class="psw1"><a href="results.php" onclick="javascript:return confirm('Are you done voting??')">View Results</a></span>
	 </div>
	</div> -->
<?php
	//include "includes/sidebar.php";
include"footers.php";
		
	?>	