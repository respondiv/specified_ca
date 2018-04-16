<?php

//Secure PHP login with folder view
//This file stores the username, password, data path
//You can add / edit / remove user from this file


//Users and Settings
//DO NOT change this setting.
$domain_code = 'specified';	//Alpha Numeric and no space
$random_num_1 = 475;		//Pick a random number between 1 to 500
$random_num_2 = 987;		//Pick a random number between 500 to 1000
$random_num_3 = 2;			//Pick a random number between 1 to 3

//Usernames can contain alphabets, numbers, hyphens and underscore only

//When adding new username, password and folder path, it should be in following format

//	array('UserName', 'Password', 'Fodler Path')

//Note one folder can be assigned to one username only, and vice versa.

//Its an array so add , (comma ) after every line except for the last one in the list. 

// Example below shows 4 username assigned to 4 folder
//	$users = array(
//		array('username1', 'Password1', 'My-Secure-Data/ABC/'),
//		array('username2', 'Password2', 'My-Secure-Data/XYZ/'),
//		array('username3', 'Password3', 'My-Secure-Data/PQR/'),
//		array('username4', 'Password4', 'My-Secure-Data/QWE/')
//	);

$users = array(
		array('user1', 'test1', 'My-Secure-Data/ABC/'),
		array('user2', 'test2', 'My-Secure-Data/XYZ/'),
		array('user3', 'test3', 'My-Secure-Data/QWR/')
	);


?>