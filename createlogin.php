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
$EMAIL = $_POST['EMAIL'];
$PASSWORD = $_POST['PASSWORD'];


$query1 ="INSERT INTO `login` ( `EMAIL`, `PASSWORD`) VALUES ( '$EMAIL', '$PASSWORD')";

$sql=mysqli_query($con,$query1);
echo $query1;
header("location:index.php");
?>