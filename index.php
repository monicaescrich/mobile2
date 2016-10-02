<!DOCTYPE html>
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

    <!-- Make sure all your bars are the first things in your <body> -->
    <header class="bar bar-nav">
      <h1 class="title">TecnoVentas</h1>
    </header>

    <!-- Wrap all non-bar HTML in the .content div (this is actually what scrolls) -->
    <div class="content" >
      <img src="http://www.versluys.cl/imagenes/centro-comercial/tecnoventas.jpg" style="height:190px; width:190px;  " >
      <form style="padding:10px;">
      <input type="text" placeholder="Usuario" id="usuario">
      <input type="password" placeholder="Contra" id="pass">
      <a  class="btn btn-positive btn-block" id="btnlogin">LogIn</a>
    </form>
      
      <script>
			function verificar_login()
			{
				var resultado="";					
				$.get("http://pymesv.com/cliente02w/API/login/", { user: $("#usuario").val(), pass: $("#pass").val() })
				.done(function( jsonws ) {				
					$.each(jsonws ,function(indice, valor){
						if(valor=="error" && indice=="autoriza")
						{
							resultado="0";
						}
						else
						{
							resultado=resultado+indice+"="+valor+"&";
						}												
					})	
					if(resultado=="0")
					{
					//Que hacer en caso de que no funcione el inicio de sesion
					}
					else
					{
						window.location.href="principal.php?"+resultado;		
					}								
				});				
			}
			$("#btnlogin").click(function(){
				if($("#usuario").val() == "" || $("#pass").val() =="")
				{
					toastr.options = {
						"positionClass": "toast-bottom-right"
					}
					toastr.error("<h5>CAMPOS VACIOS. . .</h5>");
				}
				else
				{
					verificar_login();
				}			
			});
			$( "#pass" ).keypress(function(event){
				if ( event.which == 13 ) {
					verificar_login();
				}
			});
		</script>
    </div>

  </body>

</html>