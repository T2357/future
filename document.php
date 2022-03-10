
<DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Documents</title>
    <link rel="stylesheet" type="text/css" href="feature.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="Dashboard.css">
  </head>

<body style="background-color:whitesmoke">
<style>
form {
 
  margin: 100px auto;
  padding: 30px;
  border: 5px solid #32cd32;
  background: lightblue;
}
input {
  width: 100%;
  border: 1px solid #f1e1e1;
  display: block;
  padding: 5px 10px;
}
button {
  border: none;
  padding: 10px;
  border-radius: 5px;
  background:whitesmoke;
}
table {
  width: 60%;
  border-collapse: collapse;
  margin: 100px auto;
}
th,
td {
  height: 50px;
  vertical-align: center;
  border: 3px solid skyblue;
  color:blueviolet;
}
</style>

<?php include 'navbar.php';?>

   <h3 style="color:cornflowerblue; text-align:center;">Only registered user's can upload documents</h3><h3 style="color:blue"><a href="signup.php">Register here</a></h3>
   <h4 style="color:green; text-align:center;">You can upload any document in form of zip,Microsoft Word Document(Docx) and PDF format.The file size permitted here is 10Mb. </h4>
  <div class="container">
      <div class="row">
        <form action="upload.php" method="post" enctype="multipart/form-data" >
          <div class="form-group row">
    <label for="inputName" class="col-lg-5 col-md-5 col-10 col-form-label">Name of document</label>
    <div class="col-sm-8">
      <input type="Name" class="form-control" name="NAME" placeholder="Name">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputAge" class="col-lg-5 col-md-5 col-10 col-form-label">Department</label>
    <div class="col-sm-8">
      <input type="name" class="form-control" name="DEPT" placeholder="Department">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputgender" class="col-lg-5 col-md-5 col-10 col-form-label">Description</label>
    <div class="col-sm-8">
      <input type="text" class="form-control" name="DESCRIPTION" placeholder="Describe your document">
    </div>
  </div>
  <div class="form-group row">
      <label for="inputDate" class="col-lg-5 col-md-5 col-10 col-form-label">Date of creation</label>
      <div class="col-sm-8">
        <input type="date" class="form-control" name="CREATE_YEAR" placeholder="Date of creation">
      </div>
    </div>
    <div class="form-group row">
        <label for="inputCity" class="col-lg-5 col-md-5 col-10 col-form-label">Type of Document</label>
        <div class="col-sm-8">
          <input type="name" class="form-control" name="TYPE" placeholder="Type of document">
        </div>
      </div>
      <div class="form-group row">
        <label for="inputCity" class="col-lg-5 col-md-5 col-10 col-form-label">Langauge</label>
        <div class="col-sm-8">
          <input type="name" class="form-control" name="langauge" placeholder="document in language">
        </div>
      </div>
      <h3>Upload File</h3>
          <input type="file" name="myfile"> <br>
          <input name="EMAIL"  value="<?php echo $row2[EMAIL]; ?>">
          <button type="submit" name="save"><b>Upload</b></button>
        </form>
      </div>
    </div>
  <div>
    <h3 style="color:cornflowerblue; text-align:center;">Read various Notes , question paper , documents</h3>
  
    <?php include 'downloads.php';?>
    <?php include 'footer.php';?>
  </div>
</body>
</html>
