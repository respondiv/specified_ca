<?php
//Secure PHP login with folder view
// Helps clear cookies
//DO NOT MODIFY
require('secure_login_users.php');

setcookie($domain_code.'_uid', '');
setcookie($domain_code.'_cid', '');

header("LOCATION: index.php");

?>