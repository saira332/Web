<?php
include("./Model/student.php");
   $s = new Student();
   $suggestion="";
   
      if(isset($_GET['query']))
            {
                $query = $_GET['query'];
                if($query != "")
                {
                    $result = $s->GetStudents();
                    foreach($s->Search($query) as $rows){
                        $suggestion.= $rows["name"]. "<br/>"; 
                    }
                }
            }
    
        echo $suggestion;
?>