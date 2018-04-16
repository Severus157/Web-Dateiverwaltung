<?php
	$session=$_GET['session'];
	$server=$_POST['server'];
	$port=$_POST['port'];
	$user=$_POST['nutzer'];
	$password=$_POST['passwort'];
		
	session_start();
	
	switch($session) {
		case 1:
		$_SESSION['ip1'] = $server;
		$_SESSION['port1'] = $port;
		$_SESSION['user1'] = $user;
		$_SESSION['pass1'] = $password;
		$_SESSION['aktordner1'];
		break;
		
		case 2:
		$_SESSION['ip2'] = $server;
		$_SESSION['port2'] = $port;
		$_SESSION['user2'] = $user;
		$_SESSION['pass2'] = $password;
		$_SESSION['aktordner2'];
		break;
	}
	
	global $ftp;
	
	include('createconnection.php');
	
	switch($session) {
		case 1:
		$_SESSION['aktordner1'] = $ftp->pwd();
		break;
		
		case 2:
		$_SESSION['aktordner2'] = $ftp->pwd();
		break;
	}
?>