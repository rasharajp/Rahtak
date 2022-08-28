<?php

include "...../connect.php";
$email=filterRequest("email");
$password=sha1($_POST['password']);
updateDate("users",$data,"users_email ='$email'");
?>