<?php
require_once __DIR__.'/Query-builder/Query.php';
$email=$_POST['email'];
$password=$_POST['password'];

$query = new Query();
$query->select('email,password')->table("users")->where({
	'email'=>$email,
	'password'=>'$password'
})->first();

	if($user){
		session_start();
		$_SESSION['validUser']=$suer;
		if ($user->user_type == '1'{
			//admin
			header("Location:admin/");
			
		}else if ($user->user_type == '2'){ 
			//user
			header("Location:user/");
		}
		
	}else{
		echo "<script>window.alert('invalid login')</script>";
		echo "<script>window.location.href='index.php?error=login-failed';</script>";
	}
?>