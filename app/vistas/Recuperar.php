<?php require("template/header.php"); ?>

<div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <h2 class="h3 mb-4"><?php print $datos["subtitulo"]; ?></h2>
            <p class="fs-md"><?php print $datos["texto"]; ?></p>
            <ol class="list-unstyled fs-md">
              <li><span class="text-primary me-2">1.</span>Complete su dirección de correo electrónico a continuación.</li>
              <li><span class="text-primary me-2">2.</span>Le enviaremos un código temporal por correo electrónico.</li>
              <li><span class="text-primary me-2">3.</span>Use el código para cambiar su contraseña en nuestro sitio web seguro.</li>
            </ol>
            <div class="card py-2 mt-4">
            <?php 
      
      if (isset($datos["error"])) {
        if (count($datos["error"])>0) {
          print "
          <div class='alert alert-danger d-flex' role='alert'>
            <div class='alert-icon'>
              <i class='ci-close-circle'></i>
            </div>";

            print "<div>";
            foreach ($datos["error"] as $key => $value) {
              print "".$key.": ".$value."<br>";
            }
            print"</div> </div>";
        }
      }
      
      ?>
              <form class="card-body needs-validation" action="<?php print RUTA; ?>login/olvido" method="POST" novalidate>
                <div class="mb-3">
                  <label class="form-label" for="correo">Correo electrónico</label>
                  <input class="form-control" type="email" name="correo" id="correo" required>
                  <div class="invalid-feedback">Por favor validar si el correo es correcto</div>
                </div>
                <input class="btn btn-primary" type="submit" value="Cambiar contraseña">
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
   
<?php  require("template/footer.php"); ?>