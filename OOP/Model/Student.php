<?php 
include("Person.php");
class student extends person{
    Protected $studentId ;

    // function __construct()
    // {
    //     echo "student class constructor <br/>";
    // }


    function SetStudent($id,$name,$age)
    {
        $this->studentId = $id;
        $this->name = $name;
        $this->age = $age;
    }
    function GetStudent()
    {
        return $this->studentId . $this->name . $this->age;
    }

    //  function __destruct()
    // {
    //     echo " <br/> student class destructor <br/>";
    // } 
}


?>