<?php
include "heading.php";
include "includes1/dashboard.php";
include "includes1/connection.php";
?>
<br>
<h3>President</h3>
<br>
<br>
Rashid
<?php
$sql="SELECT COUNT(president) FROM results WHERE president='rashid'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$count=$row['COUNT(president)'];
echo $count;
?>
<br>
ishmael
<?php
$sql="SELECT COUNT(president) FROM results WHERE president='ismael'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$count=$row['COUNT(president)'];
echo $count;
?>
<br>
<br>
<h3>Treasurer</h3>
<br>
<br>
grace
<?php
$sql="SELECT COUNT(treasurer) FROM results WHERE treasurer='grace'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$count=$row['COUNT(treasurer)'];
echo $count;
?>
<br>
rachael
<?php
$sql="SELECT COUNT(treasurer) FROM results WHERE treasurer='rachael'";
$stmt=$conn->prepare($sql);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_assoc();

$count=$row['COUNT(treasurer)'];
echo $count;
?>
<?php

include "footers.php";
		
	?>	