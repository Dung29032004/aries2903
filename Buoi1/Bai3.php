<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Phép Tính Trên Hai Số</title>
</head>
<style>
    table {
            width: 500px;
            border-collapse: collapse;
        }
        table, th, td {
            border: 2px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
</style>
<body>
    <h2>PHÉP TÍNH TRÊN HAI SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td>Chọn phép tính:</td>
                <td>
                    <input type="radio" name="operation" value="add" required>Cộng
                    <input type="radio" name="operation" value="subtract" required>Trừ
                    <input type="radio" name="operation" value="multiply" required>Nhân
                    <input type="radio" name="operation" value="divide" required>Chia
                </td>
            </tr>
            <tr>
                <td>Số thứ nhất:</td>
                <td><input type="number" name="number1" required></td>
            </tr>
            <tr>
                <td>Số thứ hai (nếu cần):</td>
                <td><input type="number" name="number2"></td>
            </tr>
            <tr>
                <td><input type="submit" name="calculate" value="Tính"></td>
                <td>
                    <?php
                        if (isset($_POST['calculate'])) {
                            $num1 = $_POST['number1'];
                            $num2 = $_POST['number2'];
                            $operation = $_POST['operation'];
                        switch ($operation) {
                            case 'add':
                                $kq = $num1 + $num2;
                                echo "Kết quả: $num1 + $num2 = $kq";
                                break;
                            case 'subtract';
                                $kq = $num1 - $num2;
                                echo "Kết quả: $num1 - $num2 = $kq";
                                break;
                            case 'multiply';
                                $kq = $num1 * $num2;
                                echo "Kết quả: $num1 * $num2 = $kq";
                                break;
                            case 'divide';
                                if ($num2 != 0) {
                                    $kq = $num1 / $num2;
                                    echo "Kết quả: $num1 / $num2 = $kq";
                                } else {
                                    echo "Không thể chia cho 0!";
                                }
                                break;
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>

    <h2>KIỂM TRA SỐ</h2>
    <form method="post">
        <table>
            <tr>
                <td>Chọn phép kiểm tra:</td>
                <td>
                    <input type="radio" name="check" value="even_odd" required>Kiểm tra số chẵn/lẻ
                    <input type="radio" name="check" value="nto" required>Kiểm tra số nguyên tố
                </td>
            </tr>
            <tr>
                <td>Số cần kiểm tra:</td>
                <td><input type="number" name="check_number" required></td>
            </tr>
            <tr>
                <td><input type="submit" name="check_number_btn" value="Kiểm tra"></td>
                <td>
                    <?php
                        if (isset($_POST['check_number_btn'])) {
                            $checknb = $_POST['check_number'];
                            $check = $_POST['check'];

                            if ($check == 'even_odd') {
                                if ($checknb % 2 == 0) {
                                    echo "$checknb là số chẵn.";
                                } else {
                                    echo "$checknb là số lẻ.";
                                }
                            } elseif ($check == 'nto') {
                                $isPrime = true;
                                if ($checknb <= 1) {
                                    $isPrime = false;
                                } else {
                                    for ($i = 2; $i * $i <= $checknb; $i++) {
                                        if ($checknb % $i == 0) {
                                            $isPrime = false;
                                            break;
                                        }
                                    }
                                }

                                if ($isPrime) {
                                    echo "$checknb là số nguyên tố.";
                                } else {
                                    echo "$checknb không phải là số nguyên tố.";
                                }
                            }
                        }
                    ?>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
