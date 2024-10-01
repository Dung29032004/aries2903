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
form {
    display: flex;
    flex-direction: column;
    gap: 15px; 
}
label {
    font-size: 18px;
    margin-bottom: 5px; 
    display: block;
}
input[type="text"], input[type="number"] {
    padding: 10px;
    font-size: 16px;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type="submit"] {
    padding: 10px 20px;
    font-size: 16px;
    background-color: #000;
    color: #fff;
    border: none;
    border-radius: 4px; 
    cursor: pointer;
}
</style>
<body>
    <div class="container">
    <h1>ĐIỀN THÔNG TIN:</h1>
        <form action="hienthiget.php" method="get">
            <label for="">Tên sách:
            <input type="text" name="tensach"></label>
            <label for="">Tác giả:
            <input type="text" name="tacgia"></label>
            <label for="">Nhà xuất bản:
            <input type="text" name="nhaxuatban"></label>
            <label for="">Năm xuất bản:
            <input type="text" name="namxuatban"></label>
            <input type="submit" value="Gửi">
        </form>
    </div>
</body>
</html>