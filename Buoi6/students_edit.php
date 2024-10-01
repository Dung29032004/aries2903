<?php

require './libs/students.php';

// Lấy ID sinh viên cần sửa
$student_id = $_GET['id'] ?? 0;
$data = get_student($student_id);
$errors = [];

if (!$data) {
    header('Location: students_list.php');
    exit();
}

// Xử lý khi form được submit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data['hoten'] = $_POST['name'] ?? '';
    $data['gioitinh'] = $_POST['sex'] ?? '';
    $data['ngaysinh'] = $_POST['birthday'] ?? '';

    if (empty($data['hoten'])) {
        $errors['name'] = 'Chưa nhập tên sinh viên';
    }

    if (empty($data['gioitinh'])) {
        $errors['sex'] = 'Chưa nhập giới tính sinh viên';
    }

    // Nếu không có lỗi thì cập nhật sinh viên
    if (!$errors) {
        edit_student($student_id, $data['hoten'], $data['gioitinh'], $data['ngaysinh']);
        header('Location: students_list.php');
        exit();
    }
}

disconnect_db();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sửa sinh viên</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
    <h1>Sửa sinh viên </h1>
    <a href="students_list.php">Trở về</a> <br /> <br />
    <form method="post" action="students_edit.php?id=<?php echo $data['id']; ?>">
        <table width="50%" border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>Name</td>
                <td>
                    <input type="text" name="name" value="<?php echo $data['hoten']; ?>" />
                    <?php if (!empty($errors['hoten'])) echo $errors['sv_name']; ?>
                </td>
            </tr>
            <tr>
                <td>Gender</td>
                <td>
                    <select name="sex">
                        <option value="Nam">Nam</option>
                        <option value="Nữ" <?php if ($data['gioitinh'] == 'Nữ') echo 'selected'; ?>>Nu</option>
                    </select>
                    <?php if (!empty($errors['sv_sex'])) echo $errors['sv_sex']; ?>
            </tr>
            <tr>
                <td>Birthday</td>
                <td>
                    <input type="date" name="birthday" value="<?php echo $data['ngaysinh']; ?>" />
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>" />
                    <input type="submit" name="edit_student" value="Lưu" />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>