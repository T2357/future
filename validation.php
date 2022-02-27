<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "12345678";
$db_name = "attendace";
// Create connection
$con = mysqli_connect($servername, $username, $password, $db_name);

if($con){
  echo "connection successful";
}else {
  echo "no connection";
}

mysqli_select_db($con,'attendace');

$EMAIL = $_POST["EMAIL"];
$PASSWORD = $_POST["PASSWORD"];

$query="SELECT * FROM `login` WHERE `EMAIL`='$EMAIL' && `PASSWORD`='$PASSWORD'";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num==1){
  $_SESSION['NAME'] = $NAME;
  $_SESSION['EMAIL'] = $EMAIL;
  header("location:index.php");
}
else{
  echo "Login Name or Password is Wrong.";
}
?>
