<?php include("login.php"); ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
      
  
    <title>Super Paczka</title>

    <!-- Bootstrap -->

      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      
       <!-- index_style.css -->
      
       <link rel="stylesheet" type="text/css" href="css/index_style.css">
       
      

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
      <style>
      
      #topContainer{
   			background-image:url("background.jpg" !important;
   		   		}
      </style>
      
      
      
    
  </head>
<body id="topContainer">

<div id="myNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav2()">&times;</a>
  <div class="hexagon_img2 DivSpace2">
        
        
             
            </div>
    
            <p class="text-center p_style">ZALOGUJ SIĘ</p>
   
    
    
			<form  method="post"> 
  			
  				<div class="form-group DivSpace">
  				
  					<input type="email" name="loginemail" placeholder="LOGIN" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
  																								   
  				</div>
  				
  				<div class="form-group DivSpace">
  				
  					<input type="password" name="loginpassword" placeholder="HASŁO" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  																											
  				</div>
                
                
                <div class="">
  				<a class="dropMenu_a" href="#">Zapomniałem Hasła</a>
  				</div>
                
  				<div id="wrapper">
  				<input type="submit" name= "submit" class="btn btn-primary " value="ZALOGUJ SIĘ">
  				</div>
  			</form>
    
                    <p class="text-center ">Nie ma Pan/Pani konta ?</p>
    
                <div id="wrapper">
                    <a href="register.php" id="btn_account" class="btn btn-basic ">UTWÓRZ KONTO</a>
  				 <!-- <input type="submit" name= "submit" class="btn btn-basic " value="UTWÓRZ KONTO">-->
  				</div>
</div>

    
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">SuperPaczka</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
     <li class="nav-item active d-none d-lg-block">
        <span class="nav-link"> Witamy,</span>
      </li>
      <li class="nav-item active d-none d-sm-block">
        <a class="nav-link" href="#" style="color: #1891F2"><span onclick="openNav()">Zaloguj Się</span></a>
      </li>
        <li class="nav-item d-block d-sm-none">
        <a class="nav-link" href="#" style="color: #1891F2"><span onclick="openNav2()">Zaloguj Się</span></a>
      </li>
        
     <li class="nav-item d-none d-lg-block">
        <span class="nav-link"> |</span>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php" style="color: #1891F2">Zarejestruj Się</a>
      </li>
        <li class="nav-item d-none d-lg-block liSpace" ;>
        <a class="nav-link" href="#"> </a>
      </li>   
      <li class="nav-item d-none d-lg-block " ;>
        <a class="nav-link" href="#">Tel </a>
      </li>  
        
      <li class="nav-item d-none d-lg-block" style="";>
        <a class="nav-link" href="#" style="color: #1891F2; text-align: right;">Ten tekst zmienisz w ADMINISTRACJA /Dane Twojej firmy / Dane kontaktowe </a>
      </li>    
     
    </ul>
  </div>
</nav>
    
    
    <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    
  
        
         <div class="hexagon_img DivSpace2">
        
                 <svg 
                xmlns=" http://www.w3.org/2000/svg";;
                xmlns:xlink=" http://www.w3.org/1999/xlink";;
               width="17" height="29px">
                <path fill-rule="evenodd" fill="rgb(255,255,255)" 
                d="M15.157,15.011 L11.627,13.340 C11.294,13.182 11.087,12.865 11.087,12.512 L11.087,11.329 C11.172,11.230 11.261,11.119 11.353,10.996 C11.811,10.383 12.178,9.701 12.444,8.966 C12.966,8.740 13.304,8.251 13.304,7.700 L13.304,6.300 C13.304,5.963 13.171,5.636 12.935,5.381 L12.935,3.520 C12.956,3.327 13.037,2.181 12.162,1.236 C11.403,0.416 10.171,0.000 8.500,0.000 C6.829,0.000 5.597,0.416 4.838,1.235 C3.963,2.181 4.044,3.327 4.065,3.520 L4.065,5.381 C3.829,5.636 3.696,5.963 3.696,6.300 L3.696,7.700 C3.696,8.126 3.900,8.523 4.249,8.788 C4.587,10.058 5.296,11.014 5.544,11.321 L5.544,12.479 C5.544,12.818 5.348,13.129 5.035,13.291 L1.738,14.994 C0.666,15.548 0.000,16.610 0.000,17.767 L0.000,18.900 C0.000,20.561 5.560,21.000 8.500,21.000 C11.440,21.000 17.000,20.561 17.000,18.900 L17.000,17.835 C17.000,16.632 16.294,15.549 15.157,15.011 ZM16.261,18.900 C16.261,19.375 13.522,20.300 8.500,20.300 C3.478,20.300 0.739,19.375 0.739,18.900 L0.739,17.767 C0.739,16.867 1.257,16.040 2.091,15.609 L5.388,13.906 C5.940,13.621 6.283,13.074 6.283,12.479 L6.283,11.073 L6.197,10.975 C6.188,10.965 5.282,9.927 4.936,8.503 L4.903,8.364 L4.777,8.287 C4.563,8.156 4.435,7.937 4.435,7.700 L4.435,6.300 C4.435,6.104 4.523,5.921 4.682,5.784 L4.804,5.680 L4.804,3.500 L4.801,3.454 C4.800,3.445 4.674,2.474 5.394,1.697 C6.007,1.035 7.052,0.700 8.500,0.700 C9.943,0.700 10.986,1.033 11.599,1.690 C12.319,2.460 12.200,3.446 12.199,3.454 L12.196,5.680 L12.318,5.784 C12.477,5.921 12.565,6.104 12.565,6.300 L12.565,7.700 C12.565,8.006 12.354,8.273 12.040,8.365 L11.856,8.418 L11.796,8.592 C11.549,9.320 11.197,9.993 10.749,10.591 C10.639,10.738 10.533,10.869 10.440,10.969 L10.348,11.068 L10.348,12.512 C10.348,13.131 10.711,13.688 11.296,13.965 L14.827,15.637 C15.711,16.056 16.261,16.898 16.261,17.835 L16.261,18.900 Z"/>
            </svg>
             
            </div>
    
            <p class="text-center p_style">ZALOGUJ SIĘ</p>
   
    
    
			<form  method="post"> 
  			
  				<div class="form-group DivSpace">
  				
  					<input type="email" name="loginemail" placeholder="LOGIN" class="form-control" value="<?php echo addslashes($_POST['loginemail']); ?>" />
  																								   
  				</div>
  				
  				<div class="form-group DivSpace">
  				
  					<input type="password" name="loginpassword" placeholder="HASŁO" class="form-control" value="<?php echo addslashes($_POST['loginpassword']); ?>" />
  																											
  				</div>
                
                
                <div class="">
  				<a class="" href="#">Zapomniałem Hasła</a>
  				</div>
                
  				<div id="wrapper">
  				<input type="submit" name= "submit" class="btn btn-primary " value="ZALOGUJ SIĘ">
  				</div>
  			</form>
    
                    <p class="text-center ">Nie ma Pan/Pani konta ?</p>
    
                <div id="wrapper">
                    <a href="register.php" id="btn_account" class="btn btn-basic ">UTWÓRZ KONTO</a>
  				 <!-- <input type="submit" name= "submit" class="btn btn-basic " value="UTWÓRZ KONTO">-->
  				</div>
    
   </div>
    
    
    
    
    
    
    
    
    
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <!--  <script src="js/bootstrap.min.js"></script>-->
    
    
    
    
    
    
<script>
    
     	$(".contentContainer").css("min-height",$(window).height());
    
            function openNav2() {
                document.getElementById("myNav").style.height = "100%";
            }

            function closeNav2() {
                document.getElementById("myNav").style.height = "0%";
            }
    
   
        
        
            function openNav() {
                document.getElementById("mySidenav").style.width = "350px";
            }

            function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
            }
    
    
</script>
     
</body>
</html>
