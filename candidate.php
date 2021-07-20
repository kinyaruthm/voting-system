<?php
//include "includes1/heading.php";
//include "includes1/dashboard.php";
?>
<h3>Candidates</h3>

<button type="submit" id="mybutton" onclick="window.location.href='add_candidate.php'">Add users</button>
<table id= "candidate">
	<tr><th>#<th>Name</th><th>regno</th><th>department</th><th>position</th><th>#</th></tr>
	<?php
	$query=mysqli_query($conn, "SELECT * FROM candidate");
	$i=1;
	while ($row=mysqli_fetch_array($query))
	 {
	 	?>
	 	<tr><td><?php echo $i;?>
	 		
	 	</td><td><?php echo $row["name"];?></td><td><?php echo $row["regno"];?></td><td><?php echo $row["department"];?></td><td><?php echo $row["position"];?></td><td><a href="">edit</a><br><a href="">del</a><br></td></tr>
	<?php
$i++;
	}
	?>
</table>
<?php
	//include "includes/sidebar.php";
include "footers.php";
		
	?>	