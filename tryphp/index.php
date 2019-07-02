<?php
include("./Model/DB.php");

$host = '127.0.0.1';
$username = 'root';
$password = '';
$dbname = 'school';

$conn = new mysqli($host,$username,$password,$dbname);

if($conn ->connect_error)
{
    echo"Connection Failed";
}
else{
    echo "connection successfull <br/>";
}
$name = 'buraq';
$smester = 6;
$courses= "MPL";
$query = "INSERT INTO `student`(`name`, `smester`, `courses`) VALUES ($name,$smester,$courses)";
if ($conn->query($query) == TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

?>