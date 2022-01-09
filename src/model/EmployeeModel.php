<?php
require_once 'config/db.php';
class Employee{
    public $id;
    public $name;

    public function insert($param =[]){
        $connection = $this -> connetctDb();
        $insertQuery = "INSERT INTO 1951064055_employees VALUES('{$param['name']}')";
        $insertResult = mysqli_query($connection,$insertQuery);
        $this->closedb($connection);
        return $insertResult;
    }
    public function getEmployeeById($id = null){
        $connection = $this->connectDb();
        $selectQuery = "SELECT * FROM 1951064055_employees WHERE id=$id";
        $selectResult = mysqli_query($connection,$selectQuery);
        $employee = [];
        if(mysqli_num_row($selectResult)>0){
            $employees = mysqli_fetch_all($selectResult, MYSQLI_ASSOC);
            $employee = $employees[0];
        }
        $this->closeDb($connection);
        return $employee;
    }
    public function index(){
        $connection = $this->connectDb();
        $selectQuery = "SELECT * FROM 1951064055_employees";
        $results = mysqli_query($connection, $querySelect);
        $employees = [];
        if (mysqli_num_rows($results) > 0) {
            $books = mysqli_fetch_all($results, MYSQLI_ASSOC);
        }
        $this->closeDb($connection);

        return $employees;
    }
    public function update($employee=[]){
        $connection = $this->connectDb();
        $updateQuery = "UPDATE 1951064055_employees SET name = '{$employee['name']}' WHERE id = {$employee['id']}";
        $updateResult = mysqli_query($connection,$updateQuery);
        $this->closeDb($connection);

        return $updateResult;

    }
    public function delete($id = null){
        $connection = $this->connectDb();
        $deleteQuery = "DELETE FROM 1951064055_employees WHERE id = $id";
        $deleteResult= mysqli_query($connection,$deleteQuery);
        $this->closeDb($connection);
        return $deleteResult;
    }

    public function connectDb() {
        $connection = mysqli_connect(DB_HOST,
            DB_USERNAME, DB_PASSWORD, DB_NAME);
        if (!$connection) {
            die("Không thể kết nối. Lỗi: " .mysqli_connect_error());
        }

        return $connection;
    }

    public function closeDb($connection = null) {
        mysqli_close($connection);
    }
}