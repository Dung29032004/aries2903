<!-- cookie = information about a user stored in a user's web-browser
        targeted advertisements, browsing preferences, and
        other non-sensitive data -->
<?php
    setcookie("fav_food","pizza",time() + (86400 * 2), "/");
    setcookie("fav_drink","coffe",time() + (86400 * 3), "/");
    setcookie("fav_dessert","ice cream",time() + (86400 * 4), "/");

    // setcookie("fav_food","pizza",time() - 0, "/");
    // setcookie("fav_drink","coffe",time() - 0, "/");
    // setcookie("fav_dessert","ice cream",time() -0, "/");

    // foreach($_COOKIE as $key => $value){
    //     echo"{$key} = {$value} <br>";
    // }
    if(isset($_COOKIE["fav_food"])){
        echo"BUY SOME {$_COOKIE["fav_food"]} !!!";
    }else{
        echo"I don't know your favourite food";
    }
?>