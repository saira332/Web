<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("university.xml");
    $students = $xmlDoc->getElementsByTagName("student");
    foreach($students as $s)
    {
        print_r($s->getElementsByTagName("name")->item(0)->nodeValue);
    }



?>