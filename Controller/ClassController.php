<?php
require_once "Model/ClassModel.php";
class ClassController
{
    static function viewClass()
    {

        $class = new ClassModel();
        $listClass = $class->readAllData();
        require("Views/class/ClassView.php");
    }
    static function viewUpdate()
    {
        $id = $_GET["id"];
        $class = new ClassModel();
        //tạo biến để lưu trữ giá trị trả về của phương thức 
        $item = $class->getById($id);
        require_once("Views/class/UpdateView.php");
    }

    static function updatepro()
    {

        //nhận dữ liệu về 
        $idClass = $_POST["id-class"];
        $nameClass = $_POST["name-class"];
        $Couse = $_POST["couse"];
        //khởi tạo đối tượng 
        $class =  new ClassModel();
        //gán giá trị cho từng thuộc tính 
        $class->idClass = $idClass;
        $class->nameClass = $nameClass;
        $class->Couse = $Couse;
        //cập nhập
        $class->update();
        //điều hướng
        header("Location:../class");
    }
    static function deletepro()
    {
        $id = $_GET["id"];
        $class = new ClassModel();
        $class->idClass = $id;
        $class->DeleteData($id);
        header("Location:../../class");
    }
    static function viewInsert()
    {

        require_once "Views/class/InsertView.php";
    }
    static function InsertPro()
    {

        $nameClass = $_POST["nameClass"];
        $Couse = $_POST["Couse"];
        //khởi tạo đối tượng 
        $class =  new ClassModel();
        //gán giá trị cho tường thuộc tính
        $class->nameClass = $nameClass;
        $class->Couse = $Couse;
        $item1 = $class->insert();
        //điều hướng no về 
        header("Location:../class");
    }
}
