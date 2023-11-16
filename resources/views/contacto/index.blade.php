@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title','Contactos')


<div class="container">
    <br> <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Nombre Tarjeta</th>
                <th scope="col">Número Tarjeta</th>
                <th scope="col">Fecha Expiración</th>
                <th scope="col">CVV</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($contacto as $c)
                    @foreach ($tarjeta as $t)
                <tr>
                    <td>{{ $c->nombre}}</td>
                    <td>{{ $c->apellido}}</td>
                    <td>{{ $c->telefono}}</td>
                    <td>{{ $t->nombretar}}</td>
                    <td>{{ $t->numtar}}</td>
                    <td>{{ $t->fechaexp}}</td>
                    <td>{{ $t->cvv}}</td>
                    <td>
                        
                        <a href="{{ url('/contacto/'.$c->id.'/edit')}}" class="btn btn-sm- btn-primary">Editar</a>
                        <form style="display: inline" action="{{ route('contacto.destroy', $c->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm- btn-danger" title="Eliminar Contacto" onclick="return confirm('Desea borrar a este contacto?','{{$c->id}}')">Eliminar</a>
                            
                        </form>
                    </td>

                </tr>
                    @endforeach
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection