<?php
require_once "Model/DatabaseModel.php";
class StudentModel extends DatabaseModel
{
    //khai báo các thuộc tính
    public $idStudent;
    public $firstName;
    public $lastName;
    public $gender;
    public $DoB;
    public $Class;

    //khai báo các phương thức
    public function readAllStudent()
    {
        //mở kết nối
        $con = $this->connect();
        $sql = "SELECT * FROM student";

        $result = mysqli_query($con, $sql);
        // echo $sql;
        // exit();
        //đóng kết nối
        $this->close($con);
        // print_r($result);
        $studentArr = [];
        foreach ($result as $each) {

            //khởi tạo đối tượng
            $student = new StudentModel();
            $student->idStudent = $each["idStudent"];

            $student->firstName = $each["firstName"];
            $student->lastName = $each["lastName"];
            $student->gender = $each["gender"];
            $student->DoB = $each["DoB"];
            //khởi tạo đối tượng lớp
            $class = new ClassModel();
            $student->class = $class->getById($each["idClass"]);
            // $class->nameClass = $each["nameClass"];
            // $class->Couse = $each["Couse"];
            // print_r($student);
            array_push($studentArr, $student);
        }
        return ($studentArr);
    }
    public function createSv()
    {

        $con = $this->connect();
        $sqlStudent = "INSERT INTO student (firstName, lastName, gender, DoB, idClass)
         VALUES ('$this->firstName', '$this->lastName', $this->gender,'$this->DoB', $this->class)";
        // echo $sqlStudent;
        // exit();
        mysqli_query($con, $sqlStudent);
        $this->close($con);
    }
    public function getById($id)
    {

        $con = $this->connect();
        $sql = "SELECT * FROM student WHERE idStudent=$id";
        $result = mysqli_query($con, $sql);
        $this->close($con);
        $item = mysqli_fetch_assoc($result);

        $student = new StudentModel();
        $student->idStudent = $item["idStudent"];
        $student->firstName = $item["firstName"];
        $student->lastName = $item["lastName"];
        $student->gender = $item["gender"];
        $student->DoB = $item["DoB"];
        //khởi tạo đối tượng lớp
        $class = new ClassModel();
        $student->class = $class->getById($item["idClass"]);
        // $class->nameClass = $item["nameClass"];
        // $class->Couse = $item["Couse"];
        // print_r($student);
        return ($student);
    }
    public function update()
    {
        $con = $this->connect();
        $sql = "UPDATE student SET firstName='$this->firstName', lastName='$this->lastName', gender=$this->gender ,DoB='$this->DoB', idClass=$this->class WHERE idStudent=$this->idStudent";
        // echo "$sql";
        // exit();
        mysqli_query($con, $sql);
        # Close connection
        $this->close($con);
    }
    public function deletepro($id)
    {
        $con = $this->connect();
        $sql = "DELETE FROM `student` WHERE idStudent=$id";
        // echo $sql;
        // exit();
        mysqli_query($con, $sql);
        $this->close($con);
    }
}
