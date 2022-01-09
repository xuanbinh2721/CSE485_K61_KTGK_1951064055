<?php
    // admin.php TRUYỀN DỮ LIỆU SANG
    // process_add_Employee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    if(isset($_POST['HoTen'])){
        $hoTen = $_POST['HoTen'];
    }
    $chucvu = $_POST['Chucvu'];
    $somayban = $_POST['Somayban'];
    $sodidong = $_POST['Sodidong'];
    $email = $_POST['Email'];
    $madonvi = $_POST['Donvi'];


    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','dhtl_danhba');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO db_nhanvien (hovaten,chucvu,sodt_coquan,sodt_didong,email,ma_donvi) VALUES('$hoten','$chucvu','$somayban','$sodidong','$email','$madonvi')";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: admin.php");
    }else{
        header("location: error.php");
    }
    mysqli_close($conn); 
?>