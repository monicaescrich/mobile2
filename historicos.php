
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
  	<center><h4 style="padding:10px;">Comprados recientemente</h4></center>
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
 		
 	var idcliente=1;
      $(document).ready(function(){
        obtener_historico();
      });
      //CARRITOS HISTORICOS DE COMPRAS
			function obtener_historico()
			{
				
					$("#cargacarhistorico").html("");				
					$.get("http://pymesv.com/cliente02w/API/mostrarcarrito/", { idclientes: idcliente})
					.done(function(jsonws){	
						var html;
						$.each(jsonws ,function(indice,valor){
						 html =html+"<li class='table-view-cell media'><img class='media-object pull-left' src='"+valor.url+"' width='40px' height='40px' ><div class='media-body'>"+valor.nombre+"<p> cantidad:"+valor.cantidad+"</p><h3> $"+valor.subtot+"</h3><p>"+valor.fecha+"</p></div></li>";
             })
						
						$("#areaproductos").html(html);
					});			
								
			}
      
</script>
  </body>
  </html>
