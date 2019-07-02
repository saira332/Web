<html>

<body>



<form>
query : <input type=text name="search" onkeyup= "GetData(this.value)" />
</form>

<div>
<p>Suggestion : <span id="data"></span></p>
</div>

<select onchange=rssfeed(this.value)>
<option>Select</option>
<option>Google</option>
</select>
<p id="rss"></p>

</body>


<script>

function rssfeed(str){
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange= function (){
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("rss").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET","rss.php?query="+str,true);
    xhttp.send();
}

function GetData(str){

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange= function (){
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("data").innerHTML = this.responseText;
        }
    }

    xhttp.open("GET","record.php?query="+str,true);
    xhttp.send();
 
}

</script>


</html>