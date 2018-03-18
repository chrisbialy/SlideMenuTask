<?php

    session_start();

    include("connection.php");

        $query="UPDATE users SET name='".mysqli_real_escape_string($link, $_POST['name'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
        
        mysqli_query($link, $query);
        print_r($_SESSION);

?>
<form method="post">
    
    <input name="name" />
    <input type="submit" />
    
</form>