@extends('layouts.base')
@extends('layouts.nav')
@section('content')
@section('title', 'Mensajes')


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
                    <th scope="col">Desencriptar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contamensa as $c)
                    <tr>
                        <td>{{ $c->nombre }}</td>
                        <td>{{ $c->telefono }}</td>
                        <td class="limite">{{ $c->correo }}</td>
                        <td class="limite">{{ $c->mensaje }}</td>
                        <td>
                            <input type="checkbox" class="desencriptar" data-correo="{{ $c->correodes }}"
                                data-correocrip="{{ $c->correo }}" data-mensaje="{{ $c->mensajedes }}"
                                data-mensajecrip="{{ $c->mensaje }}">
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var maxLength = 50;
                var checkboxes = document.querySelectorAll('.desencriptar');

                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener('change', function() {
                        var correoDes = this.getAttribute('data-correo');
                        var correoCrip = this.getAttribute('data-correocrip');
                        var mensajeDes = this.getAttribute('data-mensaje');
                        var mensajeCrip = this.getAttribute('data-mensajecrip');
                        var celdaCorreo = this.parentElement.previousElementSibling
                            .previousElementSibling;
                        var celdaCorreoCrip = this.parentElement.previousElementSibling
                            .previousElementSibling;
                        var celdaMensaje = this.parentElement.previousElementSibling;
                        var celdaMensajeCrip = this.parentElement.previousElementSibling;

                        if (this.checked) {
                            celdaCorreo.textContent = correoDes;
                            celdaMensaje.textContent = mensajeDes;
                        } else {
                            celdaCorreoCrip.textContent = truncateText(correoCrip, maxLength);
                            celdaMensajeCrip.textContent = truncateText(mensajeCrip, maxLength);
                        }
                    });
                });

                function truncateText(text, maxLength) {
                    var originalText = text.trim();
                    if (originalText.length > maxLength) {
                        return originalText.substring(0, maxLength) + '...';
                    } else {
                        return originalText;
                    }
                }
            });
        </script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var maxLength = 50;

                var cells = document.querySelectorAll('.limite');

                cells.forEach(function(cell) {
                    var originalText = cell.textContent.trim();
                    if (originalText.length > maxLength) {
                        var truncatedText = originalText.substring(0, maxLength) + '...';
                        cell.textContent = truncatedText;

                        // cell.setAttribute(completo, originalText);
                    }
                });
            });
        </script>
    </div>
</div>
@endsection
