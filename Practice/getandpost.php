<!<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form method="post">
        <label for="">username:</label><br>
        <input type="text" name="username"><br>
        <label for="">password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in">
    </form> -->
    <form action="" method="post">
        <label for="">quantity:</label>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
    <?php
    /*$_GET, $_POST = các biến đặc biệt được sử dụng để thu thập dữ liệu từ một form HTML
                dữ liệu được gửi tới file trong thuộc tính action của <form>
                <form action="some_file.php" method="get">

    $_GET  = Dữ liệu được thêm vào URL
             KHÔNG BẢO MẬT
             Giới hạn ký tự
             Có thể đánh dấu trang với các giá trị
             Các yêu cầu GET có thể được lưu vào bộ nhớ đệm
             Tốt hơn cho trang tìm kiếm

    $_POST = Dữ liệu được đóng gói bên trong body của yêu cầu HTTP
             BẢO MẬT HƠN
             Không giới hạn dữ liệu
             Không thể đánh dấu trang
             Các yêu cầu GET không được lưu vào bộ nhớ đệm
             Tốt hơn cho việc gửi thông tin đăng nhập*/
        // echo "{$_POST["username"]} <br>";
        // echo "{$_POST["password"]} <br> ";
        $item = "pizza";
        $price = 5.99;
        $quantity = $_POST["quantity"];
        $total = null;
        $total = $quantity * $price;
        echo "you have ordered {$quantity} x {$item}s";
        echo "<br> your total is: \${$total}";
    ?>