<?php
function GTLN($mang) {
    return max($mang);
}

function GTNN($mang) {
    return min($mang);
}

function TONG($mang) {
    return array_sum($mang);
}
function kiemTraPhanTuCoThuocMang($mang, $phantu) {
    return in_array($phantu, $mang);
}
function sapxepTangDan($mang) {
    sort($mang);
    return $mang;
}
?>