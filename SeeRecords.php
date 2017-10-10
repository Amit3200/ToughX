<?php include('databases.php');
?>
<?php
$query ="Select * from fir";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIR RECORDS</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
  </head>
  <body>
    <div class="container">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li class="active"><a href="Police.php">Home</a></li>
          <li><a href="Fir.php">Add FIR</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
       
      <div class="row marketing">
        <div class="col-lg-60">
         <h2>FIR RECORDS</h2>
		 <table class="table table-striped" class="table-responsive" >
			    <tr>
                <th>Police Station ID</th>
                <th>Police Station Name</th>
                <th>FIR ID</th>
                <th>Name</th>
                <th>Father's Name</th>
                <th>Place of offence</th>
                <th>IPC</th>             
                <th>Operations</th>           
                    <th>Option</th>
                
             </tr>
<?php 
            if($result->num_rows>0)
            {
            while($row=$result->fetch_assoc()){
        $output ='<tr>';
        $output .='<td>'.$row['Police_id'].'</td>';
        $output.='<td>'.$row['Police_name'].'</td>';
        $output.='<td>'.$row['FIR_ID'].'</td>';
        $output.='<td>'.$row['Name'].'</td>';
        $output.='<td>'.$row['Father_name'].'</td>';
        $output.='<td>'.$row['P_Offence'].'</td>';
        $output.='<td>'.$row['IPC'].'</td>';       
        $output.='<td>'.'<a href="FirWatch.php?FIR_ID='.$row['FIR_ID'].'"class="btn btn-primary">'.'Show FIR'.'</a>'.'</td>';
        $output.='<td>'.'<a href="EditMe.php?FIR_ID='.$row['FIR_ID'].'"class="btn btn-primary">'.'Edit FIR'.'</a>'.'</td>';        
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
