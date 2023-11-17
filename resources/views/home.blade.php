@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title','Inicio')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<body class="d-flex flex-column h-100">
    <!-- Product section -->
    <section class="py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="row gx-4 gx-lg-5 align-items-center">
                <div class="col-md-6">
                    <img class="img-fluid" src="{{url('img/nike.jpg')}}" alt="Nike Air Jordan 1">
                </div>
                <div class="col-md-6">
                    <div class="small mb-1">SKU: BST-498</div>
                    <h1 class="display-5 fw-bolder">Nike Air Jordan 1</h1>
                    <div class="fs-5 mb-5">
                        <span class="text-decoration-line-through">$7000</span>
                        <span>$5000.00</span>
                    </div>
                    <p class="lead">Nike Air Jordan 1 Mid 'Panda' Negro Blanco DV0991-101 Tallas para Mujer Totalmente Nuevas</p>
                    <div class="d-flex">
                        <input class="form-control text-center me-3" id="inputQuantity" type="number" value="1" style="max-width: 3rem" />
                        <button class="btn btn-outline-dark flex-shrink-0" type="button">
                            <i class="bi-cart-fill me-1"></i>
                            Añadir al carrito
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Related items section -->
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4">Productos</h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Primer conjunto de productos -->
                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img"></div>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/14/08/shoe-1324431_1280.jpg" alt="Product title">
                        <div class="card-info">
                            <p class="text-title">sports tennis</p>
                            <p class="text-body">Calzado deportivo para jugar al fútbol.</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title">$1500.00</span>
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <!-- Icono SVG aquí -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img"></div>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/15/24/inline-skate-1324585_1280.jpg" alt="Product title">
                        <div class="card-info">
                            <p class="text-title">inline skates</p>
                            <p class="text-body">Patines en linea ideales para calle</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title">$850.99</span>
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <!-- Icono SVG aquí -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img"></div>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/14/52/inline-skate-1324496_1280.jpg" alt="Product title">
                        <div class="card-info">
                            <p class="text-title">inline skates</p>
                            <p class="text-body">Patines en linea ideales para calle</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title">$850.99</span>
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <!-- Icono SVG aquí -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Repite el código de arriba para 2 productos más -->
            </div>
        </div>
    
    <section class="py-5 bg-light">
        <div class="container px-4 px-lg-5 mt-5">
            <h2 class="fw-bolder mb-4"></h2>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <!-- Segundo conjunto de productos -->
                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img"></div>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/14/31/backpack-1324445_1280.jpg" alt="Product title">
                        <div class="card-info">
                            <p class="text-title">climbing backpack</p>
                            <p class="text-body">Ideal para las excursiones para facilidad y comodidad </p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title">$600.00</span>
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <!-- Icono SVG aquí -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                    <div class="card">
                        <div class="card-img"></div>
                        <img src="https://cdn.pixabay.com/photo/2016/04/12/15/44/helm-1324663_1280.jpg" alt="Product title">
                        <div class="card-info">
                            <p class="text-title">safety helmet</p>
                            <p class="text-body">De util proteccion para esas etapas de aventura</p>
                        </div>
                        <div class="card-footer">
                            <span class="text-title">$300.99</span>
                            <div class="card-button">
                                <svg class="svg-icon" viewBox="0 0 20 20">
                                    <!-- Icono SVG aquí -->
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col mb-5 col-lg-3 col-md-4 col-sm-6">
                  <div class="card">
                      <div class="card-img"></div>
                      <img src="https://cdn.pixabay.com/photo/2016/04/12/16/57/tent-1324847_1280.jpg" alt="Product title">
                      <div class="card-info">
                          <p class="text-title">
                            Camping house</p>
                          <p class="text-body">De mucha importancia para las aventuras en familia o solo</p>
                      </div>
                      <div class="card-footer">
                          <span class="text-title">$2500.00</span>
                          <div class="card-button">
                              <svg class="svg-icon" viewBox="0 0 20 20">
                                  <!-- Icono SVG aquí -->
                              </svg>
                          </div>
                      </div>
                  </div>
              </div>
                
            </div>
        </div>
    </section>
</body>
@endsection