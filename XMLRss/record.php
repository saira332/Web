<?php

$xmlDoc = new DOMDocument();
$xmlDoc->load('student.xml');

$student = $xmlDoc->getElementsByTagName("student");

foreach($student as $s){
    
//    print_r($s);
    // foreach($s->childNodes as $item)
    // {
    //     echo $item->nodeValue;
    // }
}


$students[0] = "student1";
$students[1] = "student2";
$students[2] = "student3";
$students[3] = "student4";

$suggestion = "";
if(isset($_GET['query'])){


    $q = $_GET['query'];
    if($q != ""){
        foreach($student as $s){
            // echo $s->childNodes->item(1)->nodeValue;
            $value = $s->childNodes->item(1)->nodeValue; 
            if(strpos($value,$q) !== false){
            $suggestion = $suggestion . "<br />" .$value;
            }
        }
    }

    echo $suggestion;

}



?>