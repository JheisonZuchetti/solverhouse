 var seconds = 2; // el tiempo en que se refresca
5
    var divid = "contenido"; // el div que quieres actualizar!
6
    var url = "trabajadores.php"; // el archivo que ira en el div
7
 
8
    function refreshdiv(){
9
 
10
        // The XMLHttpRequest object
11
 
12
        var xmlHttp;
13
        try{
14
            xmlHttp=new XMLHttpRequest(); // Firefox, Opera 8.0+, Safari
15
        }
16
        catch (e){
17
            try{
18
                xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); // Internet Explorer
19
            }
20
            catch (e){
21
                try{
22
                    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
23
                }
24
                catch (e){
25
                    alert("Tu explorador no soporta AJAX.");
26
                    return false;
27
                }
28
            }
29
        }
30
 
31
        // Timestamp for preventing IE caching the GET request
32
        var timestamp = parseInt(new Date().getTime().toString().substring(0, 10));
33
        var nocacheurl = url+"?t="+timestamp;
34
 
35
        // The code...
36
 
37
        xmlHttp.onreadystatechange=function(){
38
            if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
39
                document.getElementById(divid).innerHTML=xmlHttp.responseText;
40
                setTimeout('refreshdiv()',seconds*1000);
41
            }
42
        }
43
        xmlHttp.open("GET",nocacheurl,true);
44
        xmlHttp.send(null);
45
    }
46
 
47
    // Empieza la función de refrescar
48
 
49
    window.onload = function(){
50
        refreshdiv(); // corremos inmediatamente la funcion
51
    }
