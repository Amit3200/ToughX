<?php include('databases.php');
?>
<?php 
if($_POST)
{
    $po_id= $_POST['p_id']; 
    $po_name= $_POST['p_name']; 
    $name= $_POST['c_name']; 
    $fname=$_POST['cf_name']; 
    $phone= $_POST['c_number']; 
    $address= $_POST['c_address']; 
    $dob= $_POST['c_date']; 
    $aadhar= $_POST['c_num']; 
    $pan= $_POST['c_pan']; 
    $nationality= $_POST['c_nationality']; 
    $occupation= $_POST['c_occupation']; 
    $religion= $_POST['c_religion']; 
    $caste= $_POST['c_caste']; 
    $doi= $_POST['doi']; 
    $poi= $_POST['poi'];
    $accuname=$_POST['acc'];
    $poo= $_POST['poff'];
    $doo= $_POST['dof'];
    $too= $_POST['ti'];
    $case= $_POST['case123'];
    $statement=$_POST['statement'];
    
    $query="Insert into fir(Police_id,Police_name,Name,Father_name,Phone_number,Address,Dob, Aadhar,Pan,Nationality,Occupation, Religion,Caste,DOI,POI,Accused_Name,P_Offence,D_Offence,Time_Offence,IPC,Statement) values($po_id,'$po_name','$name','$fname',$phone,'$address','$dob', $aadhar,'$pan','$nationality','$occupation','$religion','$caste','$doi','$poi','$accuname','$poo','$doo','$too','$case','$statement')";
    $mysqli->query($query);
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>First Information Report(FIR)</title>
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
          <li class="active"><a href="Fir.php">Add FIR</a></li>
        </ul>
        <h3 class="text-muted"><img src="ToughX.png" width="150px"></h3>
      </div>
        <div class="row marketing">
        <div class="col-lg-12">
         <h2>Report FIR</h2>
         <form role="form" method="post" action="Fir.php">
         <div class="form-group">
         Police Station Details<hr> 
         <label >Enter Police Station ID</label>
         <input type="number" class="form-control" name="p_id" aria-describedby="emailHelp" placeholder="Enter Police Station No. required">
         </div>
         <div class="form-group">     
         <label >Enter Police Station Name</label>
         <input type="text" class="form-control" name="p_name" aria-describedby="emailHelp" placeholder="Enter Police Station Name" required>
         </div>   
        Personal Details<hr>     
         <div class="form-group">
         <label >Name</label>
         <input type="text" class="form-control" name="c_name" aria-describedby="emailHelp" placeholder="Enter Name" required>
         <small class="form-text text-muted">We'll never share your email with anyone else.</small>
         </div>
         <div class="form-group">
         <label >Father's Name/Husband's Name</label>
         <input type="text" name="cf_name" class="form-control"  placeholder="Enter Father's/Husband's Name" required>
         </div>
        <div class="form-group">
         <label >Phone Number</label>
         <input type="number" name="c_number" class="form-control"  placeholder="Enter Phone number" required>
         </div>
        <div class="form-group"> 
        <label >Address</label>
         <input type="text" name="c_address" class="form-control"  placeholder="Enter address" required>
         </div>
        <div class="form-group"> 
        <label >Date of Birth</label>
         <input type="date" name="c_date" class="form-control"  placeholder="Enter DOB" required min="01-1-1900" max="09-10-2017">
         </div> 
         <div class="form-group"> 
        <label >Aadhar Card No.</label>
         <input type="number" name="c_num" class="form-control"  placeholder="Enter Aadhar Card Number" required>
         </div>     
        <div class="form-group"> 
        <label >Pan Card Number</label>
         <input type="text" name="c_pan" class="form-control"  placeholder="Enter Pan Card Number" required>
         </div>
        <div class="form-group"> 
        <label >Nationality</label>
         <input type="text" name="c_nationality" class="form-control"  placeholder="Enter Nationality" required>
         </div>
        <div class="form-group"> 
        <label >Occupation</label>
         <input type="text" name="c_occupation" class="form-control"  placeholder="Enter Occupation" required>
         </div>
        <div class="form-group"> 
        <label >Religion</label>
         <input type="text" name="c_religion" class="form-control"  placeholder="Enter Religion" required>
         </div>
        <div class="form-group"> 
        <label >Caste</label>
         <input type="text" name="c_caste" class="form-control"  placeholder="Enter Caste" required>
         </div>
         <div class="form-group"> 
        <label >Date of Issue</label>
         <input type="date" name="doi" class="form-control"  placeholder="Enter Date of Issue" required>
         </div>  
          <div class="form-group"> 
        <label >Place of Issue</label>
         <input type="text" name="poi" class="form-control"  placeholder="Enter Place of Issue" required>
         </div>
        Offence Details<hr>
         <div class="form-group"> 
         <label >Enter the Name of Accussed</label>
         <input type="text" name="acc" class="form-control" placeholder="Enter the name of accused">
         </div>
        <div class="form-group"> 
         <label >Enter the Place of Offence</label>
         <input type="text" name="poff" class="form-control" placeholder="Enter the place of offence" required>
         </div>
        <div class="form-group"> 
         <label >Enter the Date of offence</label>
         <input type="date" name="dof" class="form-control" placeholder="Enter the Date of offence" required>
         </div>
        <div class="form-group"> 
         <label >Enter the Time of offence</label>
         <input type="time" name="ti" class="form-control" placeholder="Enter the Time of offence" required>
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
         <label >Enter the statement for offence</label>
            <textarea name="statement" class="form-control" placeholder="Enter the offence" style="resize:none; height:100px;"  required></textarea>
            <small class="form-text text-muted">You will be found guilty if the submitted report is found false and the required steps would be taken against you<sup>**</sup></small>    
         </div>   
         <input type="submit" class="btn btn-primary" value="Generate FIR" />
         </form>
         </div>
       </div>
      <div class="footer">
        <p>&copy; Tough X 2017</p>
        </div>
        </div>
    </body>
</html>