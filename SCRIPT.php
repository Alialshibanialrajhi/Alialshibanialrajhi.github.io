<html>
    <head>
        <title></title>
    </head>
    <body >
    <div id="div1"  onClick="b()" onmouseover="a()"></div>
        <form >
            <input type="text" id="val1" >
            <input type="button" value="add" onClick="return add()">
        </form>
        <script>
            function add(){
                var x= document.getElementById("val1");
                
                
              
                
                var a = document.createElement("p");
                var b = document.createTextNode(x);
                 a.appendChild(b);
                 
        
               var c=document.getElementById("div1");
                c.appendChild(a);
				
               return false; 
            }
			function a() {
    var x = document.getElementById("div1");
    x.style.fontSize = "25px"; 
    x.style.color = "orange"; 
}
            function b(){
var c=document.getElementById("div1");
               var a = document.getElementById("p");
			   c.removeChild(p);
			   }

        </script>
    </body>
</html>