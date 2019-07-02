<?php
$student[0] = "student 1";
$student[2] = "student 2";
$student[3] = "student 3";
$student[4] = "student 4";

$suggestion = "";
if(isset($_GET['query'])){

    $query = $_GET['query'];
    if($query != "")
    {
    foreach($student as $s)
    {
                if(strpos($s,$query) !== false)
                {
                    $suggestion = $suggestion . "<br />" . $s; 
                }
            }
        }
    }
    echo $suggestion;

?>