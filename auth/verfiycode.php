<?php

$email = fieltrRequest("email");
$verfiy = fieltrRequest("verfiycode");
$stmt = $con-> prepare ( " SELECT * FROM users WHERE users_email = '$email' AND users_verify_code '$verify' " );
$stmt ->execute();
$count=$stmt->rowCount();
if ($count > 0){
    $data = array( "users_approve" => "1" );
    updateData ( "users",$data ,"users_email='$email'" ) ;

}
else{
    printFailure("verifycode not Correct") ;

}
?>