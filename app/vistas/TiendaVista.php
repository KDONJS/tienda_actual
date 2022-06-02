<?php require("template/header.php"); ?>

       <!-- Hero slider-->
       <section class="tns-carousel tns-controls-static tns-nav-enabled tns-nav-light tns-nav-inside">
       <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                    <img src="<?php print $url_base ?>/img/home/hero-slider/02.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                    <img src="<?php print $url_base ?>/img/home/hero-slider/03.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                    <img src="<?php print $url_base ?>/img/home/hero-slider/01.jpg" class="d-block w-100" alt="...">
              </div>
          </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      </div>
      </section>
      <!-- Popular categories-->
      <section class="container position-relative pt-3 pt-lg-0 pb-5 mt-lg-n10" style="z-index: 10;">
        <div class="row">
          <div class="col-xl-8 col-lg-9">
            <div class="card border-0 shadow-lg">
              <div class="card-body px-3 pt-grid-gutter pb-0">
                <div class="row g-0 ps-1">
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="img/home/categories/cat-sm01.jpg" alt="Men">
                      <h3 class="fs-base pt-1 mb-0">Men</h3></a></div>
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="img/home/categories/cat-sm02.jpg" alt="Women">
                      <h3 class="fs-base pt-1 mb-0">Women</h3></a></div>
                  <div class="col-sm-4 px-2 mb-grid-gutter"><a class="d-block text-center text-decoration-none me-1" href="shop-grid-ls.html"><img class="d-block rounded mb-3" src="img/home/categories/cat-sm03.jpg" alt="Kids">
                      <h3 class="fs-base pt-1 mb-0">Kids</h3></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Products grid (Trending products)-->
      <section class="container pt-md-3 pb-5 mb-md-3">
        <h2 class="h3 text-center">Trending products</h2>
        <div class="row pt-4 mx-n2">
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/01.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sneakers &amp; Keds</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Women Colorblock Sneakers</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$154.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-75">
                    <label class="form-option-label" for="s-75">7.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-80" checked>
                    <label class="form-option-label" for="s-80">8</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-85">
                    <label class="form-option-label" for="s-85">8.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size1" id="s-90">
                    <label class="form-option-label" for="s-90">9</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card"><span class="badge badge-danger badge-shadow">Sale</span>
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/02.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s T-shirt</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Cotton Lace Blouse</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$28.<small>50</small></span>
                    <del class="fs-sm text-muted">$38.<small>50</small></del>
                  </div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="white" checked>
                    <label class="form-option-label rounded-circle" for="white"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="blue">
                    <label class="form-option-label rounded-circle" for="blue"><span class="form-option-color rounded-circle" style="background-color: #d1dceb;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="yellow">
                    <label class="form-option-label rounded-circle" for="yellow"><span class="form-option-color rounded-circle" style="background-color: #f4e6a2;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color1" id="pink">
                    <label class="form-option-label rounded-circle" for="pink"><span class="form-option-color rounded-circle" style="background-color: #f3dcff;"></span></label>
                  </div>
                </div>
                <div class="d-flex mb-2">
                  <select class="form-select form-select-sm me-2">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
                  <button class="btn btn-primary btn-sm" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                </div>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/03.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women’s Shorts</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Mom High Waist Shorts</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$39.<small>50</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="xs">
                    <label class="form-option-label" for="xs">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="s" checked>
                    <label class="form-option-label" for="s">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="m">
                    <label class="form-option-label" for="m">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size2" id="l">
                    <label class="form-option-label" for="l">L</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/07.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women's Swimwear</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Two-Piece Bikini in Print</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$18.<small>99</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="xs3" checked>
                    <label class="form-option-label" for="xs3">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="s3">
                    <label class="form-option-label" for="s3">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size4" id="m3">
                    <label class="form-option-label" for="m3">M</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/04.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Sportswear</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Women Sports Jacket</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$68.<small>40</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="xs2" checked>
                    <label class="form-option-label" for="xs2">XS</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="s2">
                    <label class="form-option-label" for="s2">S</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="m2">
                    <label class="form-option-label" for="m2">M</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size3" id="l2">
                    <label class="form-option-label" for="l2">L</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/05.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Men’s Sunglasses</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Polarized Sunglasses</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-muted fs-sm">Out of stock</span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden"><a class="btn btn-secondary btn-sm d-block w-100 mb-2" href="shop-single-v1.html">View details</a>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/06.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Backpacks</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">TH Jeans City Backpack</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$79.<small>50</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-half active"></i><i class="star-rating-icon ci-star"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="khaki" checked>
                    <label class="form-option-label rounded-circle" for="khaki"><span class="form-option-color rounded-circle" style="background-color: #97947c;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="jeans">
                    <label class="form-option-label rounded-circle" for="jeans"><span class="form-option-color rounded-circle" style="background-color: #99a8be;"></span></label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="color2" id="white2">
                    <label class="form-option-label rounded-circle" for="white2"><span class="form-option-color rounded-circle" style="background-color: #eaeaeb;"></span></label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
          <!-- Product-->
          <div class="col-lg-3 col-md-4 col-sm-6 px-2 mb-4">
            <div class="card product-card">
              <button class="btn-wishlist btn-sm" type="button" data-bs-toggle="tooltip" data-bs-placement="left" title="Add to wishlist"><i class="ci-heart"></i></button><a class="card-img-top d-block overflow-hidden" href="shop-single-v1.html"><img src="img/shop/catalog/25.jpg" alt="Product"></a>
              <div class="card-body py-2"><a class="product-meta d-block fs-xs pb-1" href="#">Women's Sneakers</a>
                <h3 class="product-title fs-sm"><a href="shop-single-v1.html">Leather High-Top Sneakers</a></h3>
                <div class="d-flex justify-content-between">
                  <div class="product-price"><span class="text-accent">$215.<small>00</small></span></div>
                  <div class="star-rating"><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star-filled active"></i><i class="star-rating-icon ci-star"></i>
                  </div>
                </div>
              </div>
              <div class="card-body card-body-hidden">
                <div class="text-center pb-2">
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="s4-80">
                    <label class="form-option-label" for="s4-80">8</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="s4-85" checked>
                    <label class="form-option-label" for="s4-85">8.5</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="s4-90">
                    <label class="form-option-label" for="s4-90">9</label>
                  </div>
                  <div class="form-check form-option form-check-inline mb-2">
                    <input class="form-check-input" type="radio" name="size5" id="s4-95">
                    <label class="form-option-label" for="s4-95">9.5</label>
                  </div>
                </div>
                <button class="btn btn-primary btn-sm d-block w-100 mb-2" type="button"><i class="ci-cart fs-sm me-1"></i>Add to Cart</button>
                <div class="text-center"><a class="nav-link-style fs-ms" href="#quick-view" data-bs-toggle="modal"><i class="ci-eye align-middle me-1"></i>Quick view</a></div>
              </div>
            </div>
            <hr class="d-sm-none">
          </div>
        </div>
        <div class="text-center pt-3"><a class="btn btn-outline-accent" href="shop-grid-ls.html">More products<i class="ci-arrow-right ms-1"></i></a></div>
      </section>
      <!-- Banners-->
      <section class="container pb-4 mb-md-3">
        <div class="row">
          <div class="col-md-8 mb-4">
            <div class="d-sm-flex justify-content-between align-items-center bg-secondary overflow-hidden rounded-3">
              <div class="py-4 my-2 my-md-0 py-md-5 px-4 ms-md-3 text-center text-sm-start">
                <h4 class="fs-lg fw-light mb-2">Hurry up! Limited time offer</h4>
                <h3 class="mb-4">Converse All Star on Sale</h3><a class="btn btn-primary btn-shadow btn-sm" href="#">Shop Now</a>
              </div><img class="d-block ms-auto" src="img/shop/catalog/banner.jpg" alt="Shop Converse">
            </div>
          </div>
          <div class="col-md-4 mb-4">
            <div class="d-flex flex-column h-100 justify-content-center bg-size-cover bg-position-center rounded-3" style="background-image: url(img/blog/banner-bg.jpg);">
              <div class="py-4 my-2 px-4 text-center">
                <div class="py-1">
                  <h5 class="mb-2">Your Add Banner Here</h5>
                  <p class="fs-sm text-muted">Hurry up to reserve your spot</p><a class="btn btn-primary btn-shadow btn-sm" href="#">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Featured category (Hoodie)-->
 
      <!-- Shop by brand-->
      <section class="container py-lg-4 mb-4">
        <h2 class="h3 text-center pb-4">Auspiciadores</h2></h2>
        <div class="row">
          <div class="col-md-3 col-sm-4 col-6">
            <a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#">
            <img class="d-block mx-auto" src="<?php print $url_base; ?>/img/shop/brands/LOGOTIPO-AGEP_VERSIONES.png" style="width: 150px;" alt="Brand">
          </a>
        </div>
         
          <div class="col-md-3 col-sm-4 col-6">
            <a class="d-block bg-white shadow-sm rounded-3 py-3 py-sm-4 mb-grid-gutter" href="#">
              <img class="d-block mx-auto" src="<?php print $url_base; ?>/img/shop/brands/personaje-red-point-png.png" style="width: 150px;" alt="Brand">
            </a>
          </div>
        </div>
      </section>
      <!-- Blog + Instagram info cards-->
      <!-- <section class="container-fluid px-0">
        <div class="row g-0">
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-primary" href="blog-list-sidebar.html">
              <div class="card-body text-center"><i class="ci-edit h3 mt-2 mb-4 text-primary"></i>
                <h3 class="h5 mb-1">Read the blog</h3>
                <p class="text-muted fs-sm">Latest store, fashion news and trends</p>
              </div></a></div>
          <div class="col-md-6"><a class="card border-0 rounded-0 text-decoration-none py-md-4 bg-faded-accent" href="#">
              <div class="card-body text-center"><i class="ci-instagram h3 mt-2 mb-4 text-accent"></i>
                <h3 class="h5 mb-1">Follow on Instagram</h3>
                <p class="text-muted fs-sm">#ShopWithCartzilla</p>
              </div></a></div>
        </div> -->
      </section>
    </main>
    <!-- Footer-->
   
<?php  require("template/footer.php"); ?>