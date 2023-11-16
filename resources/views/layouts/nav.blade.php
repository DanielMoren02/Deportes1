
<nav class="navbar navbar-expand-lg navbar-light bg-white py-3">
    <div class="container px-5">
        <a class="navbar-brand" href="{{url ('/')}}"><span class="fw-bolder text-primary">Deportes Siglo XXI</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 small fw-bolder">


                <li class="nav-item"><a class="nav-link" href="{{url ('/')}}">Inicio</a></li>


                
                                
                @if(auth()->user()->role == 'admin')
                <li class="nav-item"><a class="nav-link" href="{{url ('contacto')}}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url ('contamensa')}}">Mensajes</a></li>

                @elseif(auth()->user()->role == 'cliente')
                <li class="nav-item"><a class="nav-link" href="{{url ('contacto/create')}}">Contacto</a></li>
                <li class="nav-item"><a class="nav-link" href="{{url ('contamensa/create')}}">Escribenos</a></li>
                {{-- <li class="nav-item"><a class="nav-link" href="{{url ('contamen/encriptada')}}">Opiniones</a></li> --}}
                @endif
                {{-- CARRITO DE COMPRAS --}}
                {{-- <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button> --}}


                {{-- LOGOUT --}}
                <li class="nav-item">
                    <a id="navbarDropdown" class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                     {{ __('Cerrar Sesión de') }}
                     
                        {{ Auth::user()->name }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>