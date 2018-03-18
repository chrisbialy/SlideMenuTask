<?php
    session_start();
    //session_destroy();

    if ($_GET["logout"]==1 AND $_SESSION['id']){ session_destroy();
            
        $message="Wylogowano !";
        
        //echo $_SESSION['id'];
                                      
            }

    include("connection.php");

    if ($_POST['submit']=="OK") {
        
        if (!$_POST['email']) $error.="<br />Proszę podać poprawny email";
            else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) $error.="<br />Proszę podać poprawny email";
                
        if (!$_POST['password']) $error.="<br />Proszę podać hasło";
            else {
                
                if (strlen($_POST['password'])<8) $error.="<br />Wprowadź hasło zawierające conajmniej 8 znaków";
                if (!preg_match('`[A-Z]`', $_POST['password'])) $error.="<br />Hasło musi zawierać minimum jedną wielką literę";
                
            }
        
        if ($error) $error = "Wprowadzone dane logowania są błędne:".$error;
        
        else {
            
            
            $query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['email'])."'"; //The mysqli_real_escape_string() function escapes special characters in a string for use in an SQL statement.



            $result = mysqli_query($link, $query); // The mysqli_query() function performs a query against the database.
            
            $results = mysqli_num_rows($result);    //The mysqli_num_rows() function returns the number of rows in a result set.
            
            if ($results) $error = "Ten adres mailowy został już zarejestrowany. Czy chcesz się zalogować?";
            else {
                
              
               $query = "INSERT INTO `users` (`name`,`email`, `password`) VALUES ('".mysqli_real_escape_string($link, $_POST['name'])."','".mysqli_real_escape_string($link, $_POST['email'])."','".md5(md5($_POST['email']).$_POST['password'])."')";
                
                mysqli_query($link, $query);
                
               echo "Zostałeś zarejestrowany w systemie !";
                
                $_SESSION['id']=mysqli_insert_id($link); 
                // The mysqli_insert_id() function returns the id (generated with AUTO_INCREMENT) used in the last query.
                
               // print_r($_SESSION);
                
                // header("Location:mainpage.php");
            }
            
        }
        
    }

    if ($_POST['submit']=="ZALOGUJ SIĘ") {
        
        $query = "SELECT * FROM users WHERE email='".mysqli_real_escape_string($link, $_POST['loginemail'])."' AND password='" .md5(md5($_POST['loginemail']) .$_POST['loginpassword']). "' LIMIT 1";
        
          
        $result = mysqli_query($link, $query);
        
        $row = mysqli_fetch_array($result);
        
        //The mysqli_fetch_array() function fetches a result row as an associative array, a numeric array, or both.
        
        if ($row) {
            
            $_SESSION['id']=$row['id'];
            // getting an ID of the user just found in the database
            
            //print_r($_SESSION);
            //Redirect to logged in page
            header("Location:mainpage.php");
            
        } else {
            
             $error =  "Użytkownik o podanym adresie email nie istnieje w systemie. Spróbuj ponownie.";
            
        }
        
    }


?>