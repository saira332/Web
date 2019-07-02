<?php 
	class course
	{
		var $id, $name, $credit_hourse,$students;

		function SetCourse($id, $name, $credit_hours,$students)
		{
			$this->id = $id;
			$this->name = $name;
			$this->credit_hours = $credit_hours;
			$this->students = $students;
		}

		function GetCourse()
		{
			return array($this->id,$this->name,$this->credit_hours,$this->students);
		}

	}

 ?>