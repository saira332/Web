<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
<form method="Post" action="index.php">
    <input type="text" name="name" placeholder="Enter Name" required >
    <input type="text" name="courses" placeholder="Enter courses" required >
    <input type="number" name="semester" placeholder="Enter semester" required >
    <input type="submit" value="Add" >
</form>

<?php
echo isset($_POST['name']);


?>
</body>
</html>