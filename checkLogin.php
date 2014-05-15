<?php

session_start();
$username= $_REQUEST['username'];
$password= $_REQUEST['password'];
$remember= $_REQUEST['remember'];

$drop_time= $_REQUEST['droptime'];
$_SESSION['droptimeD'] = $drop_time;



if(($password== "3800") and ($username =="admin")  ){
	$_SESSION['username']=$username;
	$_SESSION['password']=$password;
	$_SESSION['hasTried']="True";
	$_SESSION['login_time'] = time();
/*
	if($remember="remember"){
		setcookie("3202","infs");
	}
	
	*/
	header ("Location: map.php");


}
else{
$_SESSION['wrongComb']=True;
$_SESSION['username']=$username;
header("Location: index.php");

}


?>
