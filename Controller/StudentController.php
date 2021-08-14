<?php
require_once "Model/ClassModel.php";
require_once "Model/StudentModel.php";

//khởi tạo lớp
class StudentController
{
    //khai báo static function
    static public function viewStudent()
    {
        //khởi tạo đối tượng ở model
        $student = new StudentModel();
        //truyền phương thức cần hiển thị
        $listClass = $student->readAllStudent();
        require_once "Views/student/studentView.php";
    }
    static public function viewCreat()
    {

        $class = new ClassModel();
        $listClass = $class->readAllData();
        // print_r($listClass);

        require_once "Views/student/createView.php";
    }
    static function createPro()
    {
        //khoi tao doi tuong
        $student = new StudentModel();
        $student->firstName = $_POST["firstName"];
        $student->lastName = $_POST["lastName"];
        $student->gender = $_POST["gender"];
        $student->DoB = $_POST["DoB"];
        $student->class = $_POST["class"];
        $student->createSv();
        //dieu huong 
        header("Location: ?controller=student");
    }
    static function viewUpdate()
    {
        $id = $_GET["id"];
        $student = new StudentModel();
        //truyền dữ liệu
        $item = $student->getById($id);
        $class = new ClassModel();
        $listClass = $class->readAllData();
        // print_r($listClass);
        require_once "Views/student/update.php";
    }
    static function updatepro()
    {
        $student = new StudentModel();
        $student->idStudent = $_POST["idStudent"];
        $student->firstName = $_POST["firstName"];
        $student->lastName = $_POST["lastName"];
        $student->gender = $_POST["gender"];
        $student->DoB = $_POST["DoB"];
        $student->class = $_POST["class"];
        $student->update();
        //dieu huong 
        header("Location: ?controller=student");
    }
    static function delete()
    {
        $id = $_GET["id"];
        $student = new StudentModel();
        $student->idStudent = $id;
        $student->deletepro($id);
        header("Location: ?controller=student");
    }
}
