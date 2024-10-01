<?php require './libs/students.php';

$student_id = $_POST['id'] ?? 0;

if ($student_id) {
    delete_student($student_id);
}

header('Location: students_list.php');
exit();
