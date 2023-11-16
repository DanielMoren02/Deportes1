@extends('layouts.base')
@extends('layouts.navin')
@section('content')
@section('title','Registrarme')
<body>
	<br> <br>
	<center>
		<div class="form-container">
			<p class="title">¡Bienvenido!</p>
			<form method="POST" action="{{ route('register') }}" class="form">
				@csrf
                <input style="color: black" id="email" type="text" class="input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Ingrese su nombre">
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

			  <input style="color: black" id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ingrese su correo">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
			  <input style="color: black" type="password" name="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Ingrese su contraseña">
			        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            <input style="color: black" type="password" class="input" name="password_confirmation" required autocomplete="new-password" placeholder="Reescriba su contraseña">
            <input id="role" type="text" name="role" value="cliente" hidden>
			  {{-- <p class="page-link">
				<span class="page-link-label">Forgot Password?</span>
			  </p> --}}
			  <button class="form-btn">Registrarme</button> 
			</form>
		  </div>
	</center>
</body>
<br> <br>
@endsection
