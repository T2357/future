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

$NAME = $_POST["NAME"];
$EMAIL = $_POST["EMAIL"];
$DEPT = $_POST["DEPT"];
$DESCRIPTION = $_POST["DESCRIPTION"];
$TYPE = $_POST["TYPE"];
$CREATE_YEAR = $_POST["CREATE_YEAR"];
$LANGUAGE = $_POST["LANGUAGE"];
$file = $_POST["file"];
$query = "INSERT INTO `document` ( `NAME`, `EMAIL`, `DEPT`, `DESCRIPTION`, `TYPE`, `CREATE_YEAR`, `LANGUAGE`, `file`) VALUES ('$NAME', '$EMAIL','$DEPT', '$DESCRIPTION', '$TYPE', '$CREATE_YEAR', '$LANGAUGE', '$file')";
$result = mysqli_query($con,$query);
$num = mysqli_num_rows($result);
if($num==1){
 echo $query;
}
else{
  echo $query;
}
?>
