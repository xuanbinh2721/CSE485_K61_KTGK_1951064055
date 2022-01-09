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
    $sql = "SELECT * FROM nhanvien WHERE manv = '$ma_nhanvien'";

    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
    }
    mysqli_close($conn); 
?>
<?php
    include("template/header.php");
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5"></h5>
        <form action = "process_update_Employee.php?id=<?php echo $row['manv']; ?>" method ="post">
            <div class="form-group">
                <label for="txtHoten">Họ và tên</label>
                <input type="text" class="form-control" name="Hoten" id="txtHoten" placeholder="Nhập họ tên" VALUE="<?php echo $row['hoten'];?>">
            </div>
            <div class="form-group">
                <label for="txtChucvu">Chức vụ</label>
                <input type="text" class="form-control" name="Chucvu" id="txtChucvu" placeholder="Nhập chức vụ" VALUE="<?php echo $row['chucvu'];?>">
            </div>
            <div class="form-group">
                <label for="txtSomayban">Số máy bàn</label>
                <input type="tel" class="form-control" name="Somayban" id="txtSomayban" placeholder="Nhập phòng ban" VALUE="<?php echo $row['Phongban'];?>">
            </div>
            <div class="form-group">
                <label for="txtSodidong">Số di động</label>
                <input type="tel" class="form-control" name="Sodidong" id="txtSodidong" placeholder="Nhập lương" VALUE="<?php echo $row['luong'];?>">
            </div>
            <div class="form-group">
                <label for="txtEmail">Email</label>
                <input type="email" class="form-control" name="Email" id="txtEmail" placeholder="Nhập ngày vào làm" VALUE="<?php echo $row['ngayvaolam'];?>">
            </div>
            
            
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>