<?php 
  include("model/student.php");
  $s = new student;

  $id = $_GET['id'];
  $result = $s->GetStudent($id);  
  
  
  

  
  if(isset($_POST['update']))
  {
    $name = $_POST['student_name'];
    $age = $_POST['student_age'];
    $course = $_POST['student_course'];
    $s = new student();
    $s->SetStudent($id,$name, $age, $course);
    $s->EditStudent();
    
  }

 ?>
<!DOCTYPE html>
 <html>
 <head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
 </head>
 <body>
  <h1>Update Student</h1>
  <form action="edit.php?id=<?php echo $id ?>" method="post">
    
    <div class="form-group">
      <label>Student Name:</label>
      <input type="text" class="form-control" name="student_name" placeholder="Enter Name" value="<?php foreach($result as $r){echo $r['student_name'];} ?>"> 
    </div>

    <div class="form-group">
      <label>Student Age:</label>
      <input type="text" class="form-control" name="student_age" placeholder="Enter Age"  value="<?php foreach($result as $r){echo $r['student_age'];} ?>">
    </div>
    <div class="form-group">
      <label>Course:</label>
      <input class="form-control" name="student_course" placeholder="Enter Course" value="<?php foreach($result as $r){echo $r['student_course'];} ?>">
    </div>
    
    <button type="submit" name="update" class="btn btn-success">ADD</button>
    <a href="index.php" class="btn btn-danger">Cancel</a>
  </form>

 </body>
 </html> 

