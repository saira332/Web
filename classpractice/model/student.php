<?php 
	include "DB.php";
	class Student
	{
		
		var $id,$name,$age,$course,$DBObj;

		function Student()
		{
			$this->DBObj = new DB;
		}

		function SetStudent($id,$name,$age,$course)
		{
			$this->id = $id;
			$this->name = $name;
			$this->age = $age;
			$this->course = $course;
		}

		function AddStudent()
		{
	        $query = "INSERT INTO student (student_name, student_age, student_course) VALUES ('$this->name','$this->age','$this->course')";
	        return $this->DBObj->ExecQuery($query);
    	}

    	function GetStudent($id=0)
    	{
        if($id == 0)
        {
            $query = " SELECT * FROM student"; 
        }
        else
        {

            $query = " SELECT * FROM student where student_id = '$id' "; 

        }
        	$result = $this->DBObj->ExecQuery($query);
	        
	        return $result;
    	}




    	














    	function UpdateStudent(){
	        $query = "";

        }

        function DeleteStudent($id){
	        $query = "DELETE FROM student WHERE student_id = '$id'";
	        $this->DBObj->ExecQuery($query);
    	}

    	function EditStudent()
    	{
	        $query = "UPDATE student SET student_name='$this->name', student_age='$this->age', student_course='$this->course' WHERE student_id = '$this->id'";
	        $this->DBObj->ExecQuery($query);
		}
}

?>