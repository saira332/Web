<html>
<body>

<p id="data" ></p>
<button onClick="LoadData()">Click here</button>

<script>
    function LoadData()
    {
        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function(){
            if(xhttp.readyState == 4 && xhttp.status == 200)
            {
                document.getElementById('data').innerHTML = this.responseText;
            }
        };

        xhttp.open("GET","datafile.txt",true);
        xhttp.send();
    }
</script>

</body>
</html>