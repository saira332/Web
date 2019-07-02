<html>
<form action="">
    <input type="text" onkeyup="Search(this.value)">
</form>
<p id="data"></p>

<script>

function Search(query){
    // document.getElementById("data").innerHTML = query;
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("data").innerHTML = this.responseText;
        }
    }
    xhttp.open("GET","dbLoveSearching.php?query="+query,true);
    xhttp.send();
    }
</script>

</html>
