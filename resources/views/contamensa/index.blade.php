@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title','Mensajes')


<div class="container">
    <br> <br>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Telefono</th>
                <th scope="col">Correo</th>
                <th scope="col">Mensaje</th>

            </tr>
            </thead>
            <tbody>
                @foreach ($contamensa as $c)
                <tr>
                    <td>{{ $c->nombre}}</td>
                    <td>{{ $c->telefono}}</td>
                    <td>{{ $c->correo}}</td>
                    <td>{{ $c->mensaje}}</td>

                    {{-- <td>
                        
                        <a href="{{ url('/contamensaj/'.$c->id.'/edit')}}" class="btn btn-sm- btn-primary">Editar</a>
                        <form style="display: inline" action="{{ route('contacto.destroy', $c->id) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm- btn-danger" title="Eliminar Contacto" onclick="return confirm('Desea borrar a este contacto?','{{$c->id}}')">Eliminar</a>
                            
                        </form>
                    </td> --}}

                </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection