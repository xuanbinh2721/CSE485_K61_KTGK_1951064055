<?php

  
    
    $manhanvien = $_GET['id'];
    $hoten = $_POST['Hoten'];
    $chucvu = $_POST['Chucvu'];
    $somayban = $_POST['phongban'];
    $sodidong = $_POST['luong'];
    $email = $_POST['nvl'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','1951064055_employees');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE nhanvien SET  hoten ='$hoten', chucvu='$chucvu', phongban='$phongban', luong ='$luong', ngayvaolam ='$ngayvaolam', WHERE manv = '$manhanvien'";
    
    $number = mysqli_query($conn,$sql);
    if($number > 0){
          header("location: ../index.php");
    }
    else{
         header("location: error.php");
    }
    mysqli_close($conn); 
?>