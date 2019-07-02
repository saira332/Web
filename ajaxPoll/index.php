<html>
<body>
<h2>What do you like PHP or MVC? </h2>
<div id="hide">
    <input type="radio" name="vote"  value=0 onClick="SetPoll(this.value)"/>PHP
    <input type="radio" name="vote"  value=1 onClick="SetPoll(this.value)"/>MVC
</div> 

<div id="show"></div>
</body>
<script>
    function SetPoll(value) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange= function (){
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("hide").style = "display:none";
            document.getElementById("show").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET","voting.php?vote="+value,true);
    xhttp.send();
    }


</script>
</html>