<?php
	include "config.php";
	session_start();
	$s="delete from blood where Blood_ID={$_GET["id"]}";
	$connect->query($s);
	echo "<script>window.open('addBlood.php?mes=Data Deleted...','_self');</script>";


?>