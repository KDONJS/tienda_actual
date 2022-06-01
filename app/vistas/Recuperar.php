<?php require("template/header.php"); ?>

<div class="container py-4 py-lg-5 my-4">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-10">
            <h2 class="h3 mb-4">¿Olvidaste tu contraseña?</h2>
            <p class="fs-md">Cambie su contraseña en tres sencillos pasos. Esto ayuda a mantener segura su nueva contraseña.</p>
            <ol class="list-unstyled fs-md">
              <li><span class="text-primary me-2">1.</span>Complete su dirección de correo electrónico a continuación.</li>
              <li><span class="text-primary me-2">2.</span>Le enviaremos un código temporal por correo electrónico.</li>
              <li><span class="text-primary me-2">3.</span>Use el código para cambiar su contraseña en nuestro sitio web seguro.</li>
            </ol>
            <div class="card py-2 mt-4">
              <form class="card-body needs-validation" novalidate>
                <div class="mb-3">
                  <label class="form-label" for="recover-email">Ingrese su dirección de correo electrónico</label>
                  <input class="form-control" type="email" id="recover-email" required>
                  <div class="invalid-feedback">Please provide valid email address.</div>
                </div>
                <input class="btn btn-primary" type="submit" value="Cambiar contraseña">
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
   
<?php  require("template/footer.php"); ?>