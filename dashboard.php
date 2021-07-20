
<div class="topnav">
	<?php if(!isset($_SESSION['user'])){ ?>
	<a class="active" href="index.php">HOME</a>
		<a href="contact.php">CONTACT US</a>  
		 <a href="admin.php">ADMIN LOGIN</a> 
	<?php } ?>
	<?php if(isset($_SESSION['user'])){ ?>
		 <a href="voter.php">VOTER</a> 
		   <a href="ballot.php">BALLOT</a>  
		   <a href="results.php">RESULTS</a> 
		   <a href="logout1.php">LOG OUT</a> 
	<?php } ?>
				
			</div>
			<div id="main">
			<div id="content">