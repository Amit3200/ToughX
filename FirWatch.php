<?php include('databases.php');
?>
<?php
$id=$_GET['FIR_ID'];
$query="select * from fir where FIR_ID=$id";
$result=$mysqli->query($query)  or die($mysqli->error.__LINE__);
if($result=$mysqli->query($query))
{
    while($row=$result->fetch_assoc())
    {
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
$query2="select * from policestation where P_ID=$po_id";
$result2 = $mysqli->query($query2) or die($mysqli->error.__LINE__);
if($result2=$mysqli->query($query2))
{
    while($row=$result2->fetch_assoc()){
        $p_name=$row['P_Name'];
        $p_district=$row['P_District'];
        $p_city=$row['P_City'];
        $p_city=$row['P_State'];
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FIR View</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
      <style>
         table th
          {
            background: rgba(51,51,51,0.5);
            color:black;
            font-family: Asap,sans-serif;
            font-size: 15px;  
          }
          table td
          {
              background: rgba(131,140,137,0.4);
             font-family: Asap,sans-serif;
          }
      </style>
  </head>
  <body>
       <div class="container-fluid">
      <div class="header">
        <ul class="nav nav-pills pull-right">
          <li><a href="Police.php">Home</a></li>
          <li><a href="Fir.php">Add FIR</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
       
      <div class="row marketing">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xm-12 col-xl-12"  id=customers>
   <table border="1" class="table" class="table table-responsive">
       <tr>
           <th scope="row" colspan="6" ><u><h1 align="center">First Information Report</h1></u></th>   
       </tr>   
       <tr>
       <th scope="row" colspan="2">Police Station Id</th>
       <th scope="row">Police Station Name</th>
       <th scope="row">Place</th>
       <th scope="row">Date of Issue</th>
       <th scope="row">District</th>
       </tr>
       <?php 
           $output='<tr>';
           $output.='<td colspan="2">'.$po_id.'</td>';
           $output.='<td>'.$p_name.'</td>';
           $output.='<td>'.$p_city.'</td>';
           $output.='<td>'.$doi.'</td>';
           $output.='<td>'.$p_district.'</td>';
           $output.='</tr>';
    echo $output;
       ?>
       <?php 
        $output='<tr>';
        $output.='<th scope="row" colspan="2">'.'Name'.'</th>';
        $output.='<td>'.$name.'</td>';
        $output.='<th scope="row" colspan="2">'.'DOB'.'</th>';
        $output.='<td>'.$dob.'</td>';
       $output.='</tr>';
    echo $output;
       ?>
        <?php 
       $output='<tr>';
       $output.='<th scope="row" colspan="2">'.'Father\'s Name'.'</th>';
       $output.='<td>'.$fname.'</td>';
       $output.='<th scope="row" colspan="2">'.'Phone'.'</th>';  
       $output.='<td>'.$phone.'</td>';
       $output.='</tr>';
    echo $output;
       ?>
        <?php 
       $output='<tr>';
        $output.='<th scope="row" colspan="2">'.'Aadhar Card No.'.'</th>';
        $output.='<td colspan="2">'.$aadhar.'</td>';
        $output.='<th scope="row">'.'Pan Card No..'.'</th>';
        $output.='<td>'.$pan.'</td>';
        $output.='</tr>';
       echo $output;
         ?>
        <?php 
       $output='<tr>';
           $output.='<th scope="row">'.'Address'.'</th>';
           $output.='<td colspan="5">'.$address.'</td>';
       $output.='</tr>';
       echo $output;
       ?>
       <?php 
       $output='<tr>';
           $output.='<th scope="row">'.'Nationality'.'</th>';
           $output.='<td>'.$nationality.'</td>';
           $output.='<th scope="row">'.'Religion'.'</th>';
           $output.='<td>'.$religion.'</td>';
           $output.='<th scope="row">'.'Caste'.'</th>';
           $output.='<td>'.$caste.'</td>';
        $output.='</tr>';
       echo $output;
       ?>
       <?php 
           $output='<tr>';
           $output.='<th scope="row">'.'FIR ID'.'</th>';
           $output.='<td>'.$idre.'</td>';
           $output.='<th scope="row">'.'Issue Date'.'</th>';
           $output.='<td>'.$doi.'</td>';
           $output.='<th scope="row">'.'Place of Issue'.'</th>';
           $output.='<td>'.$poi.'</td>';
           $output.='</tr>';
        echo $output;
       ?>
       <?php 
           $output='<tr>';
           $output.='<th scope="row">'.'Accused Name'.'</th>';
           $output.='<td>'.$accuname.'</td>';
           $output.='<th scope="row">'.'IPC'.'</th>';
           $output.='<td>'.$case.'</td>';
           $output.='<th scope="row">'.'Category'.'</th>';
       if($case=='K301')
           $sub='Murder';
       else if($case=='K302')
           $sub='Kidnap';
       else if($case=='K303')
           $sub='Harrasement';
       else if($case=='K304')
           $sub='Theft';
       else if($case=='K305')
           $sub='Theft & Murder';
       else if($case=='K306')
           $sub='Theft & Kidnap';
       else if($case=='K307')
           $sub='Theft & Harrasement';
       else if($case=='K308')
           $sub='Harrasement & Murder';
       else if($case=='K309')
           $sub='Harrasement & Kidnap';
       else if($case=='K310')
           $sub='Kidnap & Murder';
           $output.='<td>'.$sub.'</td>';
          $output.='</tr>';
        echo $output;
       ?>
       <?php 
           $output='<tr>';
           $output.='<th scope="row" colspan="2">Date of offence</th>';
           $output.='<td>'.$doo.'</td>';
           $output.='<th scope="row" colspan="2">Place of offence</th>';
           $output.='<td>'.$poo.'</td>';
        $output.='</tr>';
        echo $output;
         ?>
       <?php 
           $output='<tr>';
            $output.='<th scope="row">Statement</th>';
           $output.='<td colspan="5">'.$statement.'</td>';
        $output.='</tr>';
        echo $output;
         ?>
       <?php 
           $output='<tr>';
         $output.='<th scope="row">Sections</th>';
         $output.='<td colspan="5">(i)The Section contains the details of IPC which is implemented by the police on the accuesed person</td>';
        $output.='</tr>';
        echo $output;
         ?> 
       <?php 
           $output='<tr>';
            $output.='<th scope="row" colspan="3"><p align="center">Signature of Inspector/Stamp of Police Station</p></th>';
            $output.='<th scope="row" colspan="3"><p align="center">Signature of Candidate</p></th>';
       $output.='</tr>';
         echo $output;
         ?> 
      <?php 
           $output='<tr>';
           $output.='<td scope="row" colspan="3">'.'<p align="center"><img src="Implemented.png" width="100px"></p>'.'</td>';
           $output.='<td scope="row" colspan="3">'.'&nbsp;'.'</td>';
          $output.='</tr>';
         echo $output;
         ?> 
        </table>
          </div>
          <button onclick="demoFromHTML()">Click to download</button>
           </div>
      </div>
    </body>
</html>
