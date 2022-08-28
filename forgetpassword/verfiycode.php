<?php

$email = fieltrRequest("email");
$verfiy = fieltrRequest("verfiycode");
$stmt = $con-> prepare ( " SELECT * FROM users WHERE users_email = '$email' AND users_verify_code '$verify' " );
$stmt ->execute();
$count=$stmt->rowCount();
Result($count);
?>