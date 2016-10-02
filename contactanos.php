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

    <div role="main" class="ui-content" style="padding:20px;">
      <center><h2>Contactanos!</h2></center>
      <center><h4 style="text-color:gray;">+503 79106598</h4></center>
           <label for="textinput-hide" >Correo electronico:</label>
            <input type="text" name="textinput-hide" id="textinput-hide" placeholder="ejemplo@gmail.com" >
            <label for="textarea">Cuentanos tu duda o sugerencia:</label>
            <textarea cols="40" rows="8" name="textarea" id="textarea"></textarea>
            </br>
            <button class="btn btn-primary btn-block">ENVIAR!</button>
        </div><!-- /content -->

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


  </body>
  </html>