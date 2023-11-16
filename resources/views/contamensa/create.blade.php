@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title','Nuevo Contacto')


<body class="d-flex flex-column">
    <main class="flex-shrink-0">
        <section class="py-5">
            <div class="container px-5">
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Ingresa tus datos</h1>
                        <p class="lead fw-normal text-muted mb-0">Contactanos</p>
                    </div>

                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="{{url('contamensa')}}" id="contactForm" method="POST">
                                @csrf
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Ingrese su nombre" data-sb-validations="required" required />
                                    <label for="nombre">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su nombre</div>
                                </div>
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="telefono" name="telefono" type="text" ondrop="return false;" onpaste="return false;"
                                           onkeypress="return event.charCode>=48 && event.charCode<=57" pattern="\d{10}" maxlength="10" placeholder="(123) 456-7890" data-sb-validations="required" required />
                                    <label for="telefono">Telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese un teléfono</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="correo" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" required />
                                    <label for="correo">Correo</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un correo.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido</div>
                                </div>

                                <div class="form-floating mb-3">
                                    <textarea class="form-control" name="mensaje" id="mensaje" type="text" placeholder="Opine acerca de nosotros" data-sb-validations="required,email" required></textarea>
                                    <label for="mensaje">Mensaje</label>
                                </div>

                                <button class="purchase--btn">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>


@endsection