<?php
    // Biến kết nối toàn cục
    global $conn;

    // Hàm kết nối database
    function connect_db()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=qlsinhvien", "root", "");
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->exec("SET NAMES 'utf8'");
            return $conn;
        } catch (PDOException $e) {
            die("Lỗi kết nối CSDL: " . $e->getMessage());
        }
    }


    // Hàm ngắt kết nối
    function disconnect_db()
    {
        // Gọi tới biến toàn cục $conn
        global $conn;

        // Nếu đã kêt nối thì thực hiện ngắt kết nối
        if ($conn) {
            mysqli_close($conn);
        }
    }

    // Hàm lấy tất cả sinh viên
    function get_all_students()
    {
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM sinhvien");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    // Hàm lấy sinh viên theo ID
    function get_student($student_id)
    {
        $conn = connect_db();
        $stmt = $conn->prepare("SELECT * FROM sinhvien WHERE id = :id");
        $stmt->bindParam(':id', $student_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }


    // Hàm thêm sinh viên
    function add_student($student_name, $student_sex, $student_birthday)
    {
        $conn = connect_db();
        $stmt = $conn->prepare("INSERT INTO sinhvien (hoten, gioitinh, ngaysinh) VALUES (:name, :sex, :birthday)");
        $stmt->bindParam(':name', $student_name);
        $stmt->bindParam(':sex', $student_sex);
        $stmt->bindParam(':birthday', $student_birthday);
        return $stmt->execute();
    }


    // Hàm sửa sinh viên
    function edit_student($student_id, $student_name, $student_sex, $student_birthday)
    {
        $conn = connect_db();
        $stmt = $conn->prepare("UPDATE sinhvien SET hoten = :name, gioitinh = :sex, ngaysinh = :birthday WHERE id = :id");
        $stmt->bindParam(':id', $student_id, PDO::PARAM_INT);
        $stmt->bindParam(':name', $student_name);
        $stmt->bindParam(':sex', $student_sex);
        $stmt->bindParam(':birthday', $student_birthday);
        return $stmt->execute();
    }


    // Hàm xóa sinh viên
    function delete_student($student_id)
    {
        $conn = connect_db();
        $stmt = $conn->prepare("DELETE FROM sinhvien WHERE id = :id");
        $stmt->bindParam(':id', $student_id, PDO::PARAM_INT);
        return $stmt->execute();
    }