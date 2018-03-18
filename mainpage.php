<?php 

    session_start(); //A session is a way to store information (in variables) to be used across multiple pages.
                    // Session variables hold information about one single user, and are available to all pages in one application.
    include("connection.php");

    $query="SELECT * FROM users where id='".$_SESSION['id']."' LIMIT 1";
    
    $result = mysqli_query($link, $query);
    
    $row = mysqli_fetch_array($result); //The mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.
    
    $id = $row ['id'];
    $name = $row ['name'];
    $email = $row ['email'];
    $password = $row ['password'];
    
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Moje Konto</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
      
    <!-- mainpage_style.css -->
      
    <link rel="stylesheet" type="text/css" href="css/mainpage_style.css">  
      
      
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    
  </head>
  
<body data-spy="scroll" data-target=".navbar-collapse">

  <div class="navbar navbar-default navbar-fixed-top">
  
  	<div class="container">
  	
  		<div class="navbar-header pull-left">
  			
  			<a class="navbar-brand">Moje Konto</a>
  			
  		</div>
  		
  		<div class="pull-right">
  		    <ul class="navbar-nav nav">
            
                <li><a href="index.php?logout=1">Wyloguj</a> </li>
            
            </ul>
  			
  			
  		</div>
  		
  	</div>	
  	
  </div>
  
  
 <div class="container contentContainer" id="topContainer">
  		<div class="row">
  		
  			<div class="col-xs-7 col-sm-6 col-lg-8" id="topRow">
 			 
 			 
                <p class="text-left lead" id="">ID: <?php echo $row['id']; ?></p>
                <p class="text-left lead" id="">EMAIL: <?php echo $row['email']; ?></p>
                <p class="text-left lead" id="">HASŁO: <?php echo $row['password']; ?></p>
                <p class="text-left lead" id="">Zmiana Imienia: Wpisz imię i kliknij Wyloguj</p>
 			 </div>
    
		</div>
		
            <div id="wrapper">
               <input type ="text" name="name" id="someid"  size="30" value="<?php echo $row['name']; ?>" class="" />
            </div>
     
     
     
  </div>
  
	

    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
    <script src="js/bootstrap.min.js"></script>
    
    <script>
    
    
		$(".contentContainer").css("min-height",$(window).height());
        
        $("input").css("height",$(window).height()-400);
    
        $("input").keyup(function() { 
        
            $.post("updatename.php", {name:$("input").val()} ) ;
            
        });
        
       
    </script>
    
  </body>
</html>