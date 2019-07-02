<?php 
  include("model/student.php");
  $s = new student;

  if(isset($_POST['submit']))
  {

    $name = $_POST['student_name'];
    $age = $_POST['student_age'];
    $course = $_POST['student_course'];
    $s = new student();
    $s->SetStudent($id=0, $name, $age, $course);
    $s->AddStudent();
    
  }

 ?>
<!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
 </head>
 <body>
  <h1>Insert Student</h1>
  <form action="add.php" method="post">
    
    <div class="form-group">
      <label>Student Name:</label>
      <input type="text" class="form-control" name="student_name" placeholder="Enter Name">
    </div>

    <div class="form-group">
      <label>Student Age:</label>
      <input type="text" class="form-control" name="student_age" placeholder="Enter Age">
    </div>
    <div class="form-group">
      <label>Course:</label>
      <input class="form-control" name="student_course" placeholder="Enter Course">
    </div>
    
    <button type="submit" name="submit" class="btn btn-success">ADD</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
  </form>

 </body>
 </html> 