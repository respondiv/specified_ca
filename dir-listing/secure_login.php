<?php

//Secure PHP login with folder view
//This file checks the login credentials and redirect the page to destination
//DO NOT CHANGE THIS FILE



//Start Class
require('secure_login_users.php');
require('secure_login_class.php');
$login = new login_class;

$today_ts = strtotime("now");
$today_m = date('n', $today_ts);
$pass_login = FALSE;

$login->domain_code = $domain_code;
$login->today_ts = $today_ts;
$login->today_m = $today_m;
$login->users = $users;
$login->num_1 = $random_num_1;
$login->num_2 = $random_num_2;
$login->num_3 = $random_num_3;
$is_login = FALSE;

//Verify
if (!$login->verify_settings()) {
	echo '<strong>Invalid Admin Settings for Login Script</strong><br />Check your settings and retry logging in';
	exit();
}
							 
//Logged In
if (isset($_COOKIE[$domain_code.'_uid']) && $_COOKIE[$domain_code.'_uid']!='' && isset($_COOKIE[$domain_code.'_cid']) && $_COOKIE[$domain_code.'_cid']!='') {
	$key_uid = $login->cleanse_input($_COOKIE[$domain_code.'_uid']);
	$key_cid = $login->cleanse_input($_COOKIE[$domain_code.'_cid']);
	
	if (!$login->verify_login($key_uid, $key_cid)) {
		$login->error_message = 'Login has expired';
	} else {
		$pass_login = TRUE;	
	}
}

//Verify Logged In Credentials
if (!$pass_login) {
	$need_login = TRUE;
	
	//Trying To Login
	if (isset($_POST['login'])) {
		//Verify Login
		$login_user = $login->cleanse_input($_POST['username']);
		$login_pass = $login->cleanse_input($_POST['password']);
		
		//Check Login
		if ($login->check_login($login_user, $login_pass)) {
			//Encode
			$login->encryption_key($login_user);
			
			$need_login = FALSE;
			global $is_login;
			$is_login = "TRUE";
			
			//Forward
			if ($login->forward != '') header("LOCATION: $login->forward");
		} else {
			$login->error_message = 'Invalid login username and password';	
			$need_login = TRUE;
			global $is_login;
			$is_login = "FALSE";
		}
	} 
	
	//Login Page
	if ($need_login) {
		require('secure_login_page.php');
		exit();
	}
}




?>