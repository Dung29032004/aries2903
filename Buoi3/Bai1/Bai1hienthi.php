
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        color: black;
        margin: 0;
        padding: 0;
        overflow: hidden;
        height: 100vh;
        background-color: #F3F8FF;
        font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    form{
        background-color: #F3F8FF;
        display: flex;
        flex-direction: column;
        padding: 40px;
        border: 2px solid #8d5f7be9;
        border-radius: 10px;
        position: relative;
    }
    h2{
        text-align: center;
    }
    td, th {
      padding: 14px 6px;
    }
    tr td:first-child{
        text-align: right;
        color: black;
    }
    a:hover{
        background-color: #ea4891;
        transition: 0.4s;
    }
    a{
        text-decoration: none;
        color: #F3F8FF;
        grid-column: span 2;
        height: auto;
        background-color: #d6377f;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        margin-top: 20px;
        width: 100%;
    }
    p{
        text-align: center;
    }
</style>
<body>
    <form>
        <h2>Nhập thành công!</h2>
        <table>
            <tr>
                <td>Tên sách:</td>
                <td><?php echo $_POST["tensach"] ?></td>
            </tr>
            <tr>
                <td>Tác giả:</td>
                <td><?php echo $_POST["tacgia"] ?></td>
            </tr>
            <tr>
                <td>Nhà xuất bản:</td>
                <td><?php echo $_POST["nhaxuatban"] ?></td>
            </tr>
            <tr>
                <td>Năm xuất bản:</td>
                <td><?php echo $_POST["namxuatban"] ?></td>
            </tr>
        </table>
        <a href="Bai1form.php"><p>Quay lại</p></a>
    </form>
</body>
</html>