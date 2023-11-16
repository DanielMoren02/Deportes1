@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title','Actualizar Contacto')

<body>
    <form action="{{ route('contacto.update', $contacto->id) }}" method="POST">
        @method('PUT')  
        @csrf 
    <div class="container">
        <br>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" id="exampleInputEmail1"
            value="{{ old('nombre', $contacto->nombre) }}" aria-describedby="emailHelp" placeholder="Ingrese su nombre">
        </div>
        <br>
            <div class="form-group">
            <label for="apellido">Apellidos</label>
        <input type="text" name="apellido" class="form-control" id="exampleInputPassword1" 
        value="{{ old('apellido', $contacto->apellido) }}" placeholder="Ingrese sus Apellidos">
        </div>
        <br>

        <div class="form-group">
            <label for="telefono">Telefono</label>
                <input type="text" ondrop="return false;" onpaste="return false;"
                onkeypress="return event.charCode>=48 && event.charCode<=57" pattern="\d{10}" maxlength="10"  class="form-control form-control-user " id="telefono" name="telefono"
                value="{{ old('telefono', $contacto->telefono) }}" placeholder="Telefono" >
        </div>
        
        <br>
        <div class="form-group">
            <label for="correo">correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputPassword1" 
            value="{{ old('correo', $contacto->correo) }}" placeholder="Ingrese sus Apellidos">
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </div> 
    </form>
@endsection