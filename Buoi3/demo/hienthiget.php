
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
html, body {
    margin: 0;
    padding: 0;
    height: 100%; 
    background-color: white;
    font-family: Arial, sans-serif;
}
.container {
    width: 80%;
    max-width: 900px; 
    margin: 50px auto; 
    padding: 20px;
    background-color: white;
    border: 2px solid #000; 
    border-radius: 8px; 
    box-sizing: border-box; 
}
h2 {
    text-align: center;
    color: black; 
    margin-bottom: 20px; 
}

</style>
<body>
    <div class="container">
        <h2>THÔNG TIN SÁCH</h2>
        <p>Tên sách: <?php echo $_GET["tensach"] ?></p>
        <p>Tác giả: <?php echo $_GET["tacgia"] ?></p>
        <p>Nhà xuất bản: <?php echo $_GET["nhaxuatban"] ?></p>
        <p>Năm xuất bản: <?php echo $_GET["namxuatban"] ?></p>      
    </div>
    <a href="formget.php">Quay lại</a>
</body>
</html>