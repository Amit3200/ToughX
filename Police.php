<?php include('databases.php');
?>
<?php
$query ="Select * from policestation";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Police Stations</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container-fluid">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="Police.php">Home</a></li>
          <li><a href="Fir.php">Add FIR</a></li>
          <li><a href="LoginForm1.php">Show FIR</a></li>
          <li><a href="UserLogin.php">Candidate Login</a></li>    
         <li><a href="PanelLogin.php">Panel Login</a></li>   
            <li><a href="AdminLogin.php">Adminstrator</a></li>    
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
       
      <div class="row marketing">
        <div class="col-lg-12">
         <h2>Police Stations</h2>
		 <table class="table table-striped" class="table-responsive">
			            <tr>
                <th>Police Station ID</th>
                <th>Police Station Name</th>
                <th>District</th>
                <th>City</th>
                <th>State</th>
                <th>Country</th>
                </tr>
<?php 
            if($result->num_rows>0)
            {
    while($row=$result->fetch_assoc()){
        $output ='<tr>';
        $output .='<td>'.$row['P_ID'].'</td>';
        $output.='<td>'.$row['P_Name'].'</td>';
        $output.='<td>'.$row['P_District'].'</td>';
        $output.='<td>'.$row['P_City'].'</td>';
        $output.='<td>'.$row['P_State'].'</td>';
        $output.='<td>'.$row['P_Country'].'</td>';
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