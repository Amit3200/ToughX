<?php include('databases.php');
?>
<?php 
$id = $_GET['FIR_ID'];
if($_POST)
{
    $id = $_GET['FIR_ID'];
    $accuname=$_POST['acc'];
    $case= $_POST['case123'];
    $statement=$_POST['statement'];
    $query="UPDATE fir SET Accused_Name='$accuname' where FIR_ID=$id";
    $mysqli->query($query) or die();
    $msg="Record Updated";
    header('Location:Police.php?msg='.urlencode($msg).'');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update|FIR</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li ><a href="Police.php">Home</a></li>
          <li class="active"><a href="Fir.php">Add FIR</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
        <div class="row marketing">
        <div class="col-lg-12">
         <h2>Report FIR</h2>
            
         <form role="form" method="post" action="EditMe.php?FIR_ID=<?php echo $id;?>">
        Offence Details<hr>
         <div class="form-group"> 
         <label>Enter the Name of Accussed</label>
         <input type="text" name="acc" class="form-control" placeholder="Enter the name of accused">
         </div>
        <div class="form-group"> 
        <big><big><label>Choose the Crime</label></big></big>
        <hr>    
        <br><label>Choose the Vredict</label><br>
        <select name="case123" style="width:400px; height:30px; font-size:18px; border-radius:5px;" >
          <option value="K301"><label>Murder</label></option>
          <option value="K302"><label>Kidnap</label></option>
          <option value="K303"><label>Harrasement</label></option>
          <option value="K304"><label>Theft</label></option>
          <option value="K305"><label>Theft &amp; Murder</label></option>
          <option value="K306"><label>Theft &amp; Kidnap</label></option>
          <option value="K307"><label>Theft &amp; Harrasement </label></option>
          <option value="K308"><label>Harrasement &amp; Murder</label></option>
          <option value="K309"><label>Harrasement &amp; Kidnap</label></option>
          <option value="K310"><label>Kidnap &amp; Murder</label></option>
      </select>
        </div>    
        <div class="form-group"> 
         <label >Statement of Police</label>
            <textarea name="statement" class="form-control" placeholder="Enter the offence" style="resize:none; height:100px;"  required></textarea> 
         </div>   
         <input type="submit" class="btn btn-primary" value="Update FIR" />
         </form>
         </div>
       </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
        </div>
        </div>
    </body>
</html>