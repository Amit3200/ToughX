<?php include('databases.php');
?>
<?php
$query ="Select * from judge";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>See Judges</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
      <div class="row marketing">
        <div class="col-lg-12">
         <h2>Judges</h2>
		 <table class="table table-striped" class="table-responsive">
			            <tr>
                <th>Judge ID</th>
                <th>Judge Name</th>
                <th>Experience</th>
                </tr>
<?php 
            if($result->num_rows>0)
            {
    while($row=$result->fetch_assoc()){
        $output ='<tr>';
        $output .='<td>'.$row['J_Id'].'</td>';
        $output.='<td>'.$row['J_name'].'</td>';
        $output.='<td>'.$row['exp'].'</td>';
        $output.='</tr>';
        echo $output;
    }
}
            else{
                echo "Sorry Doesn't Succeed";
            }
        ?>
		</table>
        </div>
      </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
      </div>
      </div>
    </body>
</html>