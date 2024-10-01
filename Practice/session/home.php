<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is home page<br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>

    <?php
        if (isset($_SESSION["username"])) {
            echo $_SESSION["username"] . "<br>";
        } else {
            echo "Username not set.<br>";
        }

        if (isset($_SESSION["password"])) {
            echo $_SESSION["password"] . "<br>";
        } else {
            echo "Password not set.<br>";
        }

        if (isset($_POST["logout"])) {
            session_destroy();
            header("Location: session.php");
            exit();
        }
    ?>
</body>
</html>
