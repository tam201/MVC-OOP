<?php
//tính kế thừa
require_once "Model/DatabaseModel.php";
class ClassModel extends DatabaseModel
{
    //thuộc tính
    public $idClass;
    public $nameClass;
    public $Couse;

    // phương thức -xem, thêm ,sửa ,xóa
    public function readAllData()
    {
        $con = $this->connect();
        $sql = "SELECT * FROM class";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $classArray = [];
        foreach ($result as $each) {
            //  khởi tạo đối tượng
            $class = new ClassModel();
            $class->idClass = $each["idClass"];
            $class->nameClass = $each["nameClass"];
            $class->Couse = $each["Couse"];
            array_push($classArray, $class);
        }
        return $classArray;
    }
    public function getById($id)
    {
        $con = $this->connect();
        $sql = "SELECT * FROM class WHERE idClass= $id";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $item = mysqli_fetch_assoc($result);
        // khới tạo đối tượng 
        $class = new ClassModel();
        $class->idClass = $item["idClass"];
        $class->nameClass = $item["nameClass"];
        $class->Couse = $item["Couse"];
        return $class;
    }

    public function update()
    {
        $con = $this->connect();
        $sql = " UPDATE class SET nameClass='$this->nameClass',Couse=$this->Couse WHERE idClass=$this->idClass";
        mysqli_query($con, $sql);
        $this->close($con);
    }
    public function DeleteData($id)
    {
        $con = $this->connect();
        // $sql = "DELETE FROM class WHERE idClass=$this->idClass";

        // // echo $sql;
        // // exit();
        // mysqli_query($con, $sql);
        /*
        DELIMITED//
        CREATE PROCEDUER deleteClasssPro(
            id int
        )
        BEGIN
            DELETE FROM student WHERE idClass=id;
            DELETE FROM class WHERE idClass=id;
        END//
        */
        $sql = "CALL deleteClasssPro($id);";
        mysqli_query($con, $sql);

        $this->close($con);
    }
    public function insert()
    {
        $con = $this->connect();
        $sql = "INSERT INTO class (nameClass,Couse) VALUES('$this->nameClass',$this->Couse )";
        // echo "$sql";
        // exit();
        mysqli_query($con, $sql);
        $this->close($con);
    }
}
