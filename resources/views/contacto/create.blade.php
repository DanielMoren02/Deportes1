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

                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-danger d-flex align-items-center" role="alert">
                            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                            <div>
                              <strong>Por favor!</strong> {{$error}}
                            </div>
                          </div>                            
                        @endforeach
                        
                    @endif
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form action="{{url('contacto')}}" id="contactForm" method="POST">
                                @csrf
                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombre" name="nombre" value="{{old('nombre')}}" type="text" placeholder="Ingrese su nombre" data-sb-validations="required"  />
                                    <label for="nombre">Nombre</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su nombre</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="apellido" name="apellido" value="{{old('apellido')}}" type="text" placeholder="Ingrese su apellido" data-sb-validations="required" />
                                    <label for="apellido">Apellido</label>
                                    <div class="invalid-feedback" data-sb-feedback="name:required">Ingrese su apellido</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="telefono" name="telefono" value="{{old('telefono')}}" type="text" placeholder="(123) 456-7890" data-sb-validations="required" />
                                    <label for="telefono">Telefono</label>
                                    <div class="invalid-feedback" data-sb-feedback="phone:required">Ingrese un teléfono</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" name="correo" id="email" type="email" value="{{old('correo')}}" placeholder="name@example.com" data-sb-validations="required,email" />
                                    <label for="correo">Correo</label>
                                    <div class="invalid-feedback" data-sb-feedback="email:required">Ingrese un correo.</div>
                                    <div class="invalid-feedback" data-sb-feedback="email:email">El correo no es válido</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="nombretar" value="{{old('nombretar')}}" name="nombretar" type="text" placeholder="Card Holder's Name" />
                                    <label for="nombretar">Nombre de la tarjeta</label>
                                    <div class="invalid-feedback" data-sb-feedback="cardHolderName:required">Ingrese el nombre del titular de la tarjeta</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" maxlength="16" id="numtar" value="{{old('numtar')}}" maxlength="16" name="numtar" type="numtar" placeholder="0000 0000 0000 0000" data-sb-validations="required">
                                    <label for="numtar">Número de tarjeta</label>
                                    <div class="invalid-feedback" data-sb-feedback="cardNumber:required">Ingrese el número de tarjeta</div>
                                </div>

                                
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="fechaexp" name="fechaexp" value="{{old('fechaexp')}}" type="text" maxlength="5" placeholder="01/23" data-sb-validations="required"/>
                                    <label for="fechaexp">Fecha de expiración</label>
                                    <div class="invalid-feedback" data-sb-feedback="expiryDate:required">Ingrese la fecha de vencimiento</div>
                                </div>

                                <div class="form-floating mb-3">
                                    <input class="form-control" id="cvv" name="cvv" value="{{old('cvv')}}" type="text" placeholder="CVV" maxlength="3" data-sb-validations="required" >
                                    <label for="cvv">CVV</label>
                                    <div class="invalid-feedback" data-sb-feedback="cvv:required">Ingrese el CVV</div>
                                </div>
                                <button class="purchase--btn">Registrar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <script>
        document.getElementById('fechaexp').addEventListener('input', function(e) {
        let inputValue = e.target.value;
        if (/\d{2}/\d{2}/.test(inputValue)) {
            e.target.value = inputValue.slice(0, 5);
        } else if (/\d{2}/.test(inputValue) && inputValue.length === 2) {
            e.target.value = inputValue + '/';
        }
        });
    </script>
</body>


@endsection