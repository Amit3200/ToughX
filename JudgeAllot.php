<?php include('databases.php');
?>
<?php 
if($_POST)
{
    $j_name= $_POST['j_name']; 
    $j_speciality= $_POST['j_id']; 
    echo $j_name;
    echo $j_speciality;
    $query="INSERT INTO JUDGE(J_name,exp,Ref_id) VALUES('$j_name','$j_speciality',0)";
    $mysqli->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Judge</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li ><a href="Police.php">Home</a></li>
          <li class="active"><a href="ShowJudges.php">Show Judges</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
        <div class="row marketing">
        <div class="col-lg-12">
         <h2>Judge Entry</h2>
         <form role="form" method="post" action="JudgeAllot.php">
         <div class="form-group">     
         <label >Enter the Judge Name</label>
         <input type="text" class="form-control" name="j_name" aria-describedby="emailHelp" placeholder="Enter Judge Name" required>
         </div>   
         <div class="form-group">
         <label >Judge Speciality</label>
         <input type="text" class="form-control" name="j_id" aria-describedby="emailHelp" placeholder="Judge Speciality" required>
         </div>
         <input type="submit" class="btn btn-primary" value="Add Judge" />
         </form>
         </div>
       </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
        </div>
        </div>
    </body>
</html>