<?php
    
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $ma_nhanvien = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951064055_employees');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM nhanvien WHERE manv = '$ma_nhanvien'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php");
    }else{
        header("location: error.php");
    }
    mysqli_close($conn); 
?>