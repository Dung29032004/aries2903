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
    label {
        font-size: 18px;
        margin-bottom: 5px; 
        display: block;
    }
    input{
        border-radius: 5px;
        border: 1px solid black;
    }
    input:focus{
        outline: solid #d6377f;
    }
    input[type="text"], input[type="number"], input[type="mail"] {
        padding: 5px;
    }
    input[type="submit"] {
        color: #F3F8FF;
        grid-column: span 2;
        height: 36px;
        background-color: #d6377f;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        margin-bottom: 5px;
        margin-top: 10px;
    }
    input[type="submit"]:hover{
        background-color: #ea4891;
        transition: 0.4s;
    }
    span.error{
        position: absolute;
        padding-top: 2px;
        font-size: 12px;
        color: #ff0000;
    }
    #err{
        color: #ff0000;
        text-align: center;
        position: absolute;
        left: 50%;
        bottom: 3%;
        transform: translate(-50%,-50%);
        width: 100%;
    }
    button{
        color: #F3F8FF;
        grid-column: span 2;
        height: 36px;
        background-color: #d6377f;
        border: none;
        border-radius: 10px;
        font-weight: bold;
        margin-top: 20px;
        width: 100%;
    }
    button:hover{
        background-color: #ea4891;
        transition: 0.4s;
    }
    a{
        text-decoration: none;
        color: #F3F8FF;
    }
</style>
<body>
    <?php
        $tensach = $tacgia = $nhaxuatban = $namxuatban = "";
        $tensachErr = $tacgiaErr = $nhaxuatbanErr = $namxuatbanErr = $messerr = "";
        $isSubmitted = false;

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["tensach"])) {
                $tensachErr = "Chưa điền tên sách";
            } else {
                $tensach = test_input($_POST["tensach"]);
            }

            if (empty($_POST["tacgia"])) {
                $tacgiaErr = "Chưa điền tên tác giả";
            } else {
                $tacgia = test_input($_POST["tacgia"]);
            }

            if (empty($_POST["nhaxuatban"])) {
                $nhaxuatbanErr = "Chưa điền nhà xuất bản";
            } else {
                $nhaxuatban = test_input($_POST["nhaxuatban"]);
            }

            if (empty($_POST["namxuatban"])) {
                $namxuatbanErr = "Chưa điền năm xuất bản";
            } else {
                $namxuatban = test_input($_POST["namxuatban"]);
                if (!preg_match("/^\d{4}$/", $namxuatban)) {
                    $namxuatbanErr = "Vui lòng chỉ điền số và đủ 4 số";
                }
            }

            if (empty($tensachErr) && empty($tacgiaErr) && empty($nhaxuatbanErr) && empty($namxuatbanErr)) {
                $isSubmitted = true;
            } else {
                $messerr = "<span id='err'>Vui lòng điền đầy đủ thông tin</span>";
            }
        }
    ?>

    <div class="container">
        <?php if ($isSubmitted): ?>
            <form>
                <h2>Nhập thành công!</h2>
                <table>
                    <tr>
                        <td>Tên sách:</td>
                        <td><?php echo $tensach; ?></td>
                    </tr>
                    <tr>
                        <td>Tác giả:</td>
                        <td><?php echo $tacgia; ?></td>
                    </tr>
                    <tr>
                        <td>Nhà xuất bản:</td>
                        <td><?php echo $nhaxuatban; ?></td>
                    </tr>
                    <tr>
                        <td>Năm xuất bản:</td>
                        <td><?php echo $namxuatban; ?></td>
                    </tr>
                </table>
                <button onclick="back()">Quay lại</button>
            </form>
        <?php else: ?>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <h2>ĐIỀN THÔNG TIN</h2>
                <table>
                    <tr>
                        <td><label for="tenSach">Tên sách:</label></td>
                        <td>
                            <input type="text" id="tenSach" name="tensach" value="<?php echo $tensach; ?>"><br>
                            <span class="error"><?php echo $tensachErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="tacGia">Tác giả:</label></td>
                        <td>
                            <input type="text" id="tacGia" name="tacgia" value="<?php echo $tacgia; ?>"><br>
                            <span class="error"><?php echo $tacgiaErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="nhaXuatBan">Nhà xuất bản:</label></td>
                        <td>
                            <input type="text" id="nhaXuatBan" name="nhaxuatban" value="<?php echo $nhaxuatban; ?>"><br>
                            <span class="error"><?php echo $nhaxuatbanErr; ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="namXuatBan">Năm xuất bản:</label></td>
                        <td>
                            <input type="text" id="namXuatBan" name="namxuatban" value="<?php echo $namxuatban; ?>"><br>
                            <span class="error"><?php echo $namxuatbanErr; ?></span>
                        </td>
                    </tr>
                </table> 
                <input type="submit" name="submit" value="Gửi">
                <?php echo $messerr;?>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
