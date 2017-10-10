<?php include('databases.php');
?>
<?php
$id = $_GET['FIR_ID'];
    $date='0-0-0';
$query ="SELECT * FROM panel where FIR_ID=$id";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
if($result=$mysqli->query($query))
{
    while($row=$result->fetch_assoc())
    {
    $idre=$row['FIR_ID'];    
    $date=$row['C_Date'];    
    }
}
if($date=='0-0-0')
{
    $output='<div class="alert alert-danger"><strong>Date Not alloted</strong></div>';
    echo $output;
}
?>

<?php
$id = $_GET['FIR_ID'];
$query2 ="Select * from fir where FIR_ID=$id";
$result2=$mysqli->query($query2)  or die($mysqli->error.__LINE__);
if($result2=$mysqli->query($query2))
{
    while($row=$result2->fetch_assoc())
    {
    $idre=$row['FIR_ID'];    
    $name= $row['Name']; 
    $address= $row['Address']; 
    $statement=$row['Statement'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Progress</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
        <style>
        .containter{
            width:100%;
        }
        .progressbar{
            counter-reset:step;
        }
        .progressbar li{
            list-style-type: none;
            float: left;
            width:33.33%;
            position:relative;
            text-align: center;
            
        }
        .progressbar li:before{
            content:counter(step);
            counter-increment:step;
            width:30px;
            height: 30px;
            line-height:30px;
            border: 1px solid #ddd;
            display: block;
            margin: 0 auto 10px auto;
            text-align: center;
            border-radius:50%;
            background-color: white;
        }    
        .progressbar li:after{
            content: '';
            position: absolute;
            width:100%;
            height: 1px;
            background-color: #ddd;
            top: 15px;
            left:-50%;
            z-index:-1;

        }

        .progressbar li:first-child:after{
            content: none;
        }
        .progressbar li.active:before{
            border-color: green;
        }

        .progressbar li.active + li:after{
            background-color:  green;
        }
        
    </style>
</head>
<body>
         <header>
        <ul class="nav nav-pills" style="float:left; margin-top:1%; margin-left:2%">
          <li ><a href="Police.php" class="btn btn-primary">Home</a></li>
        </ul>
             <div class="text-muted" style="float:right;  margin-top:1%; margin-right:2%"><img src="ToughX.png" width="150px"></div>
    </header>
    <br>
    <br>
    <br>
    <hr>
    <div class="container animated fadeIn">
        <Center>
        <ul class="progressbar ">
            <li class="active">Applied</li>
             <li class="active">Request</li>
            <li>Alloted Date</li>
        </ul>
    </Center><br><hr><br>
        <center>
    <div class="form-group">
        <label><p align="center"><b><font face="Century Gothic" size="6">Details</font></b></p></label>        
    </div>   
        </center>
    <div class="container">
         <table class="table table-striped" class="table-responsive">
         <?php 
        $output ='<tr>';
        $output .='<th>'.'Name'.'</th>';
        $output .='<td>'.$name.'</td>';
        $output .='</tr>';
        $output .='<tr >';
        $output .='<th >'.'FIR ID'.'</th>';
        $output .='<td>'.$idre.'</td>';
        $output .='</tr>';  
        $output .='<tr>';
        $output .='<th >'.'Date'.'</th>';
        $output .='<td >'.$date.'</td>';
        $output .='</tr>';     
               $output .='<tr>';
             $output .='<th >'.'Address'.'</th>';
        $output .='<td >'.$address.'</td>';
        $output .='</tr>';  
               $output .='<tr>';
             $output .='<th >'.'Statement'.'</th>';
        $output .='<td >'.$statement.'</td>';
        $output .='</tr>';  
        echo $output;
        ?>
		</table>
    </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
          </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstsrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    </div>
</body>
</html>