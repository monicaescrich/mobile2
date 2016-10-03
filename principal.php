<?php 
if (isset($_GET["idcliente"])) {
  session_start();
  $_SESSION["idcliente"]=$_GET["idcliente"];
  $idcliente=$_SESSION["idcliente"];
}
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ratchet template page</title>

    <!-- Sets initial viewport load and disables zooming  -->
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <!-- Makes your prototype chrome-less once bookmarked to your phone's home screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Include the compiled Ratchet CSS -->
    <link href="css/ratchet.css" rel="stylesheet">

    <!-- Include the compiled Ratchet JS -->
    <script src="js/ratchet.js"></script>
    <script src="jquery-3.1.1.min.js"></script>
  </head>

  <body>
<ul class="table-view" id="areaproductos">
  
</ul>

  <nav class="bar bar-tab">
  <a class="tab-item active" href="principal.php">
    <span class="icon icon-home"></span>
    <span class="tab-label">Inicio</span>
  </a>
  <a class="tab-item" href="#">
    <span class="icon icon-check"></span>
    <span class="tab-label">Carrito</span>
  </a>
  <a class="tab-item" href="historicos.php">
    <span class="icon icon-refresh"></span>
    <span class="tab-label">Historicos</span>
  </a>
  
  <a class="tab-item" href="contactanos.php">
    <span class="icon icon-info"></span>
    <span class="tab-label">Contactanos</span>
  </a>
</nav>

<script type="text/javascript">
 
      $(document).ready(function(){
        obtener_productos();
        
      });
      //OBTENER PRODUCTOS POR WS
      function obtener_productos()
      {
        $("#areaproductos").html("");
        //OBTENIENDO INFORMACION DE WS
        $.get("http://pymesv.com/cliente02w/API/TODOS/")
        .done(function(jsonws){                   
          $.each(jsonws ,function(indice,valor){
            if(indice=="error" && valor=="0")
            {
              
            }
            else if(indice=="error" && valor=="1")
            {
              
            }
            else
            { 
            var html ="<li class='table-view-cell media'><a href='producto.php?idproducto="+valor.idproductos+"'class='navigate-right'><img class='media-object pull-left' src='"+valor.url+"' width='40px' height='40px' ><div class='media-body'>"+valor.nombre+"<p>$"+valor.precio+"</p></div></a></li>";
               $("#areaproductos").append(html);
              
            }
          })
         
        });
      }
</script>
  </body>
  </html>