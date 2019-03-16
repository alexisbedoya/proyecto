<?php

	require_once "config.php";
	if (isset($_SESSION['access_token']))
		$gClient->setAccessToken($_SESSION['access_token']);
	else if (isset($_GET['code'])) {
		$token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
		$_SESSION['access_token'] = $token;
	} else {
		header('Location: inicio.php');
		exit();
	}
	$oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();
	
	$_SESSION['id'] = $userData['id'];
	$_SESSION['email'] = $userData['email'];
	$_SESSION['gender'] = $userData['gender'];
	$_SESSION['picture'] = $userData['picture'];
	$_SESSION['familyName'] = $userData['familyName'];
	$_SESSION['givenName'] = $userData['givenName'];

	$id =$userData['id']; 

	
	$resultado=mysqli_query($con,"SELECT rol from google_users where clint_id =$id"); 
	while ($aux= mysqli_fetch_array($resultado)) {
     $rol = $aux['rol'];
	}
	

	$contador="SELECT * FROM google_users WHERE clint_id =$id";
	if(mysqli_num_rows(mysqli_query($con,$contador))>0){
		
	if($rol==Coordinador) {
		header('Location: vista-admin.php');
		exit();
	} else {
		header('Location: vista-empleado.php');
		exit();
	  }  
	}	
	else{
		$sql="insert into google_users (clint_id,name,last_name,google_email,gender,picture_link) values
	   ('".$userData['id']."','".$userData['givenName']."','".$userData['familyName']."','".$userData['email']."',
	   '".$userData['gender']."','".$userData['picture']."')";
		mysqli_query($con,$sql); 
		header('Location: pregunta.php');
		exit();	
	}
?>     