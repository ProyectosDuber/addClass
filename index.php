<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-2.1.4.min.js"></script>
        <LINK href="css.css" rel="stylesheet" type="text/css">   
    </head>
    <body>
        <div ><label >Informacion</label> <input type="radio" id="informacion" name="miradio" /><br><label >Cursos</label><input id="cursos" name="miradio"  type="radio"  /> </div><br>
        <div  id="enlases">
            <a   href="http://www.google.com" class="e">Google</a><br>
            <a href="" class="c"  >Pildoras informaticas</a><br>
            <a href="http://www.facebook.com" class="e" >Noticias colombia facebook</a><br>
            <a  href="" class="c" class="externos">Java Script Desde Cero</a>
        </div>
        <script>
            document.getElementById("cursos").addEventListener("click",cursos,false);
            document.getElementById("informacion").addEventListener("click",externos,false);
           function cursos(){
                $(".c").addClass("externos");
                $(".e").removeClass("internos");
//                  $(".c").toggleClass("externos");
            }
          function externos(){
                $(".e").addClass("internos");
              $(".c").removeClass("externos");
//                $(".e").toggleClass("externos");
          }  
        </script>
        
        
    </body>
</html>
