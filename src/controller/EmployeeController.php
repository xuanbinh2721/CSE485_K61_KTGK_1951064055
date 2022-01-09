<?php
require_once 'model/EmployeeModel.php';
class EmployeeController{
    public function index(){
        $employee = new Employee();
        require_once '../view/index.php';
    }
    public function addEmloyee(){
        $error = '';
        if(isset($_POST['submit'])) {
            $name = $_POST['name'];
            if(empty($name)){
                $error = "Không được để trống";
            }
            else{
                $employee = new Employee();
                $employeeArr=['name' => $name];
                $insertResult = $employee->insert($employeeArr);
                if($insertResult){
                    $_SESSION['success'] = "Thêm thành công";
                }
                else{
                    $_SESSION['error'] = "Thêm thất bại";
                }
                header("Location: index.php?controller=employee&action=index");
                exit();
            }
        }
        require_once '../view/add.php';
    }
    public function editEmployee(){
        if(!isset($_GET['id'])){
            $_SESSION['error'] = "Không hợp lệ";
            header("Location : index.php?controller=employee&action=index");
            return;
        }
        if(!is_numeric($_GET['id'])){
            $_SESSION['error'] = "Id không hợp lệ";
            header("Location : index.php?controller=employee&action=index");
            return;
        }
        $id = $_GET['id'];
        $employeeModel = new Employee();
        $employee = $employeeModel->getEmployeeById($id);
        $error = "";
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            if(empty($name)){
                $error ="Không được để trống";
            }
            else{
                $employeeModel = new Employee();
                $employeeArr = ['id'=>$id,'name'=>$name];
                $updateResult = $employeeModel->update($employeeArr);
                if($updateResult){
                    $_SESSION['success'] = "Update #$id thành công";
                }
                else {
                    $_SESSION['error'] = "Update #$id thất bại";
                }
                header("Location: index.php?controller=employee&action=index");
                exit();
            }
        }
        require_once '../view/edit.php';
    }
    public function delete(){
        $id = $_GET['id'];
        if (!is_numeric($id)) {
            header("Location: index.php?controller=employee&action=index");
            exit();
        }
        $employee = new Employee();
        $deleteResult = $employee->delete($id);
        if($deleteResult){
            $_SESSION['success'] = "Xóa #$id thành công";
        }
        else {
            $_SESSION['error'] = "Xóa #$id thất bại";
        }


        exit();

    }
}