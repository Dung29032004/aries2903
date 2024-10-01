function validateForm() {
    var x;
    var y;
    var z;
    var i;
    x = document.forms["Form"]["tensach"].value;
    y = document.forms["Form"]["tacgia"].value;
    z = document.forms["Form"]["nhaxuatban"].value;
    i = document.forms["Form"]["namxuatban"].value;
    if (x == "" && y == "" && z == "" && i =="") {
    alert("Vui lòng nhập đủ thông tin");
    return false;
    }else if (x == "") {
        alert("Vui lòng nhập tên sách");
        return false;
    } else if (y == "") {
        alert("Vui lòng nhập tên tác giả");
        return false;
    } else if (z == "") {
        alert("Vui lòng nhập tên nhà xuất bản");
        return false;
    }else if (i == "") {
        alert("Vui lòng nhập năm xuất bản");
        return false;
    }else {
        alert("Điền thông tin thành công");
    }
 }
