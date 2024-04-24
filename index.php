<?php
    
require "DBConnect.php";
$user = "lucas";
$pwd = "poop";
$sql = "select UserID, UserName, UserPower from User where UserName = ? and UserPass = ?";
//$result = queryDB($sql);
$result = loginDB($sql, $user, $pwd);
if (gettype($result) == "object") {
  if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $UserID = $row['UserID'];
    $UserName = $row['UserName'];
    $UserPower = $row['UserPower'];
    session_start();
    $_SESSION['id'] = $UserID;
    $_SESSION['username'] = $UserName;
    $_SESSION['userPower'] = $UserPower;
    //exit;
  }else {
    echo "Login Failed";
  }
}
include 'header.php';

