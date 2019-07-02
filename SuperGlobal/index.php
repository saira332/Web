<html>
<body>
<form method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="name"/>
    <input type="submit" value= "add"/>

    <a href="index.php?name='saira'"> Get Request </a>

</form>


</body>
<?php

$_SESSION["name"] = "saira";
$_SESSION["email"] = "saira@gmail.com";
session_start();
echo "session start";


$cookie_name = "saira";
$cookie_value = 123;
setcookie($cookie_name,$cookie_value);

if(!isset($_COOKIE[$cookie_name]))
{
    echo "</br>cookie name is not set";
}
else{
    echo "</br>cookie  " .$cookie_name. " is set";
    echo "</br>value is " . $cookie_value . "</br>cookie name is  ".$cookie_name. "</br>";
}


if(isset($_GET['name']))
{
    echo $_GET['name'];
}
if($_SERVER["REQUEST_METHOD"]== "post")
{
    $sname = $_POST['name'];
    if(empty($sname))
    {
        echo "</br>plz enter something";
    }
    else{
        echo "</br>name = " . $sname;
    }
}




$a = 6;
$b = 76;


function add()
{
  echo "</br>".  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
 add();
echo "</br><b>php self </b>     =   " . $_SERVER['PHP_SELF'];
echo " </br><b> local Host </b>  =       " . $_SERVER['SERVER_NAME'];
echo " </br><b>HTTP NAME </b>   =   " . $_SERVER['HTTP_HOST'];
echo "</br><b>Http User Agent </b> =     " . $_SERVER['HTTP_USER_AGENT'];
echo "</br><b>Script Name </b>  =   " . $_SERVER['SCRIPT_NAME'];


?>
</html>