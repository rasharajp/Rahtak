<?php


include "../connect.php";
$verfiycode=rand(10000,99999);
$phone=filterRequest("phone");
$stmt=$con->prepare("SELECT * FROM users WHERE users_phone=? AND users_password=?  AND users_approve=1");
$stmt->execute(array($phone));
$count=$stmt->rowCount();
Result($count);
if($count>0){
    $data =array("users_verfiycode" =>$verfiycode);
    updateData("users",$data,"users_phone='$phone'" ,false);
    sendEmail($email,"verfiy code Rahtak","verfiy code $verfiycode");
}