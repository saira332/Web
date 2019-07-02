<html>
    <head>
    <script src="jquery-3.4.1.min.js">
    </script> 
    <style>
    div{
        width:150px;
        border: 1px solid black;
    }
    </style>
    </head>
    <body>
    <div id = "btn" > click 
    <!-- <div id = "div" style = "height : 200px; width:200px; background: black"> </div>  -->
    
    <div class="list">Home</div>
    <div class="list">About</div>
    <div  class="list">Contact</div>
    </div>
    </body>
    <script>
    $(".list").hide();
    $("#btn").click(function(){
         $(".list").slideToggle();
        // $("#list").toggle();
        //$("#list").fadeToggle();
    });
    $.post("test.php",{name:"abc"},function(data,status){
        console.log(data)
    });
    </script>

</html>