<?php 
require('secure_login.php');

//Secure PHP login with folder view
//This page allows user to login / logout and to go to the destination folder if logged in.
//Use Caution when Changing the HTML below as it may hide few function thats enabled.

?>

<!DOCTYPE html>
<html>
<head>
<title>Secure Login Page</title>

</head>

<body>

<strong>Welcome back <?php echo $login->username; ?>,</strong><br />
Thank you for logging in.<br /><br />

Visit your Secure Directory: <?php echo "<a href='$login->forward'> Click Here </a>" ?><br /><br />

<span style='font-size: 12px; color:red;'>DO NOT FORGET to </span><a href="secure_logout.php">Logout</a>

</body>
</html>
