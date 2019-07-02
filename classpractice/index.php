
<?php 

include("model/student.php");


$s = new Student;
if(isset($_GET['delete_id']))
{
  $id = $_GET['delete_id'];
  $s->DeleteStudent($id);
}
$result = $s->GetStudent();



 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Index</title>
 	<link rel="stylesheet" type="text/css" href="bootstrap/bootstrap.css">
 </head>
 <body>

 	<table class="table table-striped">
            <tr align="center">
              <td colspan="4"><h1>Student Record</h1></td>
            </tr>

            <tr>
              <th>Student ID</th>
              <th>Student Name</th>
              <th>Student Age</th>
              <th>Student Course</th>
            </tr>
            <?php if($result): ?>
            	<?php foreach ($result as $d):?>
		            <tr>
		              <td><?php echo $d['student_id']; ?></td>
		              <td><?php echo $d['student_name']; ?></td>
		              <td><?php echo $d['student_age']; ?></td>
		              <td><?php echo $d['student_course']; ?></td>
                  <td><a class="btn btn-info" href="edit.php?id=<?php echo $d['student_id']; ?>">Edit</a></td>
                  <td><a class="btn btn-danger" href="index.php?delete_id=<?php echo $d['student_id'] ?>">Delete</a></td>
		            </tr>
          		<?php endforeach; ?>
      	  	<?php endif; ?>
          </table>
 
 </body>
 </html>
