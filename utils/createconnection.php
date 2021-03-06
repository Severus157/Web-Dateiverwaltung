<?php
	include_once(__DIR__.'/../lib/FtpClient.php');
	include_once(__DIR__.'/../lib/FtpException.php');
	include_once(__DIR__.'/../lib/FtpWrapper.php');
	
	session_start();
	
	switch($session) {
		case 1:
		$ftp = new \FtpClient\FtpClient();
		
		try {
			$ftp->connect($_SESSION['ip1'], false, $_SESSION['port1'], 5);
		}
		catch (Exception $e) {
			header('HTTP/1.1 460 No connection possible', true);
			exit();
		}
		
		try {
			$ftp->login($_SESSION['user1'], $_SESSION['pass1']);
		}
		catch (Exception $e) {
			header('HTTP/1.1 461 No login possible', true);
			exit();
		}
		
		break;
		
		case 2:
		$ftp = new \FtpClient\FtpClient();
		
		try {
			$ftp->connect($_SESSION['ip2'], false, $_SESSION['port2'], 5);
		}
		catch (Exception $e) {
			header('HTTP/1.1 460 No connection possible', true);
			exit();
		}
		
		try {
			$ftp->login($_SESSION['user2'], $_SESSION['pass2']);
		}
		catch (Exception $e) {
			header('HTTP/1.1 461 No login possible', true);
			exit();
		}
		
		break;
	}
	
?>