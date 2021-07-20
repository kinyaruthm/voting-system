<?php
session_start();
include "config1.php";
?>

<html>
<head><title>TTU VOTING SYSTEM</title>
	<link rel="stylesheet" href="includes1/style.css">

</head>
<style>
	body{
	 
	
	background-color: #fff;
	color: black;
	font-weight: bold;
	font-size: 13px;

}
#login{
	background-color: grey;
	height: 250px;
	width: 50%;

}
input[type=submit]
{
	background-color: lime;
	border-radius: 4px;
	padding: 5px;
	float: right;
	cursor: pointer;
}
input[type=submit]:hover
{
	background-color: green;
	color:white;
}
h3{
	background-color: blue;
	font-weight: bold;

}
.ballot{
	background-color: silver;
	border: double;
	margin-top: 10px;
	margin-bottom: 10px;
	margin-right: 10px;
	margin-left: 10px;
	width: 50%
	font-weight:bold;
}
.admin{
	background-color: grey;
	height: 250px;
	width: 50%;
}
.topnav{
	background-color: blue;
	overflow: hidden;
}
.topnav a{
	float: left;
	color: #f2f2f2;
	text-align: center;
	padding: 14px 16px;
	text-decoration: none;
	font-size: 17px;
}
.topnav a.active{
	background-color: #04AA6D;
	color: white;
}


</style>
<body>
	

	
	<center>
<div id="title">
	<h1>TTU VOTING SYSTEM</h1>

	<img class="img" src="images/taita.jpg" height="70px",width=50%;>

</div>

