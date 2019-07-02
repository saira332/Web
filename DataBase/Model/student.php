<?php

include("./Model/DB.php");

Class Student{

    var $id,$smester,$name,$courses,$DBObj;

    function Student()
    {
        $this->DBObj = new DB();
    }

    function SetStudent($id,$name,$smester,$courses)
    {
        $this->id = $id; 
        $this->name = $name;
        $this->smester = $smester;
        $this->courses = $courses;
    }

    function AddStudent()
    {
        $query = "INSERT INTO `student`(`name`, `smester`, `courses`) VALUES ('$this->name','$this->smester','$this->courses')";
        echo $this->DBObj->ExecQuery($query);
    }
    function GetStudents($id = 0)
    {

        if($id == 0)
        {
            $query = "SELECT * FROM `student`";
        }
        else
        {
            $query = " SELECT * FROM `student` WHERE id = '$id' ";
        }

       
        $results = $this->DBObj->ExecQuery($query);
        return $results;
    }

    function DeleteStudent($id){
        $query = "DELETE FROM `student` WHERE id = '$id' ";
        return $this->DBObj->ExecQuery($query);
    }

    function UpdateStudent(){
        $query = "UPDATE `student` SET `name`='$this->name',`smester`='$this->smester',`courses`='$this->courses' WHERE id = '$this->id' ";
        return $this->DBObj->ExecQuery($query);
    }
}
?>