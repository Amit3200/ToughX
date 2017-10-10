<?php include('databases.php');
?>
<?php 
if($_POST)
{
    $f_id= $_POST['f_id']; 
    $p_date= $_POST['p_name']; 
    $dt = strtotime($p_date);
    $day = date("D", $dt);
   if ($day=='SAT' || $day=='SUN')
   {
    echo date('Y-m-d', strtotime($p_date. ' + 2 days'));
   }
    $j_name=$_POST['j_name'];
    $j_id= $_POST['j_id']; 
    $case= $_POST['case123'];
    $statement=$_POST['statement'];
    $query2="Insert into panel values('$f_id','$p_date',$j_id,'$case','$statement')";
    $mysqli->query($query2);
    $query3 ="Insert into judges values('$j_name',$j_id,'$f_id','$p_date','$case')";
    $mysqli->query($query3);
    $output='<div class="alert alert-success"><strong>Successfuly allotted</strong></div>';
    echo $output;
}
?>
<?php
$query="Select * from judge";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
?>

<?php
$query1="Select * from fir";
$result1=$mysqli->query($query1)  or die($mysqli->error.__LINE__);
?>

<?php
$query4="Select * from judges";
$result2=$mysqli->query($query4)  or die($mysqli->error.__LINE__);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Panel Security Allotment</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
        
        <div class="col-lg-5">
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
         <div class="col-lg-7">
    <table class="table table-striped" class="table-responsive" >
			    <tr>
                <th>FIR ID</th>
                <th>Name</th>
                <th>Place of offence</th>
                <th>IPC</th>     
                    <th>Application</th>
                    <th>Statement</th>
                    <th>Operations</th>           
                
             </tr>
<?php 
        $j=0;
            if($result1->num_rows>0)
            {
            while($row=$result1->fetch_assoc()){
                $fun="";
                
        $output ='<tr>';
        $output.='<td>'.$row['FIR_ID'].'</td>';
        $output.='<td>'.$row['Name'].'</td>';
        $output.='<td>'.$row['P_Offence'].'</td>';
        $output.='<td>'.$row['IPC'].'</td>';  
        $output.='<td>'.$row['Status'].'</td>';           
        $output.='<td>'.'<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">See Statement</button>'.'</td>';   
        $fun.=$row['Statement'];
        $output.='<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Statement</h4>
      </div>
      <div class="modal-body">
        <p>'.$fun.'</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>';
        $output.='<td>'.'<a href="FirWatch.php?FIR_ID='.$row['FIR_ID'].'"class="btn btn-primary">'.'Show FIR'.'</a>'.'</td>'; 
        $output.='</tr>';
            echo $output;
                $j=$j+1;
            }
            }
            else{
                echo "Sorry Doesn't Succeed";
            }
        ?>
        
		</table>

<!-- Trigger the modal with a button -->

<!-- Modal -->
        </div>
        <div class="col-lg-12">
            <table class="table table-striped" class="table-responsive">
			            <tr>
                <th>Judge ID</th>
                <th>Judge Name</th>
                <th>Date Alloted</th>
                </tr>
<?php 
            if($result2->num_rows>0)
            {
    while($row=$result2->fetch_assoc()){
        $output ='<tr>';
        $output .='<td>'.$row['Judge_Id'].'</td>';
        $output.='<td>'.$row['Judge_Name'].'</td>';
        $output.='<td>'.$row['Date_Alloted'].'</td>';
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
        <div class="row marketing">
        <div class="col-lg-12">
            <h2>Case Allotment</h2>
         <form role="form" method="post" action="PanelAllot.php">
         <div class="form-group">
         Details<hr> 
         <label >Enter FIR_ID</label>
         <input type="text" class="form-control" name="f_id" aria-describedby="emailHelp" placeholder="Enter FIR_ID" required>
         </div>
         <div class="form-group">     
         <label >Enter the Date</label>
         <input type="date" class="form-control" name="p_name" aria-describedby="emailHelp" placeholder="Enter Date" required min="09-10-2017" max="31-12-2040">
         </div>   
         <div class="form-group">
         <label >Judge_Id</label>
         <input type="number" class="form-control" name="j_id" aria-describedby="emailHelp" placeholder="Enter Name" required>
         </div>
         <div class="form-group">
         <label >Judge Name</label>
         <input type="text" name="j_name" class="form-control"  placeholder="Enter Name" required>
         </div>
        <div class="form-group"> 
        <big><big><label>Choose the Level of Case</label></big></big>
        <hr>    
        <br><label>Choose the Case Level</label><br>
      <select name="case123" style="width:400px; height:30px; font-size:18px; border-radius:5px;" >
          <option value="A+"><label>A+-High Level &amp; Complicated Case</label></option>
          <option value="A"><label>A-High Level Case</label></option>
          <option value="B+"><label>B+-Sub Level Complicated Cases</label></option>
          <option value="B"><label>B-Sub Level Cases</label></option>
          <option value="C+"><label>C+-Casual Complicated Cases</label></option>
          <option value="C"><label>C-Civil,Casual Cases</label></option>
          <option value="E"><label>E-Fast Track Cases</label></option>
      </select>
        </div>    
        <div class="form-group"> 
         <label>Statement of Jury</label>
            <textarea name="statement" class="form-control" placeholder="Enter the offence" style="resize:none; height:100px;"  required></textarea>
            <small class="form-text text-muted">You will be found guilty if the submitted report is found false and the required steps would be taken against you<sup>**</sup></small>    
         </div>   
         <input type="submit" class="btn btn-primary" value="Allot" />
         </form>
         </div>
       </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
        </div>
        </div>
    </body>
</html>