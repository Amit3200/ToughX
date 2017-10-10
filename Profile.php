<?php include('databases.php');
?>
<?php 
$id = $_GET['FIR_ID'];
if($_POST)
{
    $id = $_GET['FIR_ID'];
    $get=$_GET["tname"];
    $msg="Requested";
    $query3="UPDATE fir SET Status='Requested' where FIR_ID=$id";
  //  $query4="UPDATE fir SET Ref_id_2='$get' where FIR_ID=$id";
    $mysqli->query($query3) or die();
  //  $mysqli->query($query4) or die();
    $msg1="Request Updated";
    header('Location:MSG.php?msg='.urlencode($msg1).'');
    exit;
}
?>
<?php
    $user=$_GET['FIR_ID'];
    $query="Select * from fir where FIR_ID=$user";
    $result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
    if($result=$mysqli->query($query))
{
    while($row=$result->fetch_assoc()){
    $idre=$row['FIR_ID'];    
    $po_id= $row['Police_id'];   
    $po_name= $row['Police_name']; 
    $name= $row['Name']; 
    $fname=$row['Father_name']; 
    $phone= $row['Phone_number']; 
    $address= $row['Address']; 
    $dob= $row['Dob']; 
    $aadhar= $row['Aadhar']; 
    $pan= $row['Pan']; 
    $nationality= $row['Nationality']; 
    $occupation= $row['Occupation']; 
    $religion= $row['Religion']; 
    $caste= $row['Caste']; 
    $doi= $row['DOI']; 
    $poi= $row['POI'];
    $accuname=$row['Accused_Name'];
    $poo= $row['P_Offence'];
    $doo= $row['D_Offence'];
    $too= $row['Time_Offence'];
    $case= $row['IPC'];
    $statement=$row['Statement'];
}
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
  <div class="container-fluid">
           <div class="header">
        <ul class="nav nav-pills pull-right">
          <li ><a href="Police.php">Home</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
      <div >
          <div class="row">
              <div class="col-lg-4 col-md-4 col-xl-4">
                  <table border="1" >
                      <tr>
                          <td><img src="User.jpg" width="200px"></td>
                      </tr>
                  </table>
              </div>
              <div class="col-lg-8 col-md-8 col-xl-8">
                <table class="table table-striped" class="table-responsive">   
                <?php
                $output='<tr>';
                $output.='<td><label >Name</label></td>';
                $output.='<td>'.$name.'</td>';  
                $output.='</tr>';  
                echo $output;
                ?>
                <?php
                $output='<tr>';
                $output.='<td><label >Father\'s Name</label></td>';
                $output.='<td>'.$fname.'</td>';  
                $output.='</tr>';  
                echo $output;
                ?>    
                <?php
                $output='<tr>';
                $output.='<td><label >Phone Number</label></td>';
                $output.='<td>'.$phone.'</td>';  
                $output.='</tr>';  
                echo $output;
                ?>  
                 <?php
                $output='<tr>';
                $output.='<td><label >Aadhar Card Number</label></td>';
                $output.='<td>'.$aadhar.'</td>';  
                $output.='</tr>';  
                echo $output;
                ?>  
                <?php
                $output='<tr>';
                $output.='<td><label>Statement</label></td>';
                $output.='<td>'.$statement.'</td>';  
                $output.='</tr>';  
                echo $output;
                ?>             
                  </table>
          </div>
        </div>
          
            <div class="header">
            
                
        <ul class="nav nav-pills">
            <center>
            <div class="row">
               
        <?php  
            $output='<li class="active col-lg-6 col-md-6"><a href="FirWatch.php?FIR_ID='.$user.'"class="btn btn-primary">'.'Show FIR'.'</a></li>';
            echo $output;
        ?>
                 <?php  
            $output='<li class="active col-lg-6 col-md-6"><a href="progress_page.php?FIR_ID='.$user.'"class="btn btn-primary">See Progress</a></li>';
                echo $output;
                ?>
                </div>
            <form role="form" method="post" action="Profile.php?FIR_ID=<?php echo $user;?>">
                <br>
             <input name="tname" type="text" placeholder="Remarks" class="form-control" required ><br>
            <input type="submit" class="btn btn-primary" value="Request Date"/>
             </form>
                </center>
        </ul>
                
          
        
         <div class="footer">
        <p>&copy; Tough X 2017</p>
          </div>
      </div>
      </div>
      </div>
    </body>
</html>
