<?php require("template/header.php"); ?>


<div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h2 class="h4 mb-1"></h2>
                <a class="btn" href="<?php print RUTA; ?>/login">Vilver para iniciar sesion</a>
                <hr>
                <a  href="" class="pt-4">
                <img class="img_register" src="<?php print $url_base ?>/img/Recurso 3.png"  alt="Cartzilla">
            </a>

              </div>
            </div>
          </div>
          <div class="col-md-6 pt-4 mt-3 mt-md-0">
            <h2 class="h4 mb-3">¿Sin cuenta? Inscribirse</h2>
            <p class="fs-sm text-muted mb-4">El registro lleva menos de un minuto, pero le da control total sobre sus pedidos.</p>

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
            
            <!-- formulario de registro de usuario -->
            <form class="<?php print RUTA; ?>/login/registro" method="POST" novalidate>
              <div class="row gx-4 gy-3">
                <div class="col-sm-12">
                  <label class="form-label" for="nombre">Nombre</label>
                  <input class="form-control" name="nombre" id="nombre" type="text" required id="reg-fn" 
                  value='<?php isset($datos["data"]["nombre"])? print $datos["data"]["nombre"]:""; ?>' >
                  <div class="invalid-feedback">Please enter your first name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="apellidom">Apellido materno</label>
                  <input class="form-control" name="apellidom" id="apellidom" type="text" required id="reg-ln"
                  value='<?php isset($datos["data"]["apellidom"])? print $datos["data"]["apellidom"]:""; ?>'>
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="apellidop">Apellido paterno</label>
                  <input class="form-control" name="apellidop" id="apellidop" type="text" required id="reg-ln"
                  value='<?php isset($datos["data"]["apellidop"])? print $datos["data"]["apellidop"]:""; ?>' >
                  <div class="invalid-feedback">Please enter your last name!</div>
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="correo">E-mail</label>
                  <input class="form-control" name="correo" id="correo" type="email" required id="reg-email"
                  value='<?php isset($datos["data"]["correo"])? print $datos["data"]["correo"]:""; ?>' >
                  <div class="invalid-feedback">Please enter valid email address!</div>
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="direccion">Dirección</label>
                  <input class="form-control" name="direccion" id="direccion" type="text" required id="reg-phone"
                  value='<?php isset($datos["data"]["direccion"])? print $datos["data"]["direccion"]:""; ?>' >
                  <div class="invalid-feedback">Please enter your dirección</div>
                </div>
                <div class="col-sm-12">
                  <label class="form-label" for="estado">Estado</label>
                  <input class="form-control" name="estado" id="estado" type="text" required id="reg-phone"
                  value='<?php isset($datos["data"]["estado"])? print $datos["data"]["estado"]:""; ?>' >
                  <div class="invalid-feedback">Please enter your dirección</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="ciudad">Ciudad</label>
                  <input class="form-control" name="ciudad" id="ciudad" type="text" required id="reg-phone"
                  value='<?php isset($datos["data"]["ciudad"])? print $datos["data"]["ciudad"]:""; ?>' >
                  <div class="invalid-feedback">Please enter your dirección</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="distrito">Distrito</label>
                  <input class="form-control" name="distrito" id="distrito" type="text" 
                  value='<?php isset($datos["data"]["distrito"])? print $datos["data"]["distrito"]:""; ?>' >
                  <div class="invalid-feedback">Please enter password!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="codpos">codigo postal</label>
                  <input class="form-control" name="codpos" id="codpos" type="text" 
                  value='<?php isset($datos["data"]["codpos"])? print $datos["data"]["codpos"]:""; ?>' >
                  <div class="invalid-feedback">Please enter password!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="pais">Pais</label>
                  <input class="form-control" name="pais" id="pais" type="text" 
                  value='<?php isset($datos["data"]["pais"])? print $datos["data"]["pais"]:""; ?>' >
                  <div class="invalid-feedback">Please enter password!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="clave">Password</label>
                  <input class="form-control" name="clave" id="clave" type="password" required 
                  value='<?php isset($datos["data"]["clave"])? print $datos["data"]["clave"]:""; ?>' >
                  <div class="invalid-feedback">Passwords do not match!</div>
                </div>
                <div class="col-sm-6">
                  <label class="form-label" for="clave2">Repetir password</label>
                  <input class="form-control" name="clave2" id="clave2" type="password" required 
                  value='<?php isset($datos["data"]["clave2"])? print $datos["data"]["clave2"]:""; ?>' >
                  <div class="invalid-feedback">Passwords do not match!</div>
                </div>
                <div class="col-12 text-end">
                  <input class="btn btn-primary" type="submit" value="Registrar">
                </div>
              </div>
            </form>
            <!-- formulario de registro de usuario -->

          </div>
        </div>
      </div>
    </main>
   
<?php  require("template/footer.php"); ?>