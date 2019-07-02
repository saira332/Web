<?php
    if(isset($_GET['vote']))
    {
        $vote = $_GET['vote'];
        $content = file("voting.txt");
        $values = explode("||",$content[0]);       //explode is use to split value or string
        $php = $values[0];
        $mvc = $values[1];
        if($vote ==0)
        {
            $php = $php+1;
        }
        if($vote == 1){
            $mvc = $mvc+1;
        }
        $filedata= $php."||".$mvc;
        $file = fopen("voting.txt","w"); //fopen is a function used to open a file. "w" means write in file
        fputs($file,$filedata);    //fputs is use to put data in file    
    }

?>
<p> Vote for Php : <?php echo $php?> </p>
<p> Vote for Mvc : <?php echo $mvc?> </p>