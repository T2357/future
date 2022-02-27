<?php
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
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$COUNTRY = $_POST['COUNTRY'];

$query1 ="INSERT INTO `user` ( `NAME`,  `EMAIL`, `COUNTRY`) VALUES ( '$NAME', '$EMAIL', '$COUNTRY')";

$sql=mysqli_query($con,$query1);
echo $query1;
header("location:create.php");
?>
