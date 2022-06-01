<?php require("template/header.php"); ?>

<div class="container mt-4 mb-4">
<div class="card" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-sm-4">
      <img src="<?php print $url_base ?>/img/components/cards/03.jpg" class="rounded-start" alt="Card image">
    </div>
    <div class="col-sm-8">
      <div class="card-body">
     <?php print "<div class='alert ".$datos["color"]."' role='alert'>"; ?>
      <h5 class="card-title"><?php print $datos["subtitulo"]; ?></h5>
      </div>
        
        <p class="card-text fs-sm text-muted"><?php print $datos["texto"]; ?></p>
        <?php print "<a href='".RUTA.$datos["url"]."' class='btn ".$datos["colorBoton"]." '>".$datos["textoBoton"]."</a>"; ?>
      </div>
    </div>
  </div>
</div>
</div>


<?php require("template/footer.php"); ?>