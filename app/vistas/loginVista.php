<?php require("template/header.php"); ?>

      <div class="container py-4 py-lg-5 my-4">
        <div class="row">
          <div class="col-md-6">
            <div class="card border-0 shadow">
              <div class="card-body">
                <h2 class="h4 mb-1">Inicia sesión</h2>
                
                <hr>
                <h3 class="fs-base pt-4 pb-2">Bienvenido</h3>


                <!-- login del sistema -->
                    <form class="needs-validation" action="<?php print RUTA; ?>/Login/verifica" method="POST" novalidate>

                  <div class="input-group mb-3">
                      <i class="position-absolute top-50 ci-user translate-middle-y text-muted fs-base ms-3"></i>
                    <input class="form-control rounded-start" type="text" placeholder="Usuario" id="usuario" name="usuario" required>
                  </div>
                  <div class="input-group mb-3"><i class="ci-locked position-absolute top-50 translate-middle-y text-muted fs-base ms-3"></i>
                    <div class="password-toggle w-100">
                      <input class="form-control" type="password" name="clave" id="clave" placeholder="Contraseña" required>
                      <label class="password-toggle-btn" aria-label="Show/hide password">
                        <input class="password-toggle-check" type="checkbox"><span class="password-toggle-indicator"></span>
                      </label>
                    </div>
                  </div>
                  <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox"  name="recordar" checked id="remember_me">
                      <label class="form-check-label" for="remember_me">Recordar</label>
                    </div>
                    <a class="nav-link-inline fs-sm" href="<?php print RUTA; ?>/Login/olvido/">¿Olvidaste contraseña?</a>
                  </div>
                  <hr class="mt-4">

                  <div class="d-flex flex-wrap justify-content-between">
                  <div class="text-end pt-4">
                    <a class="btn" href="<?php print RUTA; ?>/Login/registro">Si no tienes una cuenta registrate aca!!</a>
                  </div>
                    <div class="text-end pt-4">
                    <input class="btn btn-primary" type="submit" value="Enviar"></input>
                  </div>
                  </div>
                  
                </form>
                
                <!-- login del sistema -->

              </div>
            </div>
          </div>
          <div class="col-md-6 mt-3 mt-md-0">
                     <!-- Banner with controls-->
          <div class="col-md-12">
            <div class="d-flex flex-column h-100 overflow-hidden rounded-3" style="background-color: #e2e9ef;">
              <div class="d-flex justify-content-between px-grid-gutter py-grid-gutter">
                <div>
                  <h3 class="mb-1">Las mejores promos</h3><a class="fs-md" href="">Tienda<i class="ci-arrow-right fs-xs align-middle ms-1"></i></a>
                </div>
                <div class="tns-carousel-controls" id="hoodie-day">
                  <button type="button"><i class="ci-arrow-left"></i></button>
                  <button type="button"><i class="ci-arrow-right"></i></button>
                </div>
              </div>
              <a class="d-none d-md-block mt-auto" href="shop-grid-ls.html">
                <img class="d-block w-100" src="<?php print $url_base ?>/img/home/categories/cat-lg04.jpg" alt="For Women">
              </a>
            </div>
          </div>
          

          </div>
        </div>
      </div>
    </main>
   
<?php  require("template/footer.php"); ?>