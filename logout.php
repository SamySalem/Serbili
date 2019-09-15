<?php
// Starting session
session_start();
$link = "index.php";
if(isset($_SESSION['grade']))
{
	$link = "employe.php";
}
// Destroying session
session_destroy();
header("Location: ".$link);
?>