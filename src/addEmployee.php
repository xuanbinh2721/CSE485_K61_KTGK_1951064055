<?php
    include "template/header.php";
?>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Thêm</h5>
        <form action = "process_add_Employee.php" method ="post">
            <div class="form-group">
                <label for="txtHoten">Họ và tên</label>
                <input type="text" class="form-control" name="Hoten" id="txtHoten" placeholder="Nhập họ tên">
            </div>
            <div class="form-group">
                <label for="txtChucvu">Chức vụ</label>
                <input type="text" class="form-control" name="Chucvu" id="txtChucvu" placeholder="Nhập chức vụ">
            </div>
            <div class="form-group">
                <label for="txtSomayban">Phòng ban</label>
                <input type="text" class="form-control" name="phongban" id="txtSomayban" placeholder="Nhập phòng ban">
            </div>
            <div class="form-group">
                <label for="txtSodidong">Lương</label>
                <input type="text" class="form-control" name="luong" id="txtSodidong" placeholder="Nhập lương">
            </div>
            <div class="form-group">
                <label for="txtEmail">Ngày vào làm</label>
                <input type="date" class="form-control" name="nvl" id="txtEmail" placeholder="Nhập ngày vào làm">
            </div>
            
            <button type="submit" class="btn btn-primary">Lưu lại</button>
        </form>
    </div>    
    </main>

<?php
    include "template/footer.php";
?>