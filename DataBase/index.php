<!-- <?php
//include("./Model/student.php");


//$s = new Student();

//$s->SetStudent("","student2",20,"WEB");
//$s->AddStudent();


//$s->DeleteStudent('3');

//$s->SetStudent(6,"student1234",25,"MPL");
//$s->UpdateStudent();

//echo "<table border = 1>";
//foreach($s->GetStudents() as $rows)
//{
  //  echo "<tr>";
    //foreach($rows as $col)
    //{
      //  echo "<td>" .  $col . "</td>";
    //}
    //echo "</tr>";
//}
//echo "</table>";

?> -->


<form method="Post" action="index.php">
    <input type="text" name="name" placeholder="Enter Name" required >
    <input type="text" name="courses" placeholder="Enter courses" required >
    <input type="number" name="semester" placeholder="Enter semester" required >
    <input type="submit" value="Add" >
</form>


<?php

echo isset($_POST['name']);
?>