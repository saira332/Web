<html>
<body>
<form method="post" action="<? echo $_SERVER['PHP_SELF'];?>">
    <input type="text" name="name"/>
    <input type="submit" value= "add"/>

    <a href="index.php?name='saira'"> Get Request </a>

</form>


</body>
<?php

if(isset($_GET['name']))
{
    echo $_GET['name'];
}
if($_SERVER["REQUEST_METHOD"]== "post")
{
    $sname = $_POST['name'];
    if(empty($sname))
    {
        echo "plz enter something";
    }
}




$a = 6;
$b = 76;


function add()
{
  echo  $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}
 add();
echo "</br>php self  " . $_SERVER['PHP_SELF'];
echo " </br> local Host   " . $_SERVER['SERVER_NAME'];
echo " </br>HTTP NAME   " . $_SERVER['HTTP_HOST'];
echo "</br>Http User Agent  " . $_SERVER['HTTP_USER_AGENT'];
echo "</br>Script Name  " . $_SERVER['SCRIPT_NAME'];


?>
</html>