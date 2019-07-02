<?php

include("/Model/Student.php");
$s = new student();

$s->SetStudent("16-Arid-1551 <br/>","saira <br/>",20);
echo $s->GetStudent();

session_start();
$_SESSION['studentId'] = "123";
$_SESSION['name'] = "abc";
$_SESSION['age'] = 12;

?>
