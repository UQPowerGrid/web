<?php
	session_start();

	    $username=$_POST['username'];
	    $password=$_POST['password'];
	    $selectOption = $_POST['sessionOption'];

	    if ($username=="admin@uq.edu.au" && $password=="3800")
	    {
	        $_SESSION['login_id']=$username;
	        $_SESSION['login_time']=time();
	        $_SESSION['select_time']=$selectOption;
	        $_SESSION['expired']=time()+ $_SESSION['select_time'];

	        /*loging here*/
			date_default_timezone_set('Australia/Brisbane');
			$timestamp = date('d/m/Y H:i:s');
			$user = $_SESSION['login_id'];
			$login_message = $timestamp . " - " . "login by " . $user;
			$filename = '/tmp/user.log';
			// open file
			$fd = fopen($filename,"a");
			// write string
			fwrite($fd, $login_message . "\n");
			// close file
			fclose($fd);

	        header('location:map.php');
			}
        else
        {
        	$_SESSION['wrong'] = "Username/Password is incorrect!";
            header('location:index.php');}
	
?>