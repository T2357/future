<?php include 'connection.php'; ?>
<?php
  $sql = "SELECT * FROM `document`";
  $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0) {
 ?>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>
<table>
<thead>
    <th>Name of Dcoument</th>
    <th>Email of User</th>
    <th>Department</th>
    <th>Description</th>
    <th>Language</th>
    <th>Type</th>
    <th>Date created</th>
    <th>Read File</th>
   
</thead>
<tbody>
<?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>

        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["NAME"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["EMAIL"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["DEPT"]; ?></b></td>
        <td style="border: 3px solid  #1273;"><b><?php echo $row["DESCRIPTION"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["LANGUAGE"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["TYPE"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["CREATE_YEAR"]; ?></b></td>
        <td style="border: 3px solid  #1273;font-size:20px;"><b><?php echo $row["file"]; ?></b></td>
        
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
     <?php
    }
    else{
        echo "No result found";
    }
    ?>

</table>

</body>
</html>