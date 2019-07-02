<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css">
        <script src="main.js"></script>
        <style>
            nav {
                width: 80%;
		        background-color: black;
            }
            ul {
                background-color: black;
                overflow: hidden;
                width: 100%;
                padding-left: 40px;
                margin: 0;
                list-style-type: none;
            }
            ul li {
                float: left;
                padding-left: 30px;
            }
            ul .s{
                float: right;
            }
            ul li a {
                display: block;
                text-decoration: none;
                color: white;
                padding: 20px;
                text-align: center;
            }
            ul li a:hover
            {
                background-color: red;
            }
        </style>
    </head>
    <body>    
        <nav>
            <ul>
                <li><a href="/SignUp/index.php">HOME</a></li>
                <li><a href="/SignUp/View/About.php" >ABOUT ME</a></li>
                <li><a href="/SignUp/View/Contact.php" >CONTACT US</a></li>
                <li class="s"><a href="/SignUp/View/Signup.php">SIGNUP</a></li>
                <li class="s"><a href="/SignUp/View/Login.php">LOGIN</a></li>
            </ul>
        </nav>
    </body>
</html>