<!DOCTYPE html>
<html>
<head>
<title>Home</title>  
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
<!-- Bootstrap CSS -->
<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<style>
body {
    font-family: "Lato", sans-serif;
    transition: background-color .5s;
    overflow-y: hidden;
    overflow-x:hidden;
}
#main{
    background-image: url('img1.jpg')  ;
    background-size: cover;
    background-attachment: fixed;
    min-height: 100vh;
    background-position: center center;
    margin-bottom: 0px;
   }
  
     @media screen and (max-width: 750px) {
       .lead{
           font-size: 10px;
       }
       .guideline{
           top:2px;
           font-size:20px;
       }

       
    }
.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
}

.sidenav a:hover {
    color: #f1f1f1;
}
.contents{
    
        background-color: rgba(0,0,0,0.5);
        border-radius: 20px;
}
.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}
.quote {
        
  -webkit-animation-duration: 4s;
  
  

    }
    .quotewriter{
         -webkit-animation-duration: 4s;
    }

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="Police.php">Police Stations View</a>
  <a href="Fir.php">Fir Generation</a>
  <a href="UserLogin.php">Candidate Sign-in</a> 
  <a href="LoginForm1.php">Police Sign-in</a>
  <a href="PanelLogin.php">Panel Sign-in</a>
  <a href="AdminLogin.php">Admin Sign-in</a>     
  
</div>
<header>
<span style="font-size:30px; color:white; cursor:pointer; float:left; margin-left:2%;" onclick="openNav()">&#9776;</span>
<span><img  src="ToughX.png"  width=10% style="float:right; margin-right:0.5%; margin-top:0.5%" ></span>
</header>
<div id="main" class="justify-content-center align-items-center">
                         
        <div class="container">
        <br>
        <br>
        <br>
           <div class="contents">
               <h1 class="display-3  text-center animated bounce" style="color:white; font-weight: bold; font-family:Poppins; text-shadow: 2px 2px rgba(0,0,0,0.9);"><p>ToughX</p>
                <p class=" guideline" style="font-size:.3em; color:floralwhite">Tough is Easy</p>
            </h1>
            <center>
                <br>
            <blcokquote class="blockquote ">
               <p  class=" lead text-center animated bounceInLeft quote" style="color:#fff5ed; font-size:1.5em ; font-family:Poopins;"><strong>"The keystone to justice <br>is the belief that the <br>legal system treats all fairly."</strong></p>
            <p  class="animated bounceInRight quotewriter" style="font-size:1.5rem; color:cornsilk;  font-family:Poopins; ">-Janet Reno</p>
                </blcokquote>
            </center>
               </div>
        </div>
    <h1 class="display-3  text-center animated bounce" style="color:white; font-size:25px; font-weight: bold; font-family:Poppins; text-shadow: 2px 2px rgba(0,0,0,0.9);"><br>ToughX presents QuiCkiT...<br></h1>
      <br><br><br><br><div>
    <footer style="margin-buttom:0%; color:white; background-color:#535353;">
        <p class="pull-right"> <font size="5">Copyright &copy;2017 ToughX</font><br><br></p>
    
    </footer>
    </div>
    </div>
  
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
    document.body.style.backgroundColor = "white";
}
</script>
     
</body>
</html> 
