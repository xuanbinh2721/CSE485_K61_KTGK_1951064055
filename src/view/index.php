<?php
//file hiển thị thông báo lỗi
require_once 'views/message.php';
?>

<a href="index.php?controller=employee&action=add">
    Thêm nhân viên
</a>
<table border="1" cellspacing="0" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th></th>
    </tr>
    <?php if (!empty($employees)): ?>
        <?php foreach ($employees AS $employee) : ?>
            <tr>
                <td><?php echo $employee['id'] ?></td>
                <td><?php echo $employee['name'] ?></td>
                <td>
                    <?php
                    //khai báo 3 url xem, sửa, xóa
                    $urlDetail =
                        "index.php?controller=employee&action=detail&id=" . $employee['id'];
                    $urlEdit =
                        "index.php?controller=employee&action=edit&id=" . $employee['id'];
                    $urlDelete =
                        "index.php?controller=employee&action=delete&id=" . $employee['id'];
                    ?>
                    <a href="<?php echo $urlDetail?>">Chi tiết</a> &nbsp;
                    <a href="<?php echo $urlEdit?>">Edit</a> &nbsp;
                    <a onclick="return confirm('Bạn chắc chắn muốn xóa?')"
                       href="<?php echo $urlDelete?>">
                        delete
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="2">KHông có dữ liệu</td>
        </tr>
    <?php endif; ?>
</table>