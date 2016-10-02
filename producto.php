<?php
if(isset($_GET["idproducto"]))
{
    $idprod=$_GET["idproducto"];
    session_start();
    $_SESSION["idprod"]=$idprod;
    

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
    <div style="padding:10px;" id="areaproducto">
    
    </div>

  <nav class="bar bar-tab">
  <a class="tab-item active" href="principal.php">
    <span class="icon icon-home"></span>
    <span class="tab-label">Inicio</span>
  </a>
  <a class="tab-item" href="#">
    <span class="icon icon-check"></span>
    <span class="tab-label">Carrito <span class="badge badge-negative" id='contadorproductos'>0</span></span>
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
    var idcliente='1';
    $(document).ready(function(){
                mostrar_producto();
            });
    function mostrar_producto()
      {
        $("#areaproductos").html("");
        //OBTENIENDO INFORMACION DE WS
        $.get("http://pymesv.com/cliente02w/API/producto/", { idproducto: <?php echo $_SESSION["idprod"]; ?> })
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
            var html ="<form><center><img  style='width:50%; height=50%;'src='"+valor.url+"'><h2>"+valor.nombre+"</h2></center><h3><center>"+valor.precio+"</center></h3><p><center>"+valor.descripcion+"</center></p><input type='text' placeholder='cantidad'><button class='btn btn-positive btn-block' onClick='agregar_carrito(idcliente,'"+valor.idproductos+"','"+valor.nombre+"','"+valor.precio+"','"+valor.url+"');'>Agregar a carrito!</button></form>";
               $("#areaproducto").append(html);
              
            }
          })
         
        });
      }
      //AGREGAR PARCIALMENTE A CARRO DE COMPRAS
      var carrito=[];
            var cantidad;
            //AGREGAR PARCIALMENTE AL CARRITO
            function agregar_carrito(cliente,idproducto,nombre,precio,imagen)
            {               
                var nuevo;
                nuevo={"idcliente":cliente,"idproductos":idproducto,"nombre":nombre,"precio":precio,"url":imagen};
                carrito.push(nuevo);
                cantidad=carrito.length;
                $("#contadorproductos").html(cantidad).fadeIn();
                
            }
</script>
  </body>
  </html>