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
    <?php
    include("../MasterPage/Header.php");
    $host='127.0.0.1'; //yeh humry localhost ka default ip hain
    $username='root';
    $password='';
    $dbname='signin';
    $com=new mysqli($host,$username,$password,$dbname);
    ?>
    <h2 style="padding-left: 250px">LOGIN</h2>
    <form method="post", action="<?php echo $_SERVER['PHP_SELF']?>">
        <p>Please Enter The Email <Input type="text" name= "fmail" /></p><br/>
        <p>Please Enter The Password <Input type="text" name= "fpas" /></p><br/>
        <Input type="submit" style="margin-left: 120px" value="LogIn"/>
    </form>
    <?php
    if($com->connect_error)
    {
        echo "Connection Failed";
    }
    else
    {
        try
        {
            if($_SERVER["REQUEST_METHOD"]== "POST")
            {
                $mail=$_REQUEST['fmail'];
                $pass=$_REQUEST['fpas'];
                if(empty($mail))
                {
                    throw new Exception("Plz Enter Mail");
                }
                if(empty($pass))
                {
                    throw new Exception("Plz Enter PassWord");
                }
                $query="SELECT * FROM `sign` ";
                $results=$com->query($query); 
                while($row=$results->fetch_assoc()) //DataBase mai Array ko Assocate Krny k LiYa
                {
                    //echo $row['id']."&nbsp".$row['name']."&nbsp". $row['mail']."&nbsp".$row['pas']."&nbsp".$row['pn']."<br />";
                    if($row['mail']==$mail && $row['pas']==$pass)
                    {
                        echo "Data Match!";
                    }
                    else
                    {
                        echo "Data Not Match!";
                    }
                }
                echo "<br />";
            }
        }   
        catch(Exception $e)
        { 
            echo 'Message: ' .$e->getMessage();
        }
    }
    ?>
    <?php
    include("../MasterPage/Footer.php");
    ?>
</body>
</html>