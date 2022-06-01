<?php $url_base = "http://localhost/tienda_actual/public"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php print $datos["titulo"]; ?></title>
    <!-- SEO Meta Tags-->
    <meta name="description" content="Cartzilla - Bootstrap E-commerce Template">
    <meta name="keywords" content="bootstrap, shop, e-commerce, market, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <meta name="author" content="Createx Studio">
    <!-- Viewport-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon and Touch Icons-->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" color="#fe6a6a" href="safari-pinned-tab.svg">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <!-- Vendor Styles including: Font Icons, Plugins, etc.-->
    <link rel="stylesheet" media="screen" href="<?php print $url_base ?>/vendor/simplebar/dist/simplebar.min.css"/>
    <link rel="stylesheet" media="screen" href="<?php print $url_base ?>/vendor/tiny-slider/dist/tiny-slider.css"/>
    <!-- Main Theme Styles + Bootstrap-->
    <link rel="stylesheet" media="screen" href="<?php print $url_base ?>/css/theme.min.css">

  </head>
  <!-- Body-->
  <body class="handheld-toolbar-enabled">

  
      <!-- Navbar 3 Level (Light)-->
      <header class="shadow-sm">

        <!-- Remove "navbar-sticky" class to make navigation bar scrollable with the page.-->
        <div class="navbar-sticky bg-light">
          <div class="navbar navbar-expand-lg navbar-light">
            <div class="container">
            <a class="navbar-brand d-none d-sm-block flex-shrink-0 custom_img" href="<?php print RUTA; ?>/index.php">
                <img src="<?php print $url_base ?>/img/Recurso 3.png" width="142" alt="Cartzilla">
            </a>
            <a class="navbar-brand d-sm-none flex-shrink-0 me-2 custom_img" href="<?php print RUTA; ?>/index.php">
                <img src="<?php print $url_base ?>/img/Recurso 3.png" width="74" alt="Cartzilla">
            </a>
              <div class="input-group d-none d-lg-flex mx-4">
                <input class="form-control rounded-end pe-5" type="text" placeholder="Busca tus productos"><i class="ci-search position-absolute top-50 end-0 translate-middle-y text-muted fs-base me-3"></i>
              </div>
              <div class="navbar-toolbar d-flex flex-shrink-0 align-items-center">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"><span class="navbar-toggler-icon"></span></button><a class="navbar-tool navbar-stuck-toggler" href="#"><span class="navbar-tool-tooltip">Expand menu</span>
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-menu"></i></div></a>
                 
                  <a class="navbar-tool ms-1 ms-lg-0 me-n1 me-lg-2" href="#">
                  <div class="navbar-tool-icon-box"><i class="navbar-tool-icon ci-user"></i></div>
                  <div class="navbar-tool-text ms-n3"><small>Hola, Ingresar</small>Mi cuenta</div></a>
                <div class="navbar-tool dropdown ms-3"><a class="navbar-tool-icon-box bg-secondary dropdown-toggle" href="shop-cart.html"><span class="navbar-tool-label">1</span><i class="navbar-tool-icon ci-cart"></i></a><a class="navbar-tool-text" href="shop-cart.html"><small>carrito</small>S/. 265.00</a>
                  <!-- Cart dropdown-->
                  <div class="dropdown-menu dropdown-menu-end">
                    <div class="widget widget-cart px-3 pt-2 pb-3" style="width: 20rem;">
                      <div style="height: 15rem;" data-simplebar data-simplebar-auto-hide="false">
                       
                        <div class="widget-cart-item py-2 border-bottom">
                          <button class="btn-close text-danger" type="button" aria-label="Remove"><span aria-hidden="true">&times;</span></button>
                          <div class="d-flex align-items-center"><a class="flex-shrink-0" href="shop-single-v1.html"><img src="<?php print $url_base ?>/img/shop/cart/widget/02.jpg" width="64" alt="Product"></a>
                            <div class="ps-2">
                              <h6 class="widget-product-title"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h6>
                              <div class="widget-product-meta"><span class="text-accent me-2">$79.<small>50</small></span><span class="text-muted">x 1</span></div>
                            </div>
                          </div>
                        </div>

                      </div>
                      <div class="d-flex flex-wrap justify-content-between align-items-center py-3">
                        <div class="fs-sm me-2 py-2"><span class="text-muted">Subtotal:</span><span class="text-accent fs-base ms-1">S/. 265.<small>00</small></span></div><a class="btn btn-outline-secondary btn-sm" href="shop-cart.html">Ir a carrito<i class="ci-arrow-right ms-1 me-n1"></i></a>
                      </div><a class="btn btn-primary btn-sm d-block w-100" href="checkout-details.html"><i class="ci-card me-2 fs-base align-middle"></i>Checkout</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="navbar navbar-expand-lg navbar-light navbar-stuck-menu mt-n2 pt-0 pb-2">
            <div class="container">
              <div class="collapse navbar-collapse" id="navbarCollapse">
                <!-- Search-->
                <div class="input-group d-lg-none my-3"><i class="ci-search position-absolute top-50 start-0 translate-middle-y text-muted fs-base ms-3"></i>
                  <input class="form-control rounded-start" type="text" placeholder="busca tus productos">
                </div>
                <!-- Departments menu-->
                <ul class="navbar-nav navbar-mega-nav pe-lg-2 me-lg-2">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle ps-lg-0" href="#" data-bs-toggle="dropdown"><i class="ci-view-grid me-2"></i>Departments</a>
                    <div class="dropdown-menu px-2 pb-4">


                      <div class="d-flex flex-wrap flex-sm-nowrap">
                       
                      </div>

                      <div class="d-flex flex-wrap flex-sm-nowrap">
                       
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="<?php print $url_base ?>/img/shop/departments/05.jpg" alt="Accessories"></a>
                            <h6 class="fs-base mb-2">Accessories</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Hats</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Sunglasses</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Bags</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="mega-dropdown-column pt-4 px-2 px-lg-3">
                          <div class="widget widget-links"><a class="d-block overflow-hidden rounded-3 mb-3" href="#"><img src="<?php print $url_base ?>/img/shop/departments/06.jpg" alt="Entertainment"></a>
                            <h6 class="fs-base mb-2">Entertainment</h6>
                            <ul class="widget-list">
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Kid's toys</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Video games</a></li>
                              <li class="widget-list-item mb-1"><a class="widget-list-link" href="#">Outdoor / Camping</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>

                <!-- Primary menu-->
                <ul class="navbar-nav">
                  <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Inicio</a>
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="#" data-bs-toggle="dropdown">Tienda</a>
                    
                  </li>
                  <li class="nav-item dropdown "><a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Nosotros</a>
                   
                  </li>
                  <li class="nav-item dropdown"><a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Cuenta</a>
                   
                  </li>
                  
                  <li class="nav-item dropdown"><a class="nav-link" href="#" data-bs-toggle="dropdown" data-bs-auto-close="outside">Contacto</a>
                   
                  </li>
                 
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </header>

 