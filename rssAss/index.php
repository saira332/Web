<html>

<body>
    <select onchange=rss(this.value)>
    <option>Select</option>
    <option>Google</option>
    <option>Yahoo</option>
    <option>Health News</option>
    <option>Time of india</option>
    <option>jiscmail</option>
    </select>
    <p id="view"></p>

    <script>

function rss(str){
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange= function (){
        if(this.status == 200 && this.readyState == 4){
            document.getElementById("view").innerHTML = this.responseText;
        }
    }
    xhttp.open("GET","rss.php?query="+str,true);
    xhttp.send();
}
</script>

</body>
</html>