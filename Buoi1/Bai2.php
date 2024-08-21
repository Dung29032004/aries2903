<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài 2</title>
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
        .pagination {
            margin-top: 20px;
        }
        .pagination a {
            margin: 0 5px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid black;
            color: black;
            background-color: lightgrey;
        }
        .pagination a.disabled {
            color: grey;
            background-color: #f0f0f0;
            pointer-events: none;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>STT</th>
        <th>Tên sách</th>
        <th>Nội dung</th>
    </tr>
    <?php
        $sach = [];
        for ($i = 1; $i <= 100; $i++) {
            $sach[] = [
                'stt' => "$i",
                'ten_sach' => "Tên sách $i",
                'noi_dung' => "Nội dung sách $i"
            ];
        }
        $so_dong_moi_trang = 10;
        $trang_hien_tai = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $bat_dau = ($trang_hien_tai - 1) * $so_dong_moi_trang;
        $tong_so_trang = count($sach) / $so_dong_moi_trang;
        $sach_tren_trang = array_slice($sach, $bat_dau, $so_dong_moi_trang);
    ?>
    <?php foreach ($sach_tren_trang as $index => $sach_item): ?>
    <tr>
        <td><?php echo $sach_item['stt']; ?></td>
        <td><?php echo $sach_item['ten_sach']; ?></td>
        <td><?php echo $sach_item['noi_dung']; ?></td>
    </tr>
    <?php endforeach; ?>
</table>
    <div class="pagination">
    <a href="?page= <?php echo $trang_hien_tai - 1; ?>" 
        class=" <?php if ($trang_hien_tai == 1) echo 'disabled'; ?>">Previous</a>
    <a href="?page= <?php echo $trang_hien_tai + 1; ?>" 
        class="<?php if ($trang_hien_tai == $tong_so_trang) echo 'disabled'; ?>">Next</a>
</div>
</div>
</table>
</body>
</html>
