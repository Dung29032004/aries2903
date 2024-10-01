<?php
include 'Bai4.php';

$mang = [];
$max = $min = $sum = $isValueInArray = $checkValue = $sapxep = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['mang'])) {
    // Tách mảng từ chuỗi nhập vào và chuyển đổi các phần tử thành số nguyên
    $mang = array_map('intval', explode(',', $_POST['mang']));

    // Xử lý mảng
    $max = GTLN($mang);
    $min = GTNN($mang);
    $sum = TONG($mang);
    $sapxep = sapxeptangdan($mang);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkValue'])) {
    $checkValue = intval($_POST['checkValue']);
    $isValueInArray = kiemTraPhanTuCoThuocMang($mang, $checkValue);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Array Functions</title>
    <link rel="stylesheet" href="Bai4nhap.css">
</head>
<body>
    <div class="container">
        <h2>Array Functions</h2>
        <form method="post">
            <label for="mang">Nhập mảng (các phần tử cách nhau bởi dấu phẩy):</label>
            <input type="text" id="mang" name="mang" value="<?php echo isset($_POST['mang']) ? htmlspecialchars($_POST['mang']) : ''; ?>" required>
            <input type="submit" value="Xử lý">
        </form>
        <?php if (!empty($mang)): ?>
        <div class="result">
            <p>Mảng ban đầu: 
                <?php echo implode(", ", $mang); ?>
            </p>
            <p>Giá trị lớn nhất trong mảng: 
                <?php echo $max; ?>
            </p>
            <p>Giá trị nhỏ nhất trong mảng: 
                <?php echo $min; ?>
            </p>
            <p>Tổng: 
                <?php echo $sum; ?>
            </p>
            <p>Mảng sắp xếp theo thứ tự tăng dần: 
                <?php echo implode(", ", $sapxep); ?>
            </p>
        </div>
        <form action="" method="post">
            <input type="hidden" name="mang" value="<?php echo htmlspecialchars(implode(',', $mang)); ?>"><br>
            <label for="checkValue">Nhập giá trị cần kiểm tra:</label>
            <input type="text" id="checkValue" name="checkValue" value="<?php echo isset($_POST['checkValue']) ? htmlspecialchars($_POST['checkValue']) : ''; ?>" required>
            <input type="submit" value="Check">
        </form>
        <?php if ($checkValue !== ""): ?>
        <div class="result">
            <p>
                Giá trị <?php echo $checkValue; ?> 
                <?php echo $isValueInArray ? "có" : "không"; ?> trong mảng
            </p>
        </div>
        <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>
