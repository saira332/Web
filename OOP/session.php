<?php
session_start();

echo $_SESSION['studentId'];
echo $_SESSION['name'];
echo $_SESSION['age'];

// session_destroy();

// unset($_SESSION['studentId']);
// echo $_SESSION['studentId'];


?>