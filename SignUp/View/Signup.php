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
    <h2 style="padding-left: 250px">SIGN-UP</h2>
    <form method="post", action="<?php echo $_SERVER['PHP_SELF']?>">
        <p>Please Enter The Name <Input type="text" name="fname" /></p><br/>
        <p>Please Enter The Email <Input type="text" name= "fmail" /></p><br/>
        <p>Please Enter The Password <Input type="text" name= "fpas" /></p><br/>
        <p>Please Enter The PhoneNumber <Input type="text" name="fphn" /></p><br/>
        <Input type="submit" style="margin-left: 120px" value="SignUp"/>
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
                $name=$_REQUEST['fname'];
                $mail=$_REQUEST['fmail'];
                $pas=$_REQUEST['fpas'];
                $pn=$_REQUEST['fphn'];
                if(empty($name))
                {
                    throw new Exception("Plz Enter Name");
                }
                if(empty($mail))
                {
                    throw new Exception("Plz Enter Mail");
                }
                if(empty($pas))
                {
                    throw new Exception("Plz Enter PassWord");
                }
                if(empty($pn))
                {
                    throw new Exception("Plz Enter PhoneNumber");
                }
                $query="INSERT INTO `sign`(`name`, `mail`, `pas`, `pn`) VALUES ('$name','$mail','$pas','$pn')";
                if($com->query($query))  // yeh hum query ko excute kr rahy hain
                {
                    echo "<b style='padding-left: 200px'>Data Save!</b>";
                }
                else
                {
                    echo "Error";
                }
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