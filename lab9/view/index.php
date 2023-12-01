<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<button id="show" onclick="ajax()" value="name">Show name </button>
<p id="demo"></p>


<script>
function ajax(){
    let showinfo = document.getElementById('show').value;
    let data = JSON.stringify(showinfo);
    let xhttp = new XMLHttpRequest();
    xhttp.open('POST', '../controller/check.php', true);
    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhttp.send('user='+data)
    xhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            let myObj = JSON.parse(this.responseText);
            let text = "<table border='1'>"
            for (x in myObj) {
              text += "<tr><td>" + myObj[x].EmployerName  + "</td></tr>";
            }
            text += "</table>"   
            document.getElementById("demo").innerHTML = text; 
           
        }
    }
}
</script>

</body>
</html>