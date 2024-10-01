<?php
    $pass = "pizza123";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    if(password_verify("pizza123",$hash)){
        echo"you are logged in!";
    }else{
        echo"incorrect pass!";
    }
?>