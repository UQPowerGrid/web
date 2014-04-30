<?php
session_start();
if(!is_null($_SESSION['login_id']))
{
	/*swtich usr name INFS/TIMER*/
	if(!isset($_POST['logout_bnt']))
	{
		$_SESSION['login_id']="TIMER";
	}
	/*loging here*/
	date_default_timezone_set('Australia/Brisbane');
	$timestamp = date('d/m/Y H:i:s');
	$user = $_SESSION['login_id'];
	$logout_message = $timestamp . " - " . "logout by " . $user;
	$filename = '/tmp/user.log';
	// open file
	$fd = fopen($filename,"a");
	// write string
	fwrite($fd, $logout_message . "\n");
	// close file
	fclose($fd);
    }
session_destroy();

header('location:index.php');
?>